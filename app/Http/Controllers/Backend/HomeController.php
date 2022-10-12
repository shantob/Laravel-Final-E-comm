<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("backend/index");
    }

    public function userlist()
    {
        $user = User::with('profile')->latest()->paginate(15);
        return view("backend/userlist", compact('user'));
    }

    public function usershow(User $user)
    {
        return view("backend/usershow",compact('user'));
    }

    public function login()
    {
        return view("backend/login");
    }
}
