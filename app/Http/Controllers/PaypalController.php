<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
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
                    'currency_code' => 'USD',
                    'value' => $item['price'] * $item['quantity'],
                    'breakdown' => [
                        'item_total' => [
                            'currency_code' => 'USD',
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
                'return_url' => route('payment.success'),
                'cancel_url' => route('payment.cancel')
            ]
        ];

        // return session()->get('id');

        $provider = new PayPalClient;

        $config = config('paypal');

        $provider->setApiCredentials($config);

        \Log::debug('PayPal Config:', $config);  // Check if the config values are loaded

        $paypalToken = $provider->getAccessToken();

        // $provider->setCurrency('EUR');

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

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {   
        dd($request);
        $provider = new PayPalClient;
        $config = config('paypal');
        $provider->setApiCredentials($config);
     
        // Capture payment after the customer returns
        $paypalToken = $provider->getAccessToken();
        // dd($paypalToken);
        $response = $provider->capturePaymentOrder($paypalToken['access_token']);
        dd($response);

        if ($response['status'] == 'COMPLETED') {
            request()->session()->flash('success', 'You successfully pay from PayPal! Thank You');
            session()->forget('cart');
            session()->forget('coupon');
            return redirect()->route('home');
        }

        request()->session()->flash('error', 'Something went wrong please try again!!!');
        return redirect()->back();
    }
}

// public function cancel()
// {
//     request()->session()->flash('error', 'Payment was cancelled!');
//     return redirect()->back();
// }
