<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Partial\Handler\FileHandler;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

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
        $parent_categories = Category::getMainCategories(false);

        $brands = Brand::getBrands();

        return view('admin.product.create', compact('parent_categories', 'brands'));
    }

    public function store(StoreProductRequest $request)
    {
        $product_model = new Product();
        $request_data = $request->only($product_model->fillable);

        $request_data['slug'] = slug($request->name);
        $request_data['color'] = isset($request->color) ? json_encode($request->color) : '';
        $request_data['size'] = isset($request->size) ? json_encode($request->size) : '';

        // $request_data['description'] = FileHandler::uploadEditorImage($request->description);

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
        return response()->view('admin.product.product-info', compact('product'));
    }

    public function edit(Product $product)
    {
        $parent_categories = Category::getMainCategories(false);

        $brands = Brand::getBrands();

        return view('admin.product.edit', compact('product', 'parent_categories', 'brands'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product_model = new Product();
        $request_data = $request->only($product_model->fillable);

        $request_data['slug'] = slug($request->name);
        $request_data['color'] = isset($request->color) ? json_encode($request->color) : '';
        $request_data['size'] = isset($request->size) ? json_encode($request->size) : '';

        /*$product->description = $request->description;
        if ($product->isDirty('description')) {
            $request_data['description'] = FileHandler::uploadEditorImage($request->description);
            dd('is dirty');
        }*/

        foreach (Product::getTypes() as $type_name => $display_name) {
            $request_data[$type_name] = $request->$type_name ?? 0;
        }

        foreach ($request->img ?? [] as $key => $img) {
            $img_input = 'img.' . $key;

            if ($request->hasFile($img_input)) {
                $image_path = FileHandler::upload($img_input, Product::IMAGE_PATH);

                $img_key = ++$key;

                $request_data['image_' . numberToWords($img_key)] = $image_path;

                FileHandler::delete($product['image_' . numberToWords($img_key)]);
            }
        }

        $product->update($request_data);

        return redirect()->route('admin.products.index')->with('success', 'Product has been updated successful.');
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
        return response()->json(['status' => true]);
    }
}
