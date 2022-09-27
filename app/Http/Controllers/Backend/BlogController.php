<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloglist()
    {
        $blogs = Blog::all();
        return view("backend/bloglist", compact('blogs'));
    }
    public function addblog()
    {
        return view("backend/addblog");
    }
    public function blogshow($id)
    {
        $blogShow = Blog::find($id);
        return view("backend/blogshow", compact('blogShow'));
    }
    public function blogdelete($id)
    {
        $blogdelete = Blog::find($id);
        $blogdelete->delete();
        return redirect()->route("admin.bloglist")->with('success', 'Blog Success Fully Delete!!!');
    }
}
