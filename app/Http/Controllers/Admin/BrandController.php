<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Auth;

class BrandController extends Controller
{
    public function index(){
        // $brand=Brand::orderBy('id', 'DESC')->get();
        $brand = Brand::join('categories', 'brands.category_id', '=', 'categories.id')
                  ->select('brands.*', 'categories.category_en', 'categories.category_ar')
                  ->orderBy('brands.id', 'DESC')
                  ->get();
        return view('admin.brand',compact('brand'));
    }
    public function brand_add(){
        $categories=Category::orderBy('id', 'DESC')->get();
        return view('admin.brand_add',compact('categories'));
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024|',
            'category_id' => 'required',
            'brand_en' => 'required',
            'brand_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            ],
            [
            'image.required' => 'This field is required',
            'category_id.required' => 'This field is required',
            'brand_en.required' => 'This field is required',
            'brand_ar.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            ]
            
        );

        $insertbrand= new Brand;
        $insertbrand->created_by=$user_id;
        $insertbrand->category_id=$request->input('category_id');
        $insertbrand->brand_ar=$request->input('brand_ar');
        $insertbrand->brand_en=$request->input('brand_en');
        $insertbrand->description_en=$request->input('description_en');
        $insertbrand->description_ar=$request->input('description_ar');

        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/brand',$filename);
            $insertbrand->image=$filename;
        }
        $save= $insertbrand->save();
        if($save)
        {
           return redirect(route('admin.brand'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function destroy($id)
    {
        $brand=Brand::where('id',$id)->first();
        $del=Brand::where('id',$id)->delete();
        
        $imagePath = public_path('uploads/brand/').$brand->image;
    
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        if($del)
        {  
            return redirect(route('admin.brand'))->with('status','Deleted Successfully !');		
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
