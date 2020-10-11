<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static create(array $request_data)
 * @property mixed status
 */
class Coupon extends Model
{
    const AMOUNT_FIX = 1;
    const AMOUNT_PERCENT = 0;
    const AMOUNT_TYPES = [self::AMOUNT_FIX => 'Fixed', self::AMOUNT_PERCENT => 'Percent'];

    protected $fillable = [
        'status', 'coupon', 'amount', 'amount_type', 'expire_date', 'user_ids'
    ];

    public static function getAmountTypeName($type)
    {
        return self::AMOUNT_TYPES[$type];
    }
}
