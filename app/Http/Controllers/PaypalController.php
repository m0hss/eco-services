<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use DB;

class PaypalController extends Controller
{
    public function payment()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->get()->toArray();

        $purchase_units = [];
        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            $purchase_units[] = [
                'reference_id' => 'item_' . $item['id'],  // Ensure this is unique
                'amount' => [
                    'currency_code' => 'EUR',
                    'value' => $item['price'] * $item['quantity'],
                    'breakdown' => [
                        'item_total' => [
                            'currency_code' => 'EUR',
                            'value' => $item['price'] * $item['quantity']
                        ]
                    ]
                ],
                'items' => [
                    [
                        'name' => $product->title,
                        'unit_amount' => [
                            'currency_code' => 'USD',
                            'value' => $item['price']
                        ],
                        'quantity' => $item['quantity']
                    ]
                ]
            ];
        }

        $data = [
            'intent' => 'CAPTURE',
            'purchase_units' => $purchase_units,
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel')
            ]
        ];

        // return session()->get('id');

        $provider = new PayPalClient;

        $config = config('paypal');

        $provider->setApiCredentials($config);

        \Log::debug('PayPal Config:', $config);  // Check if the config values are loaded

        $paypalToken = $provider->getAccessToken();

        $provider->setCurrency('EUR');

        $response = $provider->createOrder($data);
        // dd($response);
        // Check if the order creation was successful
        if (isset($response['id']) && isset($response['links'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    // Redirect the customer to this URL to approve the payment
                    return redirect($link['href']);
                }
            }
        }
    }

    public function success(Request $request)
    {
        // dd($request);
        $provider = new PayPalClient;
        $config = config('paypal');
        $provider->setApiCredentials($config);

        // Capture payment after the customer returns
        $paypalToken = $provider->getAccessToken();

        // Check the current status of the order
        $orderDetails = $provider->showOrderDetails($request->token);
        \Log::info('Order Details', ['response' => $orderDetails]);

        if ($orderDetails['status'] == 'COMPLETED') {
            request()->session()->flash('success', 'Payment has already been completed. Thank you!');
            return redirect()->route('home');
        } elseif ($orderDetails['status'] != 'APPROVED') {
            request()->session()->flash('error', 'Payment has not been approved for capture.');
            return redirect()->back();
        }

        // dd($paypalToken);
        $response = $provider->capturePaymentOrder($request->token);
        // dd($response);

        if ($response['status'] == 'COMPLETED') {
            request()->session()->flash('success', 'You successfully pay from PayPal, Thank You 🎉🎉');
            session()->forget('cart');
            session()->forget('coupon');
            return redirect()->route('user.order.index');
        }

        request()->session()->flash('error', 'Something went wrong please try again!!!');
        return redirect()->route('home');
    }

    public function cancel(Request $request)
    {
        $orderId = $request->session()->get('last_order_id', null);
        // dd($orderId);
        if (!$orderId) {
            request()->session()->flash('error', 'No order to cancel.');
            return redirect()->route('home');
        }
    
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'canceled';
            $order->payment_status = 'unpaid';
            $order->save();
            request()->session()->flash('error', 'Payment was cancelled !');
        } else {
            request()->session()->flash('error', 'Order not found.');
        }
    
        return redirect()->route('home');
    }
}