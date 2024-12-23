<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Auth;

class TagController extends Controller
{
    public function index(){
        $tag=Tag::orderBy('id', 'DESC')->get();
        return view('admin.tag',compact('tag'));
    }
    public function tag_add(){
        return view('admin.tag_add');
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'category_en' => 'required',
            'category_ar' => 'required',
            ],
            [
            'category_en.required' => 'This field is required',
            'category_ar.required' => 'This field is required',
            ]
            
        );

        $inserttag= new Tag;
        $inserttag->name_en=$request->input('category_en');
        $inserttag->name_ar=$request->input('category_ar');
        $save= $inserttag->save();
        if($save)
        {
           return redirect(route('admin.tag'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function destroy($id)
    {
        $tag=Tag::where('id',$id)->first();
        $del=Tag::where('id',$id)->delete();

        if($del)
        {  
            return redirect(route('admin.tag'))->with('status','Deleted Successfully !');		
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
