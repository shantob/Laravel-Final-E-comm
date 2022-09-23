<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
    return view("forntend/index");
   }
   public function productlist()
   {
    return view("forntend/productlist");
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
