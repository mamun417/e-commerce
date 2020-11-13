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

        return $products->filter(function ($product) use ($type, $limit) {
            if ($limit) {
                $limit = $limit-1;
                info($limit);
                return $product[$type];
            } else {
                return false;
            }
        });
    }
}
