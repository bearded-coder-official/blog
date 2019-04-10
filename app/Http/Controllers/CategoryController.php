<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();

        return view('category-list', ['categories' => $categories]);
    }

    public function add()
    {
        return view('category-form');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3|unique:categories,slug',
        ]);

        $category = new Category();
        $category->name = $request->request->get('name');
        $category->slug = $request->request->get('slug');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
//        return view('category-edit', ['category' => $category]);
        return view('category-form', ['category' => $category]);
    }

    public function store(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'slug' => "required|min:3|unique:categories,slug,{$category->id},id",
        ]);

        $category->name = $request->request->get('name');
        $category->slug = $request->request->get('slug');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}