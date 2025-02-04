<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $category=Category::orderBy('id', 'DESC')->get();
        return view('admin.category',compact('category'));
    }
    public function category_add(){
        return view('admin.category_add');
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            // 'image' => 'required|mimes:png,jpg,jpeg|max:1024|',
            'category_en' => 'required',
            'category_ar' => 'required',
            // 'description_en' => 'required',
            // 'description_ar' => 'required',
            ],
            [
            // 'image.required' => 'This field is required',
            'category_en.required' => 'This field is required',
            'category_ar.required' => 'This field is required',
            // 'description_en.required' => 'This field is required',
            // 'description_ar.required' => 'This field is required',
            ]

        );

        $insertcategory= new Category;
        $insertcategory->created_by=$user_id;
        $insertcategory->category_en=$request->input('category_en');
        $insertcategory->category_ar=$request->input('category_ar');
        // // $insertcategory->description_en=$request->input('description_en');
        // // $insertcategory->description_ar=$request->input('description_ar');

        // if ($request->file('image')!=null)
        // {
        //     $file=$request->file('image');
        //     $extension=$file->getClientOriginalExtension();
        //     $filename=time().'.'.$extension;
        //     $file->move('uploads/category',$filename);
        //     $insertcategory->image=$filename;
        // }
        $save= $insertcategory->save();
        if($save)
        {
           return redirect(route('admin.category'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function destroy($id)
    {
        $category=Category::where('id',$id)->first();
        $del=Category::where('id',$id)->delete();

        // $imagePath = public_path('uploads/category/').$category->image;

        // if (file_exists($imagePath)) {
        //     unlink($imagePath);
        // }
        if($del)
        {
            return redirect(route('admin.category'))->with('status','Deleted Successfully !');
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
