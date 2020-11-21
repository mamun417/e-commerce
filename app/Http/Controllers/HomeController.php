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
        $all_products = Product::with('category', 'brand')->active()->latest()->get();

        $types = [
            'hot_deal' => 3,
            'hot_new' => 8,
            'best_rated' => 8,
            'trend' => 8,
            'main_slider' => 1,
            'mid_slider' => 3,
            'buyone_getone' => null,
        ];

        $products = [];
        foreach ($all_products as $product) {

            foreach ($types as $type => $limit) {

                if ($product[$type] && (is_null($limit) || (@count($products[$type]) < $limit))) {
                    if ($limit == 1) {
                        $products[$type] = $product;
                    } else {
                        $products[$type][] = $product;
                    }
                }
            }
        }

        $brands = Brand::getBrands(false);

        return view('pages.home', compact('products', 'brands'));
    }
}
