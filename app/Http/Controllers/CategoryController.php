<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $categories = Category::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();
        return view('Category.index', compact('categories', 'search'));
    }

    public function create()
    {
        return view('Category/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        Category::create($validated);
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('Category/edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        $category->update($validatedData);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }


}
