<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed coupon
 */
class UpdateCouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $coupon_id = $this->id;
        
        return [
            'coupon' => 'required|max:255|unique:coupons,coupon,' . $coupon_id,
            'amount' => 'required|numeric',
            'amount_type' => 'required',
            'expire_date' => 'nullable|date'
        ];
    }
}
