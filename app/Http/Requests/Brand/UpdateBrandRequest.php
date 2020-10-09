<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed brand
 * @property mixed slug
 */
class UpdateBrandRequest extends FormRequest
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
        $brand_id = $this->brand->id;

        return [
            'name' => 'required|max:255|unique:brands,name,'. $brand_id,
            'slug' => 'required|max:255|unique:brands,slug,'. $brand_id,
        ];
    }
}
