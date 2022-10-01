<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $allproduct = Product::all();
    //     $index = Product::orderby('id', 'DESC')->paginate(10);
    //     return view("backend/product/index", compact('index', 'allproduct'));
    // }

    public function index()
    {    $allproduct = Product::all();
        $productlist = Product::orderby('id', 'DESC')->paginate(10);
        return view("backend.product.index", compact('productlist','allproduct'));
    }
//    
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
        return redirect()->route('product.index')->with('success', 'Product Created SuccessFully !!!');
    }


    public function create()
    {
        $categories = Category::all();
        return view("backend.product.create", compact('categories'));
    }


    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view("backend.product.edit", compact('categories', 'products'));
    }


<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

         if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move('upload/images/', $filename);
                $data['image'] = $filename;
            }
        $data =[
            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
        ];
       
        
        $products->update($data);
        dd($products);
        return redirect()->route('admin.product.index')->with('success', 'Product Updated SuccessFully !!!');

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
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move('upload/images/', $filename);
        //     $data['image'] = $filename;
        // }
        // Product::where('name', $request->name)->update([

        //     'name' => $request->name,
        //     'caegory' => $request->category,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'image' => $filename,
        //     'tags' => $request->tags,
        //     'img_alt' => $request->img_alt,
        // ]);
=======
    public function update(Request $request ,$id)
    {   $Product=Product::find($id);
       
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('upload/images/', $filename);
            $data['image'] = $filename;


            $data=[
                'name' => $request->name,
                'caegory' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $filename,
                'tags' => $request->tags,
                'img_alt' => $request->img_alt];
            // Product::where('id'.$id)->update(
            // );
            $Product->update($data);
        }

        $data=[
            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $Product->image,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,];
        // Product::where('id'.$id)->update(
        // );
        $Product->update($data);
        return redirect()->route('product.index')->with('success', 'Product Updated SuccessFully !!!');
>>>>>>> ec075d0f6d883a63af9df1a4c8da6a7c7e7e5c4b
    }


    public function show($id)
    {
        $productShow = Product::find($id);
        return view("backend.product.show", compact('productShow'));
    }

    public function destroy($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();
<<<<<<< HEAD
        return redirect()->route('admin.product.index')->with('success', 'Product Delete SuccessFully !!!');
=======
        return redirect()->route('product.index')->with('success', 'Product Delete SuccessFully !!!');
>>>>>>> ec075d0f6d883a63af9df1a4c8da6a7c7e7e5c4b
    }
}