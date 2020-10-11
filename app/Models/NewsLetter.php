<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $request_data)
 * @method static latest()
 */
class NewsLetter extends Model
{
    protected $fillable = ['email'];
}
