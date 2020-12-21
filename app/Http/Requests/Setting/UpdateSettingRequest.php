<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
        return [
            'title' => 'nullable|max:255',
            'company_name' => 'nullable|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|numeric',
            'address' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'shipping_charge' => 'nullable|numeric',
        ];
    }
}
