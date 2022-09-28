<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function header()
   {
      $category = Category::all();
      return view('components.forntend.partials.header', compact('category'));
   }


   public function index()
   {
      $productall = Product::all();
      $blogs = Blog::all();
      $category = Category::all();
      return view("forntend/index", compact('category','productall','blogs'));
   }


   public function productlist()
   {
      $productall = Product::all();
      $blogs = Blog::all();
      $category = Category::all();
      return view("forntend/productlist",compact('category','productall','blogs'));
   }


   public function contact()
   {
      return view("forntend/contact");
   }

   public function about()
   {
      return view("forntend/about");
   }

   public function addtocard()
   {
      return view("forntend/addtocard");
   }

   public function checkout()
   {
      return view("forntend/checkout");
   }

   public function productdetels()
   {
      return view("forntend/productdetels");
   }
   
   public function thankyou()
   {
      return view("forntend/thankyou");
   }
   public function invoice()
   {
      return view("forntend/invoice");
   }
   public function login()
   {
      return view("forntend/login");
   }
}
