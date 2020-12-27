<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    const ACTIVE = '1';
    const AMOUNT_FIX = 1;
    const AMOUNT_PERCENT = 0;
    const COUPON_KEY = 'coupon';
    const AMOUNT_TYPES = [self::AMOUNT_FIX => 'Fixed', self::AMOUNT_PERCENT => 'Percent'];

    protected $fillable = [
        'status', 'coupon', 'amount', 'amount_type', 'expire_date', 'user_ids'
    ];

    public static function getAmountTypeName($type)
    {
        return self::AMOUNT_TYPES[$type];
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }
}
