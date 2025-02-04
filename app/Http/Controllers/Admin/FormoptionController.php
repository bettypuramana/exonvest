<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience_department;
use App\Models\Year_of_experience;
use Illuminate\Http\Request;

class FormoptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $experience_departments=Experience_department::orderBy('id', 'DESC')->get();

        return view('admin.exp_department',compact('experience_departments'));
    }
    public function create(){
        return view('admin.exp_department_add');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'department_en' => 'required',
            'department_ar' => 'required',
            ],
            [
            'department_en.required' => 'This field is required',
            'department_ar.required' => 'This field is required',
            ]

        );

        $insert= new Experience_department;
        $insert->department_en=$request->input('department_en');
        $insert->department_ar=$request->input('department_ar');
        $save= $insert->save();
        if($save)
        {
           return redirect(route('admin.experience_departments'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function edit($id)
    {
        $experience_department=Experience_department::where('id',$id)->first();
        return view('admin/exp_department_edit',compact('experience_department'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'department_en' => 'required',
            'department_ar' => 'required',
            ],
            [
            'department_en.required' => 'This field is required',
            'department_ar.required' => 'This field is required',
            ]

        );
        $update= Experience_department::find($id);
        $update->department_en=$request->input('department_en');
        $update->department_ar=$request->input('department_ar');
        $update= $update->save();


        if($update)
        {
          return redirect(route('admin.experience_departments'))->with('status','Details Saved Successfully !');
        }

       else
        {
          return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
    public function destroy($id)
    {
        $del=Experience_department::where('id',$id)->delete();



        if($del)
        {
            return redirect(route('admin.experience_departments'))->with('status','Deleted Successfully !');
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }


    //////////////////////////  Year_of_experience
    public function years_index(){
        $experience_years=Year_of_experience::orderBy('id', 'DESC')->get();

        return view('admin.exp_years',compact('experience_years'));
    }
    public function years_create(){
        return view('admin.exp_year_add');
    }
    public function years_store(Request $request)
    {

        $validated = $request->validate([
            'year_en' => 'required',
            'year_ar' => 'required',
            ],
            [
            'year_en.required' => 'This field is required',
            'year_ar.required' => 'This field is required',
            ]

        );

        $insert= new Year_of_experience;
        $insert->experience_en=$request->input('year_en');
        $insert->experience_ar=$request->input('year_ar');
        $save= $insert->save();
        if($save)
        {
           return redirect(route('admin.experience_years'))->with('status','Details Saved Successfully !');
        }
       else
        {
        return redirect()->back()->with('Fail','Something Went Wrong');
         }
    }
    public function years_edit($id)
    {
        $experience_year=Year_of_experience::where('id',$id)->first();
        return view('admin/exp_year_edit',compact('experience_year'));
    }
    public function years_update(Request $request, $id)
    {
        $validated = $request->validate([
            'year_en' => 'required',
            'year_ar' => 'required',
            ],
            [
            'year_en.required' => 'This field is required',
            'year_ar.required' => 'This field is required',
            ]

        );
        $update= Year_of_experience::find($id);
        $update->experience_en=$request->input('year_en');
        $update->experience_ar=$request->input('year_ar');
        $update= $update->save();


        if($update)
        {
          return redirect(route('admin.experience_years'))->with('status','Details Saved Successfully !');
        }

       else
        {
          return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
    public function years_destroy($id)
    {
        $del=Year_of_experience::where('id',$id)->delete();



        if($del)
        {
            return redirect(route('admin.experience_years'))->with('status','Deleted Successfully !');
        }
        else
        {
            return redirect()->back()->with('Fail','Something Went Wrong');
        }
    }
}
