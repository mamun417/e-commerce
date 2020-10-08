<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Helper\CategoryHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->with('parent')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $parent_categories = Category::latest()->with('children')->parentCategory()->get();
        return view('admin.category.create', compact('parent_categories'));
    }

    public function store(CreateCategoryRequest $request)
    {
        $request_data = $request->only(['name', 'slug', 'parent_id', 'img']);

        $request_data['slug'] = Str::slug($request->slug);

        Category::create($request_data);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been created successful.');
    }

    public function edit(Category $category)
    {
        $parent_categories = Category::latest()
            ->parentCategory()
            ->with('children')
            ->get();

        $parent_categories = CategoryHelper::removeCategoryById($parent_categories, $category->id);

        return view('admin.category.edit', compact('parent_categories', 'category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request_data = $request->only(['name', 'slug', 'parent_id', 'img']);

        $request_data['slug'] = Str::slug($request->slug);

        $category->update($request_data);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been updated successful.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category has been deleted successful.');
    }

    public function changeStatus(Category $category)
    {
        $category->update(['status' => !$category->status]);
        return back()->with('success', 'Category status has been updated successful.');
    }
}
