<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use DB;

class StripeController extends Controller
{
    public function stripe(Request $request)
    {
        // Ensure user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to proceed.');
        }

        // Get the cart items for the authenticated user
        $cart = Cart::where('user_id', auth()->user()->id)
            ->where('order_id', null)
            ->get();

        // Check if cart is empty
        if ($cart->isEmpty()) {
            return redirect()->route('home')->with('error', 'Your cart is empty.');
        }

        // Initialize Stripe client
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

        // Prepare line items for Stripe checkout session
        $lineItems = $cart->map(function ($item) {
            $product = Product::find($item->product_id);
            return [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $product->title ?? 'Product',  // Fallback to 'Product' if title is missing
                    ],
                    'unit_amount' => $item->price * 100,  // Stripe expects amount in cents
                ],
                'quantity' => $item->quantity,
            ];
        })->toArray();

        // dd($lineItems);
        try {
            // Create a Stripe checkout session
            $session = $stripe->checkout->sessions->create([
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('stripe.cancel'),  // Define the cancel route
            ]);

            // Redirect to Stripe checkout page
            return redirect($session->url);
        } catch (\Exception $e) {
            \Log::debug('PayPal Order Response:', $e->getMessage());
            return redirect()->route('stripe.cancel')->with('error', 'Failed to create a payment session. Please try again.');
        }
    }

    public function success(Request $request, CartService $cartService)
    {
        // Handle successful payment
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

        $response = $stripe->checkout->sessions->retrieve($request->session_id);

        if ($response['status'] == 'complete') {
            request()->session()->flash('success', 'Payment was successful, Thank You 🎉🎉');
            // dd(session()->all());

            $request->session()->forget('cart');
            $request->session()->forget('coupon');

            $cartService->clearCart(auth()->user()->id);

            return redirect()->route('user.order.index');
        }

        request()->session()->flash('error', 'Something went wrong please try again!!!');
        return redirect()->route('home');
    }

    public function cancel(Request $request)
    {
        // Handle canceled payment
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
