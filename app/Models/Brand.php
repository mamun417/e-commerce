<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static create(array $request_data)
 * @property mixed image
 * @property mixed status
 */
class Brand extends Model
{
    const ACTIVE = '1';
    const INACTIVE = '0';
    const IMAGE_PATH = 'brand';

    protected $fillable = ['status', 'name', 'slug', 'image'];

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    public static function getBrands($disable = true)
    {
        $brands = Brand::latest();

        if (!$disable) {
            $brands = $brands->active();
        }

        return $brands->get();
    }
}
