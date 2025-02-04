<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use Auth;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $blog=Blog::orderBy('id', 'DESC')->get();

        return view('admin.blog',compact('blog'));
    }
    public function blog_add(){
        $tags=Tag::orderBy('id', 'DESC')->get();
        return view('admin.blog_add',compact('tags'));
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024|',
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'date' => 'required',
            ],
            [
            'image.required' => 'This field is required',
            'title_en.required' => 'This field is required',
            'title_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            'date.required' => 'This field is required',
            ]

        );

        $insertblog= new Blog;
        $insertblog->created_by=$user_id;
        $insertblog->title_en=$request->input('title_en');
        $insertblog->title_ar=$request->input('title_ar');
        $insertblog->description_en=$request->input('description_en');
        $insertblog->description_ar=$request->input('description_ar');
        $insertblog->date=$request->input('date');
        $insertblog->meta_title=$request->input('metatitle');
        $insertblog->meta_description=$request->input('metadescription');

        $tagsArray = $request->input('tag_id'); // This should return an array
        $tagsJson = json_encode($tagsArray);
        $insertblog->tag = $tagsJson;

        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/blog',$filename);
            $insertblog->main_image=$filename;
        }
        $save= $insertblog->save();
        if($save)
        {
           return redirect(route('admin.blog'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function edit($id)
    {

        $blog=Blog::where('id',$id)->first();
        $tags = Tag::all();
        return view('admin/blogs_edit',compact('blog','tags'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024|',
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'date' => 'required',
            ],
            [
            'image.required' => 'This field is required',
            'title_en.required' => 'This field is required',
            'title_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            'date.required' => 'This field is required',
            ]

        );
        $updateblog= Blog::find($id);
        $updateblog->title_en=$request->input('title_en');
        $updateblog->title_ar=$request->input('title_ar');
        $updateblog->description_en=$request->input('description_en');
        $updateblog->description_ar=$request->input('description_ar');
        $updateblog->date=$request->input('date');
        $updateblog->meta_title=$request->input('metatitle');
        $updateblog->meta_description=$request->input('metadescription');
        $tagsArray = $request->input('tag_id'); // This should return an array
        $tagsJson = json_encode($tagsArray);
        $updateblog->tag = $tagsJson;
        $updateblog->main_image=$request->input('old');
        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/blog',$filename);
            $updateblog->main_image=$filename;
        }
        $update= $updateblog->save();


        if($update)
        {
          return redirect(route('admin.blog'))->with('status','Details Saved Successfully !');
        }

       else
        {
          return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
    public function destroy($id)
    {
        $blog=Blog::where('id',$id)->first();
        $del=Blog::where('id',$id)->delete();

        $imagePath = public_path('uploads/blog/').$blog->main_image;

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        if($del)
        {
            return redirect(route('admin.blog'))->with('status','Deleted Successfully !');
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
