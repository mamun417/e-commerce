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
        $categories = Category::latest()->get();
        return view('admin.category.create', compact('categories'));
    }

    public function store(CreateCategoryRequest $request)
    {
        $request_data = $request->only(['name', 'slug', 'parent_id', 'img']);

        $request['slug'] = Str::slug($request->slug);

        Category::create($request_data);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been created.');
    }

    public function edit(Category $category)
    {
        dd($category->parent->toArray());
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
