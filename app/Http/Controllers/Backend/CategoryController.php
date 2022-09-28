<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category()
    {
        $categories = Category::all();
        return view("backend/category/home", compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.category')->with('success', 'SuccessFully Created Category');
    }

    public function categoryadd()
    {
        return view("backend/category/categoryadd");
    }

    public function categoryshow($id)
    {
        $categoryShow = Category::find($id);
        return view('backend.category.categoryshow', compact('categoryShow'));
    }

    public function categoryedit()
    {
        return view("backend/category/categoryedit");
    }

    public function destroy($id)
    {
        $categoryDestroy = Category::find($id);
        $categoryDestroy->delete();
        return redirect()->route('admin.category')->with('success', 'SuccessFully Deleted Category');
    }
}
