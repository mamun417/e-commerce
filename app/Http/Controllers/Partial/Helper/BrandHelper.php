<?php

namespace App\Http\Controllers\Partial\Helper;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandHelper extends Controller
{
    public static function getBrands($disable = true)
    {
        $brands = Brand::latest();
        $brands = !$disable ? $brands->active() : $brands;
        return $brands->get();
    }
}
