<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        

        // return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.index');
    }

    public function store(StoreCategoryRequest $request)
    {
        $major = Major::create($request->all());

        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}
