<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Partial\Helper\CartHelper;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart_products = Cart::instance('cart')->content()->reverse();
        return view('pages.cart', compact('cart_products'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'quantity' => 'required|numeric'
        ]);

        $product = Product::whereSlug($slug)->firstOrFail();

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->input('quantity') ?? 1,
            'price' => $product->discount_price ?? $product->selling_price,
            'weight' => 0,
            'options' => [
                'image' => $product->image_one,
                'color' => '',
                'size' => ''
            ]
        ];

        Cart::instance('cart')->add($data);

        return response()->json([
            'success' => true,
            'cart_count' => Cart::instance('cart')->content()->count(),
            'cart_total' => Cart::instance('cart')->total(),
            'message' => 'Product add to cart successfully.'
        ]);
    }

    public function remove($rowId)
    {
        $exits = CartHelper::checkCartExitProduct('cart', $rowId, 'rowId');

        if (!$exits) return response()->json([
            'success' => false,
            'message' => 'Invalid rowId.'
        ], 404);

        Cart::instance('cart')->remove($rowId);

        return response()->json([
            'success' => true,
            'cart_count' => Cart::instance('cart')->content()->count(),
            'cart_total' => Cart::instance('cart')->total(),
            'message' => 'Product remove from cart successfully.'
        ]);
    }

    public function empty()
    {
        Cart::instance('cart')->destroy();
        return back()->with('success', 'Cart empty successful.');
    }
}
