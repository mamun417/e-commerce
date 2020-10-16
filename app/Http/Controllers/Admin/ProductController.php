<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Handler\FileHandler;
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

        $products = Product::latest()->with('category', 'brand')->paginate($per_page);

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
        $request_data = $request->only([
            'name', 'category_id', 'quantity', 'selling_price',
            'discount_price', 'description', 'brand_id',
            'color', 'size', 'video_link', 'main_slider',
            'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend'
        ]);

        $request_data['slug'] = slug($request->name);
        $request_data['color'] = implode(',', $request->color ?? []);
        $request_data['size'] = implode(',', $request->size ?? []);

        foreach ($request->img ?? [] as $key => $img) {
            $img_input = 'img.' . $key;

            if ($request->hasFile($img_input)) {
                $image_path = FileHandler::upload($img_input, Product::IMAGE_PATH);
                $request_data['image_' . numberToWords(++$key)] = $image_path;
            }
        }

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
        $product->delete();

        foreach (['image_one', 'image_two', 'image_three'] as $image) {
            FileHandler::delete($product->$image);
        }

        return back()->with('success', 'Product has been deleted successful.');
    }

    public function changeStatus(Product $product)
    {
        $product->update(['status' => !$product->status]);
        return back()->with('success', 'Product status has been updated successful.');
    }
}
