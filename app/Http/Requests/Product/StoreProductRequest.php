<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

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
            'slug' => 'sometimes|max:255|unique:products',
            'category_id' => 'required',
            'quantity' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'video_link' => 'sometimes|max:255'
        ];
    }
}
