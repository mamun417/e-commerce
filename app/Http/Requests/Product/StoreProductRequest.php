<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed name
 */
class StoreProductRequest extends FormRequest
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
            'name' => 'required|max:255|unique:products',
            'category_id' => 'required',
            'quantity' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric|lt:selling_price',
            'video_link' => 'sometimes|max:255',
            'img.*' => 'mimes:jpg,jpeg,png,bmp|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'img.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed'
        ];
    }
}
