<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Partial\Helper\PaymentHelper;
use App\Http\Requests\Order\OrderRequest;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $payment_methods = (new PaymentHelper)->getPaymentMethods();
        return view('pages.checkout', compact('payment_methods'));
    }

    public function order(OrderRequest $request)
    {
        $data = $request->validated();

        if ($request->payment == 'stripe') {
            return view('pages.payment.stripe', compact('data'));
        } elseif ($request->payment == 'paypal') {
            # code...
        } elseif ($request->payment == 'ideal') {
            # code...
        } else {
            echo "Cash On Delivery";
        }


        dd($request->all());
    }

    public function stripePaymentCharge()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51I3Pv2Jka6F1E1TdXyINUL4oKXfebjfJoWLpEzzrO0kbTMYI2KUGoZc8mmZIoJsbbi7n6VKlDuy0WFdseSpbkdzh00zHdBMe18'
        );

        try {
            $res = $stripe->charges->create([
                'amount' => 5*100,
                'currency' => 'usd',
                'source' => request('stripeToken'),
                'description' => 'My First Test Charge (created for API docs)',
                'metadata' => ['order_id' => uniqid()]
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

        return $res;
    }
}
