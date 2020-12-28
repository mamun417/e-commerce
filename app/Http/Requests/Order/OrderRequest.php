<?php

namespace App\Http\Requests\Order;

use App\Http\Controllers\Partial\Helper\PaymentHelper;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        $payment_methods = (new PaymentHelper)->getPaymentMethods();
        $payment_methods = implode(',', $payment_methods);

        return [
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'payment' => 'required|in:' . $payment_methods
        ];
    }
}
