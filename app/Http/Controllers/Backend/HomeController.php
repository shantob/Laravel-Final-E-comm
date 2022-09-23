<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("backend/index");
    }


    public function productadd()
    {
        return view("backend/productadd");
    }


    public function productedit()
    {
        return view("backend/productedit");
    }

    public function category()
    {
        return view("backend/category");
    }

    public function categoryadd()
    {
        return view("backend/categoryadd");
    }

    public function categoryedit()
    {
        return view("backend/categoryedit");
    }
    public function userlist()
    {
        return view("backend/userlist");
    }
}
