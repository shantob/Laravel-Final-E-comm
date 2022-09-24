<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("backend/index");
    }
    
    public function productlist()
    {
        return view("backend/productlist");
    }


    public function productadd()
    {
        return view("backend/productadd");
    }


    public function productedit()
    {
        return view("backend/productedit");
    }
    public function productshow()
    {
        return view("backend/productshow");
    }

    public function category()
    {
        return view("backend/category");
    }

    public function categoryadd()
    {
        return view("backend/categoryadd");
    }
    public function categoryshow()
    {
        return view("backend/categoryshow");
    }

    public function categoryedit()
    {
        return view("backend/categoryedit");
    }
    public function userlist()
    {
        return view("backend/userlist");
    }
    public function usershow()
    {
        return view("backend/usershow");
    }
    public function login()
    {
        return view("backend/login");
    }
}
