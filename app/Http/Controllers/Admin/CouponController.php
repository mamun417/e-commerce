<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coupon\StoreCouponRequest;
use App\Http\Requests\Coupon\UpdateCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $per_page = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $coupons = Coupon::latest();

        if ($keyword) {
            $keyword = '%' . request()->keyword . '%';

            $coupons = $coupons->where('coupon', 'like', $keyword)
                ->orWhere('amount', 'like', $keyword)
                ->orWhere('amount_type', 'like', $keyword)
                ->orWhere('expire_date', 'like', $keyword);
        }

        $coupons = $coupons->paginate($per_page);

        return view('admin.coupon.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(StoreCouponRequest $request)
    {
        $request_data = $request->only(['coupon', 'amount', 'amount_type', 'expire_date', 'user_ids']);

        Coupon::create($request_data);

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been created successful.');
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.coupon.edit', compact('coupon'));
    }

    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $request_data = $request->only(['coupon', 'amount', 'amount_type', 'expire_date', 'user_ids']);

        $coupon->update($request_data);

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been updated successful.');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return back()->with('success', 'Coupon has been deleted successful.');
    }

    public function changeStatus(Coupon $coupon)
    {
        $coupon->update(['status' => !$coupon->status]);
        return response()->json(['status' => true]);
    }
}
