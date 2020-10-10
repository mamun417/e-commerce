<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'status', 'coupon', 'amount', 'amount_type', 'expire', 'user_ids'
    ];
}
