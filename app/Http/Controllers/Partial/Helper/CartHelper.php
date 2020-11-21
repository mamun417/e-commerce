<?php

namespace App\Http\Controllers\Partial\Helper;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CartHelper extends Controller
{
    public static function checkCartExitProduct($instance, $product_id)
    {
        $products = Cart::instance($instance)->search(function ($cartItem) use ($product_id) {
            return $cartItem->id === $product_id;
        });

        return !!count($products);
    }
}
