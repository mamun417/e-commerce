<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Partial\Helper\CategoryHelper;
use App\Models\Category;
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
        $child_categories = (new CategoryHelper)->getChildCategories($slug);

        dd($child_categories);

        $products = Product::latest()->paginate(15);

        return view('pages.products', compact('products'));
    }
}
