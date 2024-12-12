<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function about_us()
    {
        return view('user.about');
    }
    public function contact_us()
    {
        return view('user.contact_us');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function blog_detail()
    {
        return view('user.blog_detail');
    }
    public function careers()
    {
        return view('user.careers');
    }
}
