<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Student;
use Auth;
use DB;

class ProjectController extends Controller
{
    //
    public function index()
    {
        return view('projects.index');
    }
    public function studentproject()
    {
        return view('projects.studentproject');
    }
    public function upload()
    {
        return view('projects.upload');
    }
    public function fileinsert(Request $request)
    {
        $email=Auth::user()->email;
        $user=Student::where(['email'=>$email])->first();

    $request->validate([
        'documentation'=>"required|mimes:pdf|max:10000"
    ]);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->input());
       }else{
        $documentation=$request->file('documentation');
        $new_name=rand().'.' .$documentation->getClientOriginalExtension();
        $documentation->move(public_path('img'),$new_name);
        $project=new Project;
        $project->student_id=$user->id;
        $project->project_name=$request->project_name;
        $project->description=$request->description;
        $project->documentation=$new_name;
        $project->project_link=$request->project_link;
        $project->date_uploaded=Date('d/m/Y');
        $project->status="Null";
        $project->comment="Null";
        $project->save();
       }

     


    }
}
