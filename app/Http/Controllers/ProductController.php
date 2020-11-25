<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        return view('pages.product', compact('product'));
    }
}
