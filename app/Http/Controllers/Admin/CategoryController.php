<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
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

        return redirect()->route('admin.categories.index')->with('success', 'Category has been created.');
    }

    public function edit(Category $category)
    {
        $parent_categories = Category::latest()
            ->with('children')
            ->parentCategory()
            ->get()
            ->reject(function ($parent_category) use ($category) {
                info($category->id);
                info($parent_category->id);
                return $category->id === $parent_category->id;
            });

        dd($parent_categories->toArray());

        return view('admin.category.edit', compact('parent_categories', 'category'));
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category has been deleted.');
    }
}
