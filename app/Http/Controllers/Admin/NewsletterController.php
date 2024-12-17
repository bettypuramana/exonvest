<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\Newsletter;
use Auth;

class NewsletterController extends Controller
{
    public function index(){
      
        $newsL=Newsletter::orderBy('id', 'DESC')->get();
        return view('admin.newsletter',compact('newsL'));
    }
    public function destroy($id)
    {
        $newsL=Newsletter::where('id',$id)->first();
        $del=Newsletter::where('id',$id)->delete();
 
        if($del)
        {  
            return redirect(route('admin.news_letter'))->with('status','Deleted Successfully !');		
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
    public function export(){
        $users=Newsletter::all();
        (new FastExcel($users))->export('newslettersubscribers.xlsx');
        return (new FastExcel(Newsletter::all()))->download('newslettersubscribers.xlsx');

    }
}
