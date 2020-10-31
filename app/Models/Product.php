<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $request_data)
 * @method static latest()
 * @property mixed status
 * @property mixed description
 */
class Product extends Model
{
    const IMAGE_PATH = 'product';

    protected $fillable = [
        'status', 'name', 'category_id', 'quantity', 'selling_price',
        'discount_price', 'description', 'slug', 'brand_id',
        'color', 'size', 'video_link', 'main_slider',
        'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend', 'image_one', 'image_two', 'image_three'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get product types (which selected for the product)
     * @param $product
     * @return array
     */
    public static function getProductTypes($product)
    {
        $types = collect([
            'main_slider' => $product->main_slider,
            'hot_deal' => $product->hot_deal,
            'best_rated' => $product->best_rated,
            'mid_slider' => $product->mid_slider,
            'hot_new' => $product->hot_new,
            'trend' => $product->trend
        ]);

        return $types->filter(function ($value, $type) {
            return $value;
        })->toArray();
    }

    /**
     * Get product model types list
     * @return string[]
     */
    public static function getTypes()
    {
        return [
            'main_slider' => 'Main Slider',
            'hot_deal' => 'Hot Deal',
            'best_rated' => 'Best Rated',
            'mid_slider' => 'Mid Slider',
            'hot_new' => 'Hot New',
            'trend' => 'Trend'
        ];
    }

    public static function getImagesColumns()
    {
        return ['image_one', 'image_two', 'image_three'];
    }
}
