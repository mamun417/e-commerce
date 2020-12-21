<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Cart;
use Illuminate\Http\Request;
use Session;

class CouponController extends Controller
{
    public function apply(Request $request)
    {
        $request->validate([
            'coupon' => 'required'
        ]);

        $coupon_details = Coupon::whereCoupon($request->input('coupon'))->active()->first();

        if (!$coupon_details) {
            return back()->with('error', 'Please provide a valid coupon.');
        }

        $cart_total = Cart::instance('cart')->total();

        if ($coupon_details[Coupon::AMOUNT_FIX]) {
            dd('fix');
        } else {
            Session::put(Coupon::COUPON_KEY, [
                'name' => $coupon_details->coupon,
                'amount' => $coupon_details->amount,
                'type' => $coupon_details->amount_type,
                'discount_price' => $cart_total - (($coupon_details->amount / 100) * $cart_total),
            ]);
        }

        return back()->with('success', 'Coupon apply successful.');
    }

    public function remove()
    {
        Session::forget(Coupon::COUPON_KEY);

        return back()->with('success', 'Coupon has been remove successful.');
    }
}
