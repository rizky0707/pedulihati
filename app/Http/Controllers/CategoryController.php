<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.users.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.users.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|unique:categories',
        ]);

        $new_category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
            ]);

        return redirect()->route('category.index')->with('success', 'Category has been add');
    }

    public function edit($id)
    {
        $edit_category = Category::findorfail($id);
        return view('admin.users.categories.edit', compact('edit_category'));
    }

    public function update(Request $request, Category $categories)
    {
        $categories->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        
        return redirect()->route('category.index')->with('success', 'Category has been Edit');
    }

    public function destroy($id)
    {
        
       $category = Category::findorfail($id);
       $category->delete();

       return redirect()->route('category.index')->with('success', 'Category has been delete');
    
    }

}
