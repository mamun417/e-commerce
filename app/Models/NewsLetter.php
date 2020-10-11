<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $request_data)
 */
class NewsLetter extends Model
{
    protected $fillable = ['email'];
}
