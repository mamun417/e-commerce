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
}
