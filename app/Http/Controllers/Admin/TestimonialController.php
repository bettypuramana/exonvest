<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Auth;

class TestimonialController extends Controller
{
    public function index(){
        $testimonial=Testimonial::orderBy('id', 'DESC')->get();
        
        return view('admin.testimonial',compact('testimonial'));
    }
    public function testimonial_add(){
        return view('admin.testimonial_add');
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024|',
            'title_en' => 'required',
            'title_ar' => 'required',
            'name_en' => 'required',
            'name_ar' => 'required',
            'job_title_en' => 'required',
            'job_title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            ],
            [
            'image.required' => 'This field is required',
            'title_en.required' => 'This field is required',
            'title_ar.required' => 'This field is required',
            'name_en.required' => 'This field is required',
            'name_ar.required' => 'This field is required',
            'job_title_en.required' => 'This field is required',
            'job_title_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            ]
            
        );

        $inserttestimonial= new Testimonial;
        $inserttestimonial->created_by=$user_id;
        $inserttestimonial->title_en=$request->input('title_en');
        $inserttestimonial->title_ar=$request->input('title_ar');
        $inserttestimonial->name_en=$request->input('name_en');
        $inserttestimonial->name_ar=$request->input('name_ar');
        $inserttestimonial->job_title_en=$request->input('job_title_en');
        $inserttestimonial->job_title_ar=$request->input('job_title_ar');
        $inserttestimonial->description_en=$request->input('description_en');
        $inserttestimonial->description_ar=$request->input('description_ar');


        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/testimonial',$filename);
            $inserttestimonial->image=$filename;
        }
        $save= $inserttestimonial->save();
        if($save)
        {
           return redirect(route('admin.testimonial'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function edit($id)
    {
      
        $testimonial=Testimonial::where('id',$id)->first();
        return view('admin/testimonials_edit',compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'name_en' => 'required',
            'name_ar' => 'required',
            'job_title_en' => 'required',
            'job_title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            ],
            [
            'title_en.required' => 'This field is required',
            'title_ar.required' => 'This field is required',
            'name_en.required' => 'This field is required',
            'name_ar.required' => 'This field is required',
            'job_title_en.required' => 'This field is required',
            'job_title_ar.required' => 'This field is required',
            'description_en.required' => 'This field is required',
            'description_ar.required' => 'This field is required',
            ]
            
        );
        $updatetestimonial= Testimonial::find($id);
        $updatetestimonial->title_en=$request->input('title_en');
        $updatetestimonial->title_ar=$request->input('title_ar');
        $updatetestimonial->name_en=$request->input('name_en');
        $updatetestimonial->name_ar=$request->input('name_ar');
        $updatetestimonial->job_title_en=$request->input('job_title_en');
        $updatetestimonial->job_title_ar=$request->input('job_title_ar');
        $updatetestimonial->description_en=$request->input('description_en');
        $updatetestimonial->description_ar=$request->input('description_ar');

        $updatetestimonial->image=$request->input('old');
        if ($request->file('image')!=null)
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/testimonial',$filename);
            $updatetestimonial->image=$filename;
        }
        $update= $updatetestimonial->save();
      
    
        if($update)
        {
          return redirect(route('admin.testimonial'))->with('status','Details Saved Successfully !');
        }
  
       else
        {
          return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
    public function destroy($id)
    {
        $testimonial=Testimonial::where('id',$id)->first();
        $del=Testimonial::where('id',$id)->delete();
        
        $imagePath = public_path('uploads/testimonial/').$testimonial->image;
    
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        if($del)
        {  
            return redirect(route('admin.testimonial'))->with('status','Deleted Successfully !');		
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
