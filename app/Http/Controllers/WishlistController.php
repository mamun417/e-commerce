<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Session;

class WishlistController extends Controller
{
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->selling_price,
            'weight' => 0,
            'options' => [
                'image' => $product->image_one
            ]
        ];

        try {
            Cart::instance('cart')->add($data);
            Session::flash('success', 'Product add to cart successfully.');
        } catch (\Exception $e) {
            Session::flash('error', 'There is a problem, Please try again later.');
        }

        return back();
    }
}
