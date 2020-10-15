<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $request_data)
 * @method static latest()
 */
class Product extends Model
{
    const IMAGE_PATH = 'product';

    protected $fillable = [
        'status', 'name', 'category_id', 'quantity', 'selling_price',
        'discount_price', 'description', 'slug', 'brand_id',
        'color', 'size', 'video_link', 'img_one', 'main_slider',
        'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend', 'image_one', 'image_two', 'image_three'
    ];

    public function getFillable()
    {
        return $this->fillable;
    }
}
