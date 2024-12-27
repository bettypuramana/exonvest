<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Career;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        if ($locale == 'ar') {
            $testimonial=Testimonial::orderBy('id', 'DESC')
                         ->select('id', 'title_en as title', 'name_ar as name','job_title_ar as job', 'description_ar as description')
                         ->get();
            $recent = Blog::orderBy('id', 'DESC')
                ->select('id', 'title_ar as title', 'main_image', 'date','blog_slug')
                ->take(3)
                ->get();
        } else {
            $testimonial=Testimonial::orderBy('id', 'DESC')
                         ->select('id', 'title_en as title', 'name_en as name','job_title_en as job', 'description_en as description')
                         ->get();
            $recent = Blog::orderBy('id', 'DESC')
                ->select('id', 'title_en as title', 'main_image', 'date','blog_slug')
                ->take(3)
                ->get();
        }
        return view('user.home',compact('recent','testimonial'));
    }
    public function about_us()
    {
        return view('user.about');
    }
    public function contact_us()
    {
        return view('user.contact_us');
    }
    public function submit_contact_us(Request $request)
    {

        $insert = new Contact;
        $insert->name = $request->input('name');
        $insert->email = $request->input('email');
        $insert->phone = $request->input('phone');
        $insert->description = $request->input('message');

            $save = $insert->save();
        if($save)
        {
        return response()->json(['status'=>true,'message' => 'submitted Successfully']);
        }else
        {
            return response()->json(['status'=>false,'message' => 'Something went wrong']);
        }
    }
    public function blog()
    {
        $locale = app()->getLocale();

        if($locale=='ar'){
            $blog=Blog::orderBy('id', 'DESC')->select('id','title_ar as title','main_image','date','blog_slug')->get();
        }else{
            $blog=Blog::orderBy('id', 'DESC')->select('id','title_en as title','main_image','date','blog_slug')->get();
        }

        return view('user.blog',compact('blog'));
    }
    public function blog_detail(Request $request,$id)
    {
        $locale = app()->getLocale();

        if ($locale == 'ar') {
            $blog = Blog::where('id', $id)
                ->select('id', 'title_ar as title', 'main_image', 'date', 'description_ar as description', 'tag')
                ->first(); // Use first() to get a single record

            $recent = Blog::where('id', '!=', $id) // Exclude the current blog
                ->orderBy('id', 'DESC')
                ->select('id', 'title_ar as title', 'main_image', 'date','blog_slug')
                ->take(3)
                ->get();
        } else {
            $blog = Blog::where('id', $id)
                ->select('id', 'title_en as title', 'main_image', 'date', 'description_en as description', 'tag')
                ->first(); // Use first() to get a single record
            $recent = Blog::where('id', '!=', $id) // Exclude the current blog
                ->orderBy('id', 'DESC')
                ->select('id', 'title_en as title', 'main_image', 'date','blog_slug')
                ->take(3)
                ->get();
        }
        $tagIds = json_decode($blog->tag);

        if (app()->getLocale() == 'ar') {
            // Fetch tags with Arabic names
            $tags = Tag::whereIn('id', $tagIds)
                ->select('id', 'name_ar as name') // Use Arabic column
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            // Fetch tags with English names
            $tags = Tag::whereIn('id', $tagIds)
                ->select('id', 'name_en as name') // Use English column
                ->orderBy('id', 'DESC')
                ->get();
        }
        
        return view('user.blog_detail',compact('blog','recent','tags'));
    }
    public function careers()
    {
        return view('user.careers');
    }
    public function submit_careers(Request $request)
    {

    $insert = new Career;
    $insert->name = $request->input('name');
    $insert->email = $request->input('email');
    $insert->phone = $request->input('phone');
    $insert->position = $request->input('position');
    $insert->coverletter = $request->input('message');

    if ($request->file('cv')!=null)
            {
            // echo "dasfafs";
              $file=$request->file('cv');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('uploads/cv',$filename);
              $insert->cv=$filename;
            }
            $save = $insert->save();
        if($save)
        {
        return response()->json(['status'=>true,'message' => 'submitted Successfully']);
        }else
        {
            return response()->json(['status'=>false,'message' => 'Something went wrong']);
        }
    }
        public function brands()
    {
        $locale = app()->getLocale();

        if($locale=='ar'){
            $categories=Category::orderBy('id', 'DESC')->select('id','categories.category_ar as category')->get();
        }else{
            $categories=Category::orderBy('id', 'DESC')->select('id','categories.category_en as category')->get();
        }
        $brands = Brand::orderBy('brands.id', 'DESC')->get();
        return view('user.brands',compact('categories','brands'));
    }
        public function community()
    {
        return view('user.community');
    }
    public function insertnewsletter(Request $request)
    {

        $email = $request->input('email');

    // Check if the email already exists in the Newsletter table
    $emailExists = Newsletter::where('email', $email)->exists();

    if ($emailExists) {
        return response()->json(['status' => false, 'message' => 'Email already exists']);
    }

    // Proceed to insert the new email
    $insert = new Newsletter;
    $insert->email = $email;
    $save = $insert->save();

    if ($save) {
        return response()->json(['status' => true, 'message' => 'Submitted successfully']);
    } else {
        return response()->json(['status' => false, 'message' => 'Something went wrong']);
    }
    }
}
