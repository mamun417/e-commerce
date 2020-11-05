<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all_products = Product::active()->latest();

        $products['hot_new'] = $all_products->where('hot_new', 1)->get();
        $products['best_rated'] = $all_products->where('best_rated', 1)->get();
        $products['trend'] = $all_products->where('best_rated', 1)->get();

        $brands = Brand::latest()->get();

        return view('pages.home', compact('products', 'brands'));
    }
}
