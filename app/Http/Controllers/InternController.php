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


class InternController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $intern=DB::table('interns')->get();
        
        return view('interns.index')->with(['intern'=>$intern]);
    }
    
    public function create(Request $request){
        
        $insertData=DB::table('interns')->insert([
            'name'=>ucwords($request->name),
            'email'=>ucfirst($request->email),
            'phonenumber'=>$request->phonenumber,
            'area_of_study'=>ucfirst($request->area_of_study),
            'place_of_intern'=>$request->place_of_intern,
             'month'=>Date('m'),
             'year'=>Date('Y'),
            ]);
        return redirect()->route('interns.index')->with('status','Success');
    }
    
    public function view($id){
        $intern=DB::table('interns')->where(['id'=>$id])->first();
        return view('interns.view')->with(['intern'=>$intern]);
    }
    
    public function update(Request $request,$id){
       $insertData=DB::table('interns')->where(['id'=>$id])->update([
            'name'=>ucwords($request->name),
            'email'=>ucfirst($request->email),
            'phonenumber'=>$request->phonenumber,
            'area_of_study'=>ucfirst($request->area_of_study),
            'place_of_intern'=>$request->place_of_intern,
            
            ]);
        return redirect()->route('interns.index')->with('status','Success');
        
    }
    
    public function delete($id){
         $intern=DB::table('interns')->where(['id'=>$id])->delete();
        return redirect()->route('interns.index')->with('status','Success');
    }
    
     public function assesment(){
        $intern=DB::table('interns')->get();
        
        return view('interns.assesment')->with(['intern'=>$intern]);
    }
    
    
     public function projectassesment($id){
        $intern=DB::table('interns')->where(['id'=>$id])->first();
        return view('interns.projectassesment')->with(['intern'=>$intern]);
    }
    
    public function interprojectassesment(Request $request){
        
          $exist=DB::table('internprojects')->where(['table_id'=>$request->table_id])->first();
          if(empty($exist)){
              $insertData=DB::table('internprojects')->insert([

            'name'=>ucwords($request->name),
            'table_id'=>$request->table_id,
            'email'=>ucfirst($request->email),
            'phonenumber'=>$request->phonenumber,
            'area_of_study'=>ucfirst($request->area_of_study),
            'place_of_intern'=>$request->place_of_intern,
            'complete'=>$request->complete,
            'complete_reason'=>ucwords($request->complete_reason),
            'project_contain_userregistration'=>$request->project_contain_userregistration,
            'regisration_reason'=>ucwords($request->regisration_reason),
            'interface'=>$request->interface,
            'interface_reason'=>ucwords($request->interface_reason),
            'databaset'=>$request->databaset,
            'database_reason'=>ucwords($request->database_reason),
            'code'=>$request->code,
            'code_reason'=>ucwords($request->code_reason),
            'algorithm'=>$request->algorithm,
            'algorithm_reason'=>ucwords($request->algorithm_reason),
            'github'=>$request->github,
            'github_reason'=>ucwords($request->github_reason),
            'syllabus'=>$request->syllabus,
            'syllabus_reason'=>ucwords($request->syllabus_reason),
            'comment'=>ucwords($request->comment),
            'assessor'=>ucwords($request->assessor),
            
            'month'=>Date('m'),
            'year'=>Date('Y'),
            ]);
        return redirect()->route('interns.assesment')->with('status','Success');
              
          }else{
              return redirect()->back()->with('failed','Failed. This student has been assess');
          }
        
    
        
    }
    
     
     public function score($id){
        $general=DB::table('generalassesments')->where(['table_id'=>$id])->first();
        $intern=DB::table('internprojects')->where(['table_id'=>$id])->first();
        return view('interns.score')->with(['intern'=>$intern,'general'=>$general]);
    }
    
     public function internviewscore(){
         $email=Auth::user()->email;
        $general=DB::table('generalassesments')->where(['email'=>$email])->first();
        $intern=DB::table('internprojects')->where(['email'=>$email])->first();
        return view('interns.internviewscore')->with(['intern'=>$intern,'general'=>$general]);
    }
    
    public function updatetechnical(Request $request,$id){
          $update=DB::table('internprojects')->where(['id'=>$id])->update([
            'complete'=>$request->complete,
            'complete_reason'=>ucwords($request->complete_reason),
            'project_contain_userregistration'=>$request->project_contain_userregistration,
            'regisration_reason'=>ucwords($request->regisration_reason),
            'interface'=>$request->interface,
            'interface_reason'=>ucwords($request->interface_reason),
            'databaset'=>$request->databaset,
            'database_reason'=>ucwords($request->database_reason),
            'code'=>$request->code,
            'code_reason'=>ucwords($request->code_reason),
            'algorithm'=>$request->algorithm,
            'algorithm_reason'=>ucwords($request->algorithm_reason),
            'github'=>$request->github,
            'github_reason'=>ucwords($request->github_reason),
            'syllabus'=>$request->syllabus,
            'syllabus_reason'=>ucwords($request->syllabus_reason),
            'comment'=>ucwords($request->comment),
            'assessor'=>ucwords($request->assessor),
              
              ]);
               return redirect()->back()->with('status','Success');
        
    }
    public function printtechnical($id){
        $intern=DB::table('internprojects')->where(['id'=>$id])->first();
        return view('interns.printtechnical')->with(['intern'=>$intern]);
    }
    
    public function generalassesment($id){
        $intern=DB::table('interns')->where(['id'=>$id])->first();
        return view('interns.generalassesment')->with(['intern'=>$intern]);
    }
    //insert generalassesment
    public function insertgeneralassesment(Request $request){
        $exist=DB::table('generalassesments')->where(['table_id'=>$request->table_id])->first();
        if(empty($exist)){
             $insertData=DB::table('generalassesments')->insert([
                    'name'=>ucwords($request->name),
                    'table_id'=>$request->table_id,
                    'email'=>ucfirst($request->email),
                    'phonenumber'=>$request->phonenumber,
                    'area_of_study'=>ucfirst($request->area_of_study),
                    'place_of_intern'=>$request->place_of_intern,
                    'petinent'=>ucwords($request->petinent),
                    'attension'=>ucwords($request->attension),
                    'resource'=>ucwords($request->resource),
                    'mistake'=>ucwords($request->mistake),
                    'risk'=>ucwords($request->risk),
                    
                    'listen'=>ucwords($request->listen),
                    'verbal'=>ucwords($request->verbal),
                    'meeting'=>ucwords($request->meeting),
                    'demonstrate'=>ucwords($request->demonstrate),
                    
                    'work'=>ucwords($request->work),
                    'goal'=>ucwords($request->goal),
                    'attitude'=>ucwords($request->attitude),
                    'manage'=>ucwords($request->manage),
                    'career'=>ucwords($request->career),
                    
                     'relate'=>ucwords($request->relate),
                     'conflict'=>ucwords($request->conflict),
                     'control'=>ucwords($request->control),
                     'assertive'=>ucwords($request->assertive),
                     
                     'support'=>ucwords($request->support),
                     'fit'=>ucwords($request->fit),
                     'within'=>ucwords($request->within),
                     'sense'=>ucwords($request->sense),
                     'interact'=>ucwords($request->interact),
                     
                     'report'=>ucwords($request->report),
                     'prompt'=>ucwords($request->prompt),
                     'positive'=>ucwords($request->positive),
                     'bring'=>ucwords($request->bring),
                     'manner'=>ucwords($request->manner),
                     'comment'=>ucwords($request->comment),
                     'assessor'=>ucwords($request->assessor),
                    
                    'day'=>Date('d'),   
                    'month'=>Date('m'),
                    'year'=>Date('Y'),
                 
                 ]);
                 return redirect()->route('interns.assesment')->with('status','Success');
        }else{return redirect()->back()->with('failed','Failed. This student has been assess');}
    }
    //update generalassesment
     public function updategeneralassesment(Request $request,$id){
         $update=DB::table('generalassesments')->where(['id'=>$id])->update([
                   
                    'petinent'=>ucwords($request->petinent),
                    'attension'=>ucwords($request->attension),
                    'resource'=>ucwords($request->resource),
                    'mistake'=>ucwords($request->mistake),
                    'risk'=>ucwords($request->risk),
                    
                    'listen'=>ucwords($request->listen),
                    'verbal'=>ucwords($request->verbal),
                    'meeting'=>ucwords($request->meeting),
                    'demonstrate'=>ucwords($request->demonstrate),
                    
                    'work'=>ucwords($request->work),
                    'goal'=>ucwords($request->goal),
                    'attitude'=>ucwords($request->attitude),
                    'manage'=>ucwords($request->manage),
                    'career'=>ucwords($request->career),
                    
                     'relate'=>ucwords($request->relate),
                     'conflict'=>ucwords($request->conflict),
                     'control'=>ucwords($request->control),
                     'assertive'=>ucwords($request->assertive),
                     
                     'support'=>ucwords($request->support),
                     'fit'=>ucwords($request->fit),
                     'within'=>ucwords($request->within),
                     'sense'=>ucwords($request->sense),
                     'interact'=>ucwords($request->interact),
                     
                     'report'=>ucwords($request->report),
                     'prompt'=>ucwords($request->prompt),
                     'positive'=>ucwords($request->positive),
                     'bring'=>ucwords($request->bring),
                     'manner'=>ucwords($request->manner),
                     'comment'=>ucwords($request->comment),
                     'assessor'=>ucwords($request->assessor),
                    
             
             ]);
             return redirect()->back()->with('general','Success');
   }
   //print general assesment 
   public function printgeneralassesment($id){
        $general=DB::table('generalassesments')->where(['id'=>$id])->first();
        return view('interns.printgeneralassesment')->with(['general'=>$general]);
    }
}