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
        $category = Category::whereSlug($slug)->first();

        $child_categories = (new CategoryHelper)->getChildCategories($category);

        // collect ids list
        $child_category_ids = array_map(function ($child_cat) {
            return $child_cat['id'];
        }, $child_categories);

        // target category + its all child categories
        $category_ids = array_merge([$category->id], $child_category_ids);

        $products = Product::whereIn('id', $category_ids)->latest()->paginate(15);

        return view('pages.products', compact('products', 'child_categories'));
    }
}
