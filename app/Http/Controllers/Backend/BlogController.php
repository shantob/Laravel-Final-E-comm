<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
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
        $categories = Category::all();
        
        return view("backend/addblog",compact('categories'));
    }
    public function blogshow($id)
    {
        $blogShow = Blog::find($id);
        return view("backend/blogshow", compact('blogShow'));
    }

    public function blogStore(Request $request)
    {



        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('upload/images/', $filename);
            $data['image'] = $filename;
        }
        Blog::create([

            'title' => $request->title,
            'category' => $request->category,
            'blog' => $request->blog,
            
            'image' => $filename,
            // 'like' => $request->like,
            // 'comment' => $request->comment,
        ]);
        return redirect()->route('admin.bloglist')->with('success', 'Blog Created SuccessFully !!!');
       
    }
    public function blogdelete($id)
    {
        $blogdelete = Blog::find($id);
        $blogdelete->delete();
        return redirect()->route("admin.bloglist")->with('success', 'Blog Success Fully Delete!!!');
    }
}
