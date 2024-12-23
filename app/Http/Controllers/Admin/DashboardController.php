<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Testimonial;
use App\Models\Career;
use App\Models\Brand;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blog = Blog::orderBy('id', 'DESC')->count();
        $contact = Contact::orderBy('id', 'DESC')->count();
        $news = Newsletter::orderBy('id', 'DESC')->count();
        $testimonial = Testimonial::orderBy('id', 'DESC')->count();
        $career = Career::orderBy('id', 'DESC')->count();
        $brand = Brand::orderBy('id', 'DESC')->count();
        return view('admin.dashboard',compact('blog','contact','news','testimonial','career','brand'));
    }
}
