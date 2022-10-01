<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
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

    public function create()
    {
        return view("backend/category/categoryadd");
    }

    public function show($id)
    {
        $categoryShow = Category::find($id);
        return view('backend.category.categoryshow', compact('categoryShow'));
    }

    public function edit($id)
    {
        $categoryedit = Category::find($id);
        return view("backend/category/categoryedit",compact('categoryedit'));
    }

    public function update(Request $request,$id)
    {
        //dd($request);
        $categorie = Category::find($id);
        $data = [
            'name'=> $request->name,
        ];
        $categorie->update($data);
        return redirect()->route('admin.category')->with('success','Category edit Successdfully');
    }

    public function destroy($id)
    {
        $categoryDestroy = Category::find($id);
        $categoryDestroy->delete();
        return redirect()->route('admin.category')->with('success', 'SuccessFully Deleted Category');
    }
}
