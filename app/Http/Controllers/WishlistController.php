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
            'success' => false,
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
        $exits = CartHelper::checkCartExitProduct('wishlist', $rowId, 'rowId');

        if (!$exits) return response()->json([
            'success' => false,
            'message' => 'Invalid rowId.'
        ], 404);

        Cart::instance('wishlist')->remove($rowId);

        return response()->json([
            'success' => true,
            'wishlist_count' => Cart::instance('wishlist')->content()->count(),
            'message' => 'Product remove from wishlist successfully.'
        ], 200);
    }

    public function moveToCart($rowId)
    {
        $exits = CartHelper::checkCartExitProduct('wishlist', $rowId, 'rowId');

        if (!$exits) return response()->json([
            'success' => false,
            'message' => 'Invalid rowId.'
        ], 404);

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

        return response()->json([
            'success' => true,
            'wishlist_count' => Cart::instance('wishlist')->content()->count(),
            'cart_count' => Cart::instance('cart')->content()->count(),
            'cart_total' => Cart::instance('cart')->total(),
            'message' => 'Product move to cart successfully.'
        ], 200);

        // fsdfsdjfdisf fsd
        // hfghg

    }
}
