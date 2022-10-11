<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Image;
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
public function store(ProductRequest $request)
    {
        Product::create([

            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' =>  $this->uploadImage($request->file('image')),
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


    public function edit( Product $product, Category $category )
    {
        // $products = Product::find($id);
        // $categories = Category::all();
        return view("backend.product.edit", compact('product', 'category'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        // $products = Product::find($id);

 
        $data =[
            'name' => $request->name,
            'caegory' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' =>  $this->uploadImage($request->file('image')),
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
        ];
       
        
        $product->update($data);
        //dd($products);
        return redirect()->route('product.index')->with('success', 'Product Updated SuccessFully !!!');
    }
    
    public function show(Product $product)
    {
        // $productShow = Product::find($id);
        return view("backend.product.show", compact('productShow'));
    }

    public function destroy(Product $product)
    {
        // $productDelete = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product Delete SuccessFully !!!');
    }

    public function trash()
    {
        $product = Product::onlyTrashed()->get();
        return view("backend/product/trash", compact('product'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()->route('product.trash')->with('success', 'SuccessFully Restored Category');
    }

    public function delete($id)
    {
        //dd($id);
        $product = Product::onlyTrashed()->find($id);
        $product->forceDelete();

        return redirect()
            ->route('product.trash')
            ->with('success','Parmanent Deleted Successfully!');
    }
    public function downloadPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('backend.product.pdf', compact('products'));
        return $pdf->download('product-list.pdf');
    }

    public function uploadImage($file){
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
                ->resize(200, 200)
                ->save(storage_path() . '/app/public/products/' . $fileName);

        return $fileName;
    }
}