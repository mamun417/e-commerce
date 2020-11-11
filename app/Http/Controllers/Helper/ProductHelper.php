<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductHelper extends Controller
{
    public static function filterProductByType($products, $type, $limit = 8)
    {
        $products = is_array($products) ? collect($products) : $products;

        return $products->filter(function ($product, $key) use ($type, $limit) {
            return $key + 1 > $limit ? false : $product[$type];
        });
    }
}
