<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Handler\FileHandler;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Str;

class BrandController extends Controller
{
    public function index()
    {
        $per_page = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $brands = Brand::latest();

        if ($keyword) {
            $brands = $brands->where('name', 'like', '%' . request()->keyword . '%');
        }

        $brands = $brands->paginate($per_page);

        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $request_data = $request->only(['name', 'slug', 'img']);

        $request_data['slug'] = Str::slug($request->slug);

        if ($request->hasFile('img')) {
            $image_path = FileHandler::upload('img', Brand::IMAGE_PATH);
            $request_data['image'] = $image_path;
        }

        Brand::create($request_data);

        return redirect()->route('admin.brands.index')->with('success', 'Brand has been created successful.');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $request_data = $request->only(['name', 'slug', 'img']);

        $request_data['slug'] = Str::slug($request->slug);

        if ($request->hasFile('img')) {
            $image_path = FileHandler::upload('img', Brand::IMAGE_PATH);
            FileHandler::delete($brand->image);
            $request_data['image'] = $image_path;
        }

        $brand->update($request_data);

        return redirect()->route('admin.brands.index')->with('success', 'Brand has been updated successful.');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        FileHandler::delete($brand->image);
        return back()->with('success', 'Brand has been deleted successful.');
    }

    public function changeStatus(Brand $brand)
    {
        $brand->update(['status' => !$brand->status]);
        return back()->with('success', 'Brand status has been updated successful.');
    }
}
