<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Partial\Helper\CartHelper;
use App\Models\Product;
use Cart;

class WishlistController extends Controller
{
    public function index()
    {
        $wish_list_products = Cart::instance('wishlist')->content()->reverse();
        return view('pages.wishlist', compact('wish_list_products'));
    }

    public function add($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();

        $exits = CartHelper::checkCartExitProduct('wishlist', $product->id);

        if ($exits) return response()->json([
            'success' => true,
            'message' => 'Already added in your wishlist.'
        ], 409);

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount_price ?? $product->selling_price,
            'weight' => 0,
            'options' => [
                'image' => $product->image_one
            ]
        ];

        Cart::instance('wishlist')->add($data);

        return response()->json([
            'success' => true,
            'wishlist_count' => Cart::instance('wishlist')->content()->count(),
            'message' => 'Product add to wishlist successfully.'
        ], 200);
    }

    public function remove($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return back()->with('success', 'Product remove from wishlist successfully.');
    }

    public function moveToCart($rowId)
    {
        $product = Cart::instance('wishlist')->get($rowId);

        Cart::instance('wishlist')->remove($rowId);

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'image' => $product->options['image']
            ]
        ];

        Cart::instance('cart')->add($data);

        return back()->with('success', 'Product move to cart successfully.');
    }
}
