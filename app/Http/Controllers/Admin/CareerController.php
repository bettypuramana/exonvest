<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use Auth;

class CareerController extends Controller
{
    public function index(){
        $career=Career::orderBy('id', 'DESC')->get();
        return view('admin.career',compact('career'));
    }
    public function destroy($id)
    {
        $career=Career::where('id',$id)->first();
        $del=Career::where('id',$id)->delete();
 
        if($del)
        {  
            return redirect(route('admin.career'))->with('status','Deleted Successfully !');		
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
