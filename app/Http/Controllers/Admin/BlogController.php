<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;


class BlogController extends Controller
{
    public function index(){
        $blog=Blog::orderBy('id', 'DESC')->get();
        
        return view('admin.blog',compact('blog'));
    }
}
