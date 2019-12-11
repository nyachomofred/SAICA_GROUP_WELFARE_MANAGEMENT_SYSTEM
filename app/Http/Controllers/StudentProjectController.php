<?php
namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Fascades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Campus;
use App\Student;
use App\Sponsorinformation;
use App\Employerinformation;
use App\Academicinformation;
use App\Collage;
use App\Course;
use App\Courseapp;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use DateTime;
use Date;
use Auth;
use Illuminate\Support\Facades\Storage;

class StudentProjectController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    //index function
    public function proposal(){
        $userid=Auth::user()->username;
        $data=DB::table('proposals')->where(['student_id'=>$userid])->first();
        $student=DB::table('students')->where(['student_id'=>$userid])->first();
        return view('studentprojects.proposal')->with(['data'=>$data,'student'=>$student]);
    }
    public function finalproject(){
        $userid=Auth::user()->username;
        $data=DB::table('finalprojects')->where(['student_id'=>$userid])->first();
        $student=DB::table('students')->where(['student_id'=>$userid])->first();
        $documentation=DB::table('proposals')->where(['student_id'=>$userid])->first();
        return view('studentprojects.finalproject')->with(['data'=>$data,'student'=>$student,'documentation'=>$documentation]);
    }
    public function proposalcreate(Request $request){
        $request->validate([
              'upload'=>"required|mimes:pdf|max:10000"
         ]);
         
         $studentExist=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
         if(!empty($studentExist)){
              return redirect()->back()->with('failedstatus','Failed .This project proposal is already submited');
         }else{
             $date=Date('d');
             $month=Date('m');
             $year=Date('Y');
             $upload=$request->file('upload');
             $new_name=rand().'.' .$upload->getClientOriginalExtension();
             //$upload->move(public_path('projects'),$new_name,'public');
             $path=Storage::putFile('project',$request->file('upload'),'public');
             $insert=DB::table('proposals')->insert([
             'student_id'=>$request->student_id,
             'name'=>$request->name,
             'campus'=>$request->campus,
             'project_name'=>$request->project_name,
             'description'=>$request->description,
             //'upload'=>$new_name,
             'upload'=>$path,
             'status'=>'N/A',
             'date_submited'=>Date('d/m/Y'),
             'comment'=>'N/A',
             'date'=>$date,
             'month'=>$month,
             'year'=>$year,
             
             ]);
             return redirect()->back()->with('addstatus','Project Submitted Successfully');
             
         }
         
    }
    public function finalprojectcreate(Request $request){
        $request->validate([
              'documentation'=>"required|mimes:pdf|max:10000"
         ]);
             $studentExist=DB::table('finalprojects')->where(['student_id'=>$request->student_id])->first();
             if(empty($studentExist)){
                  $studentproposal=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
                  if(!empty($studentproposal)){
                        $projectstatus=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
                        $good=$projectstatus->status;
                        if($good=='Approved'){
                            $date=Date('d');
                            $month=Date('m');
                            $date=Date('Y');
                            $documentation=$request->file('documentation');
                             $new_name=rand().'.' .$documentation->getClientOriginalExtension();
                             //$documentation->move(public_path('projects'),$new_name,'public');
                              $path=Storage::putFile('project',$request->file('documentation'),'public');
                            // $documentation->move('/project/pdf',$new_name);
                             $insert=DB::table('finalprojects')->insert([
                             'student_id'=>$request->student_id,
                             'name'=>$request->name,
                             'campus'=>$request->campus,
                             'project_name'=>$request->project_name,
                             'description'=>$request->description,
                             //'documentation'=>$new_name,
                             'documentation'=>$path,
                             'project_link'=>$request->project_link,
                             'status'=>'N/A',
                             'date_uploaded'=>Date('d/m/Y'),
                             'comment'=>'N/A',
                             'date'=>$date,
                             'month'=>$month,
                             'year'=>$date,
                             'screenshot'=>$request->screenshot,
                             
                             ]);
                             return redirect()->back()->with('addstatus','Project Submitted Successfully'); 
             
             
                        }else{return redirect()->back()->with('notapprove','Failed .Your project proposal has not been approved ');}
                  }else{return redirect()->back()->with('noproposal','Failed .Please submit proposal for this project to be approved');}
             }else{return redirect()->back()->with('projectexist','Failed .This project already exist');}
             
        
    }
    public function proposalupdate(Request $request){
        $id=$request->id;
        $updateData=DB::table('proposals')->where(['id'=>$id])->update([
            'status'=>$request->status,
            'comment'=>$request->comment,
            ]);
        return redirect()->back()->with('updatestatus','Data has been updated successfully');
    }
    
    
    public function finalprojectupdate(Request $request){
        $id=$request->id;
        $updateData=DB::table('finalprojects')->where(['id'=>$id])->update([
            'status'=>$request->status,
            'comment'=>$request->comment,
            ]);
        return redirect()->back()->with('updatestatus','Data has been updated successfully');
    }
}
