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

        if ($coupon_details[Coupon::AMOUNT_FIX]) {
            dd('fix');
        }else{
            Session::put('coupon', [
                'coupon' => $coupon_details->coupon,
                'type' => $coupon_details->amount_type,
                'discount_price' => Cart::instance('cart')->total() - ($coupon_details->amount / 100 * Cart::instance('cart')->total()),
            ]);
        }

        return back()->with('success', 'Coupon apply successful.');
    }
}
