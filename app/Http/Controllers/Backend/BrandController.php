<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Color;
use App\Models\Brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $brand = Brand::orderby('id', 'DESC')->paginate(10);
        return view("backend.brand.index", compact('brand', 'brands'));
    }
    //    
    public function store(Request $request)
    {
        //dd($request);
        Brand::create([

            'name' => $request->name,
            'company' => $request->company,
            'description' => $request->description,
            'color_id' => $request->color_id,
            'image' =>  $this->uploadImage($request->file('image')),
            'is_active' => $request->is_active ? true : false,
        ]);

        return redirect()->route('brand.index')->with('success', 'Product Created SuccessFully !!!');
    }


    public function create()
    {
        $colors = Color::pluck('name', 'id')->toArray();
        return view("backend.brand.create", compact('colors'));
    }


    public function edit(Brand $brand)
    {
        // $products = Product::find($id);
        // $categories = Category::all();
        $colors =  Color::pluck('name', 'id')->toArray();
        return view("backend.brand.edit", compact('product', 'colors'));
    }


    public function update(BrandRequest $request, Brand $brand)
    {
        // $products = Product::find($id);


        $data = [
            'name' => $request->name,
            'company' => $request->company,
            'description' => $request->description,
            'color_id' => $request->color_id,
            'image' =>  $this->uploadImage($request->file('image')),
            'is_active' => $request->is_active,
        ];


        $brand->update($data);
        //dd($products);
        return redirect()->route('brand.index')->with('success', 'Product Updated SuccessFully !!!');
    }

    public function show(Brand $brand)
    {
        // $productShow = Product::find($id);
        return view("backend.brand.show", compact('brand'));
    }

    public function destroy(Brand $brand)
    {
        // $productDelete = Product::find($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Product Delete SuccessFully !!!');
    }


    public function uploadImage($file)
    {
        $fileName = date('y-m-d') . '-' . time() . '.' . $file->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/brands/' . $fileName);

        return $fileName;
    }
}
