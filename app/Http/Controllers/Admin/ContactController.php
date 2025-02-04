<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $contact=Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact',compact('contact'));
    }
    public function destroy($id)
    {
        $contact=Contact::where('id',$id)->first();
        $del=Contact::where('id',$id)->delete();

        if($del)
        {
            return redirect(route('admin.contact'))->with('status','Deleted Successfully !');
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
