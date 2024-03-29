<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Partial\Helper\CategoryHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Partial\Handler\FileHandler;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        $per_page = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $categories = Category::latest()->with('parent');

        if ($keyword) {
            $categories = $categories->where('name', 'like', '%' . request()->keyword . '%');
        }

        $categories = $categories->paginate($per_page);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $parent_categories = CategoryHelper::getMainCategories();
        return view('admin.category.create', compact('parent_categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $request_data = $request->only(['name', 'slug', 'parent_id', 'img']);

        $request_data['slug'] = slug($request->slug);

        if ($request->hasFile('img')) {
            $image_path = FileHandler::upload($request->file('img'), Category::IMAGE_PATH);
            $request_data['image'] = $image_path;
        }

        Category::create($request_data);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been created successful.');
    }

    public function edit(Category $category)
    {
        $parent_categories = CategoryHelper::getMainCategories();

        $parent_categories = CategoryHelper::removeCategoryById($parent_categories, $category->id);

        return view('admin.category.edit', compact('parent_categories', 'category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request_data = $request->only(['name', 'slug', 'parent_id', 'img']);

        $request_data['slug'] = slug($request->slug);

        if ($request->hasFile('img')) {
            $image_path = FileHandler::upload($request->file('img'), Category::IMAGE_PATH);
            FileHandler::delete($category->image);
            $request_data['image'] = $image_path;
        }

        $category->update($request_data);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been updated successful.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        FileHandler::delete($category->image);
        return back()->with('success', 'Category has been deleted successful.');
    }

    public function changeStatus(Category $category)
    {
        $category->update(['status' => !$category->status]);
        return response()->json(['status' => true]);
    }
}
