<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function list()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.list', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Category::create([
            'name' => $request->name,
            'status' => 1,
        ]);
        return redirect()->route('category.list');
    }
    public function statusUpdate(Category $category)
    {
        if ($category->status == 0) {
            $status = 1;  
        } else {
            $status = 0;
        }
        $category->update([
            'status' => $status,
        ]);
        return back();
    }
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Category $category, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.list');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
}
