<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Auth;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $brand=Brand::orderBy('id', 'DESC')->get();
        $brand = Brand::select(
            'brands.id',
            'brands.category_id',
            'brands.brand_en',
            'brands.brand_ar',
            'brands.description_en',
            'brands.description_ar',
            'brands.image',
            DB::raw('GROUP_CONCAT(categories.category_en) as category_en'),
            DB::raw('GROUP_CONCAT(categories.category_ar) as category_ar')
        )
        ->join('categories', function ($join) {
            $join->whereRaw('FIND_IN_SET(categories.id, brands.category_id)');
        })
        ->groupBy(
            'brands.id',
            'brands.category_id',
            'brands.brand_en',
            'brands.brand_ar',
            'brands.description_en',
            'brands.description_ar',
            'brands.image',
        )
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
            'category_id' => 'required|array',
            'brand_en' => 'required',
            'brand_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            ],
            [
            'image.required' => 'This field is required',
            'category_id.required' => 'Please select at least one category',
            'brand_en.required' => 'This field is required',
            'brand_ar.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            ]

        );

        $category_ids = $request->input('category_id'); // This is an array
        $category_ids_string = implode(',', $category_ids); // Convert to comma-separated string

        $insertbrand= new Brand;
        $insertbrand->created_by=$user_id;
        $insertbrand->category_id=$category_ids_string;
        $insertbrand->brand_ar=$request->input('brand_ar');
        $insertbrand->brand_en=$request->input('brand_en');
        $insertbrand->description_en=$request->input('description_en');
        $insertbrand->description_ar=$request->input('description_ar');
        $insertbrand->facebook=$request->input('facebook');
        $insertbrand->instagram=$request->input('instagram');
        $insertbrand->youtube=$request->input('youtube');
        $insertbrand->twitter=$request->input('twitter');
        $insertbrand->meta_title=$request->input('metatitle');
        $insertbrand->meta_description=$request->input('metadescription');

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
    public function edit($id)
    {

        $brand=Brand::where('id',$id)->first();
        $categories=Category::orderBy('id', 'DESC')->get();
        return view('admin/brand_edit',compact('brand','categories'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required|array',
            'brand_en' => 'required',
            'brand_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            ],
            [
            'category_id.required' => 'Please select at least one category',
            'brand_en.required' => 'This field is required',
            'brand_ar.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            ]
        );

        $category_ids = $request->input('category_id'); // This is an array
        $category_ids_string = implode(',', $category_ids); // Convert to comma-separated string

        $updatebrand= Brand::find($id);
        $updatebrand->category_id=$category_ids_string;
        $updatebrand->brand_ar=$request->input('brand_ar');
        $updatebrand->brand_en=$request->input('brand_en');
        $updatebrand->description_en=$request->input('description_en');
        $updatebrand->description_ar=$request->input('description_ar');
        $updatebrand->facebook=$request->input('facebook');
        $updatebrand->instagram=$request->input('instagram');
        $updatebrand->youtube=$request->input('youtube');
        $updatebrand->twitter=$request->input('twitter');
        $updatebrand->meta_title=$request->input('metatitle');
        $updatebrand->meta_description=$request->input('metadescription');
        $updatebrand->image=$request->input('old');
        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/brand',$filename);
            $updatebrand->image=$filename;
        }
        $update= $updatebrand->save();


        if($update)
        {
          return redirect(route('admin.brand'))->with('status','Details Saved Successfully !');
        }

       else
        {
          return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
