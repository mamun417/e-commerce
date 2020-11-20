<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Session;

class WishlistController extends Controller
{
    public function index()
    {
        $wish_list_products = Cart::instance('wishlist')->content();
        return view('pages.wishlist', compact('wish_list_products'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        $exits = Cart::instance('wishlist')->search(function ($cartItem) use ($product) {
            return $cartItem->id === $product->id;
        });

        if (count($exits)) return back()->with('warning', 'Product already added in your wishlist.');

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

        Cart::instance('wishlist')->add($data);

        return back()->with('success', 'Product add to wishlist successfully.');
    }
}
