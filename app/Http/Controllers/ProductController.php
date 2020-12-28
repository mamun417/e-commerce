<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Partial\Helper\BrandHelper;
use App\Http\Controllers\Partial\Helper\CategoryHelper;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    private int $paginate = 15;

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $view = request('quick_view') ? 'components.quick-view-product' : 'pages.single-product';

        return view($view, compact('product'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $child_categories = (new CategoryHelper)->getChildCategories($category);

        // create ids list
        $child_category_ids = array_map(function ($child_cat) {
            return $child_cat['id'];
        }, $child_categories);

        // target category + its all child categories
        $category_ids = array_merge([$category->id], $child_category_ids);

        $products = Product::whereIn('id', $category_ids)->latest();

        // get brands which relation with products
        $brands = $this->getBrands($products->get());

        $products = $products->paginate($this->paginate);

        return view('pages.products', compact('products', 'child_categories', 'brands'));
    }

    // get brands which relation with products
    private function getBrands($products)
    {
        $brand_ids = collect($products)->map(function ($product) {
            return $product->brand_id;
        });

        return Brand::whereIn('id', $brand_ids)->latest()->get();
    }

    public function byBrand($slug)
    {
        $brand = Brand::where('slug', $slug)->select('id')->firstOrFail();

        $products = Product::where('brand_id', $brand->id)->latest()->paginate($this->paginate);

        $brands = BrandHelper::getBrands(false);

        return view('pages.products', compact('products', 'brands'));
    }
}
