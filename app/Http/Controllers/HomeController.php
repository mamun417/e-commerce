<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ProductHelper;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all_products = Product::with('category')->active()->latest()->get();

        $products['hot_deal'] = ProductHelper::filterProductByType($all_products, 'hot_deal', 3);
        $products['hot_new'] = ProductHelper::filterProductByType($all_products, 'hot_new', 8);
        $products['best_rated'] = ProductHelper::filterProductByType($all_products, 'best_rated', 8);
        $products['trend'] = ProductHelper::filterProductByType($all_products, 'trend', 8);

        $brands = Brand::getBrands(false);

        return view('pages.home', compact('products', 'brands'));
    }
}
