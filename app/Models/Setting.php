<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $array1)
 */
class Setting extends Model
{
    protected $fillable = ['name', 'value'];
}
