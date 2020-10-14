<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $per_page = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $products = Product::latest()->paginate($per_page);

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $parent_categories = Category::getParentCategories(false);

        $brands = Brand::getBrands();

        return view('admin.product.create', compact('parent_categories', 'brands'));
    }

    public function store(StoreProductRequest $request)
    {
        $request['color'] = implode(',', $request->color);
        $request['size'] = implode(',', $request->size);

        $request_data = $request->only([...(new Product)->getFillable()]);

        Product::create($request_data);

        return redirect()->route('admin.products.index')->with('success', 'Product has been crated successful.');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
