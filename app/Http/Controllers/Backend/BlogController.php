<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloglist()
    {
        return view("backend/bloglist");
    }
    public function addblog()
    {
        return view("backend/addblog");
    }
    public function blogshow()
    {
        return view("backend/blogshow");
    }
}
