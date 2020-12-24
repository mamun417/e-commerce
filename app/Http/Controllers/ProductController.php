<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();

        $view = request('quick_view') ? 'components.quick-view-product' : 'pages.single-product';

        return view($view, compact('product'));
    }

    public function byCategory($slug)
    {
        $products = Product::all();

        return view('pages.products', compact('products'));
    }
}
