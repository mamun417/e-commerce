<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductHelper extends Controller
{
    public static function filterProductByType($products, $type, $limit = 8)
    {
        if (is_array($products)) {
            $products = collect($products);
        }

        $products = $products->filter(function ($product, $key) use ($type, $limit) {

            if ($key + 1 > $limit) {
                return false;
            }

            return $product[$type];
        });

        return $products;
    }
}
