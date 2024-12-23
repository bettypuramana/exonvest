<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;

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
        $blog=Blog::orderBy('id', 'DESC')->get();
        $tags=Tag::orderBy('id', 'DESC')->get();
        return view('user.blog',compact('blog','tags'));
    }
    public function blog_detail()
    {
        return view('user.blog_detail');
    }
    public function careers()
    {
        return view('user.careers');
    }
        public function brands()
    {
        return view('user.brands');
    }
        public function community()
    {
        return view('user.community');
    }
}
