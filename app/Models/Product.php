<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $request_data)
 * @method static latest()
 * @method static whereMainSlider(int $int)
 * @method static active()
 * @method static whereSlug($slug)
 * @property mixed status
 * @property mixed description
 * @property mixed discount_price
 * @property mixed selling_price
 */
class Product extends Model
{
    const IMAGE_PATH = 'product';
    const ACTIVE = '1';

    protected $fillable = [
        'status', 'name', 'category_id', 'quantity', 'selling_price',
        'discount_price', 'description', 'slug', 'brand_id',
        'color', 'size', 'video_link', 'main_slider',
        'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend', 'buyone_getone', 'image_one', 'image_two', 'image_three'
    ];

    protected $appends = ['discount_percent'];

    public function getDiscountPercentAttribute()
    {
        if ($this->discount_price) {
            return intval(($this->selling_price - $this->discount_price) / $this->selling_price * 100);
        }

        return false;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    /**
     * Get specific product types
     * @param $product
     * @return array
     */
    public static function getProductTypes($product)
    {
        $types = [
            'main_slider', 'hot_deal', 'best_rated',
            'mid_slider', 'hot_new', 'trend', 'buyone_getone'
        ];

        return array_filter($types, function ($type) use ($product) {
            return $product[$type];
        });
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
            'trend' => 'Trend',
            'buyone_getone' => 'Buy One Get One'
        ];
    }

    public static function getImagesColumns()
    {
        return ['image_one', 'image_two', 'image_three'];
    }
}
