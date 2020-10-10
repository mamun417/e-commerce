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
    protected $fillable = [
        'status', 'coupon', 'amount', 'amount_type', 'expire_date', 'user_ids'
    ];
}
