<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $allproduct = Product::all();
        $productlist = Product::orderby('id', 'DESC')->paginate(10);
        return view("backend/product/productlist", compact('productlist', 'allproduct'));
    }
    public function productadd()
    {
        $categories = Category::all();
        return view("backend/product/productadd", compact('categories'));
    }

    public function store(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('upload/images/', $filename);
            $data['image'] = $filename;
        }
        Product::create([

            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
        ]);
        return redirect()->route('admin.productlist')->with('success', 'Product Created SuccessFully !!!');
    }


    public function create()
    {
        $categories = Category::all();
        return view("backend/product/productadd", compact('categories'));
    }


    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view("backend/product/productedit", compact('categories', 'products'));
    }


    public function update(Request $request)
    {
        //dd($request);
        // do the same for everything else.. 
        // echo $name;

        // $product = Product::find($id);
        // dd($product);

        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        // ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('upload/images/', $filename);
            $data['image'] = $filename;
        }
        Product::where('name', $request->name)->update([

            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
        ]);
        return redirect()->route('admin.productlist')->with('success', 'Product Updated SuccessFully !!!');
    }


    public function show($id)
    {
        $productShow = Product::find($id);
        return view("backend/product/productshow", compact('productShow'));
    }

    public function destroy($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();
        return redirect()->route('admin.productlist')->with('success', 'Product Delete SuccessFully !!!');
    }
}
