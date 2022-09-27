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

    public function userlist()
    {
        return view("backend/userlist");
    }

    public function usershow($id)
    {
        return view("backend/usershow");
    }

    public function login()
    {
        return view("backend/login");
    }
}
