<?php

namespace App\Http\Controllers\Partial\Helper;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CartHelper extends Controller
{
    /**
     * Check product exiting with product_id/rowId
     * @param $instance
     * @param $id
     * @param string $chek_with
     * @return bool
     */
    public static function checkCartExitProduct($instance, $id, $chek_with = 'id')
    {
        $products = Cart::instance($instance)->search(function ($cartItem) use ($id, $chek_with) {
            return $cartItem->$chek_with === $id;
        });

        return !!count($products);
    }
}
