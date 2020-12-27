<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Eloquent
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
}
