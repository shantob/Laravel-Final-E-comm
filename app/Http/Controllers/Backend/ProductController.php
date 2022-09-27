<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist()
    {
        $productlist = Product::all();
        return view("backend/product/productlist", compact('productlist'));
    }


    public function productadd()
    {
        return view("backend/product/productadd");
    }


    public function productedit()
    {
        return view("backend/product/productedit");
    }

    public function productshow($id)
    {
        $productShow = Product::find($id);
        return view("backend/product/productshow",compact('productShow'));
    }

    public function productdelete($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();
        return redirect()->route('admin.productlist')->with('success','Product Delete SuccessFully !!!');
    }
}
