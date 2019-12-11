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


class StudentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){
        return view('students.show');
    }
    
    public function registeradmin(){
        
         return view('students.registeradmin');
            
        
   
    }
    
     public function insertadmin(Request $request){
         
         $update =DB::table('admins')->insert(array(
                'name'=>$request->name,
                'email'=>$request->email,
                'job_title'=>$request->job_title,
                'password' => Hash::make($request['password'])

            ));
         
       
    }
    
    public function index()
    {
      $all_student=Student::all();
      if(session('success_message')){
        Alert::success('Success', '');
      }

      return view('students.index')->with('all_student',$all_student);
    }
    public function indexv()
    {
     // $all_student=Student::all();
      $all_student= DB::table('students')->join('courseapps','courseapps.student_id','students.id')->select('students.*','courseapps.*')->paginate(6);
     
      
      if(session('success_message')){
        Alert::success('Success', '');
      }

      return view('students.indexv')->with('all_student',$all_student);
    }

    public function create()
    {
     
      $campus=Campus::all();
      $course=Course::all();
     

      return view('students.create')->with(['campus'=>$campus,'course'=>$course]);
     // return view('students.create')->with('course',$course);
    }

    public function course()
    {
      
    }
    
    public function insert(Request $request)
    {
        $day=Date('d');
        $month=Date('m');
        $year=Date('Y');
        $validator = $request->validate([
        'email' => ['string', 'email', 'max:255', 'unique:students'],
        'student_id' => [ 'string',  'max:255', 'unique:students'],
        'phonenumber' => ['regex:/(07)[0-9]{8}/', 'string',  'unique:students'],
        
    ]);
    
        
   
       $student= new Student();
       
       
       $student->course_period=$request->course_period;
       $student->self_sponsered=$request->self_sponsered;
       $student->student_id=$request->student_id;

       $student->full_name=$request->full_name;
       $student->date_of_birth=$request->date_of_birth;
       $student->id_no=$request->id_no;

       $student->gender_gender=$request->gender_gender;
       $student->email=$request->email;
       $student->phonenumber=$request->phonenumber;

       $student->alternate_phonenumber=$request->alternate_phonenumber;
       $student->citizenship=$request->citizenship;
       $student->gender=$request->gender;
       $student->future_career=$request->future_career;

       $student->physical_address=$request->physical_address;
       $student->religion=$request->religion;
       $student->medical_condition=$request->medical_condition;

       $student->campus=$request->campus;
       $student->intake=$request->intake;
       $student->level=$request->level;
       $student->status="Not Debited";
       $student->sponsor=ucwords($request->sponsor);
       $student->sponsor_title=ucwords($request->sponsor_title);
       $student->sponsor_name=ucwords($request->sponsor_name);
       $student->sponsor_address=ucwords($request->sponsor_address);
       $student->sponsor_phonenumber=ucwords($request->sponsor_phonenumber);
       $student->sponsor_email=ucwords($request->sponsor_email);
       
       $student->employer_title=ucwords($request->employer_title);
       $student->employer_name=ucwords($request->employer_name);
       $student->company_name=ucwords($request->company_name);
       $student->employer_phonenumber=ucwords($request->employer_phonenumber);
       $student->employer_email=ucwords($request->employer_email);
       
       $student->school_name=ucwords($request->school_name);
       $student->type_of_school=ucwords($request->type_of_school);
       $student->school_address=ucwords($request->school_address);
       $student->location=ucwords($request->location);
       $student->year_of_completion=ucwords($request->year_of_completion);
       $student->enrolled_in_school=ucwords($request->enrolled_in_school);
       
       $student->school_attended=ucwords($request->school_attended);
       $student->course_studied=ucwords($request->course_studied);
       $student->date_attended=ucwords($request->date_attended);
       
       $student->day=$day;
       $student->month=$month;
       $student->year=$year;
       
       
       
       if($student->save()){
        $sponsor =new Sponsorinformation();
        $sponsor->student_id=$student->id;
        
        $sponsor->sponsor=$request->sponsor;
        $sponsor->sponsor_title=$request->sponsor_title;
        $sponsor->sponsor_name=$request->sponsor_name;
        $sponsor->sponsor_address=$request->sponsor_address;
        $sponsor->sponsor_phonenumber=$request->sponsor_phonenumber;
        $sponsor->sponsor_email=$request->sponsor_email;
        
       if($sponsor->save()){
         
            $employerinfo= new Employerinformation();
            $employerinfo->student_id=$student->id;
            $employerinfo->employer_title=$request->employer_title;
            $employerinfo->employer_name=$request->employer_name;
            $employerinfo->company_name=$request->company_name;
            $employerinfo->employer_phonenumber=$request->employer_phonenumber;
            $employerinfo->employer_email=$request->employer_email;
            
          if($employerinfo->save()){
            $academicinfo=new Academicinformation();
            $academicinfo->student_id=$student->id;
            $academicinfo->school_name=$request->school_name;
            $academicinfo->type_of_school=$request->type_of_school;
            $academicinfo->school_address=$request->school_address;
            $academicinfo->location=$request->location;
            $academicinfo->year_of_completion=$request->year_of_completion;
            $academicinfo->enrolled_in_school=$request->enrolled_in_school;
           
            if ($academicinfo->save()) {
              $collage= new Collage();
              $collage->student_id=$student->id;
              $collage->school_attended=$request->school_attended;
              $collage->course_studied=$request->course_studied;
              $collage->date_attended=$request->date_attended;
              
              if($collage->save()){
                 $courseapp=new Courseapp;
                 $courseapp->student_id=$student->id;
                 $courseapp->course= json_encode($request->input('courses'));
                 $courseapp->save();
                  //Alert::success('Success')->autoclose(500);;
                  return redirect()->route('students.index')->with('student','Success');
                  
                
              
              }
            //  return redirect()->route('students.index')->withSuccessMessage('successfully added');

            }

          }
          }

         

       }

       //$courseapp=new Courseapp();
       //$courseapp->student_id=$student->id;
       //$courseapp->course= implode(",",$request->get('course'));
       //$courseapp->save();
       
     
       

    }
    public function view($id)

    {
      $student=Student::find($id);
     // $sponsorinfo=Sponsorinformation::find()->where('student_id',$id)->first();
     // $employerinfo=Employerinformation::find()->where('student_id',$id)->first();
     // $academicinfo=Academicinformation::find()->where('student_id',$id)->first();
     // $collageinfo=Collage::find()->where('student_id',$id)->first();

      $employerinfo=DB::table('employerinformations')->where('student_id',$id)->first();
      $academicinfo=DB::table('academicinformations')->where('student_id',$id)->first();
      $sponsorinfo=DB::table('sponsorinformations')->where('student_id',$id)->first();
      $collageinfo=DB::table('collages')->where('student_id',$id)->first();
     
      return view('students.view')->with(['student'=>$student,'sponsorinfo'=>$sponsorinfo,'employerinfo'=>$employerinfo,'academicinfo'=>$academicinfo,'collageinfo'=>$collageinfo]);
    }

    public function update($id)
    {
      $student=Student::find($id);
     
      $campus=Campus::all();
      return view('students.update')->with(['student'=>$student,'campus'=>$campus,]);
      
    }

    public function profileupdate(Request $request,$id)
    {
       $student=Student::find($id);
       $student->course_period=$request->course_period;
       $student->self_sponsered=$request->self_sponsered;
       $student->student_id=$request->student_id;

       $student->full_name=$request->full_name;
       $student->date_of_birth=$request->date_of_birth;
       $student->id_no=$request->id_no;

       $student->gender_gender=$request->gender_gender;
       $student->email=$request->email;
       $student->phonenumber=$request->phonenumber;

       $student->alternate_phonenumber=$request->alternate_phonenumber;
       $student->citizenship=$request->citizenship;
       $student->gender=$request->gender;
       $student->future_career=$request->future_career;

       $student->physical_address=$request->physical_address;
       $student->religion=$request->religion;
       $student->medical_condition=$request->medical_condition;

       $student->campus=$request->campus;
       $student->intake=$request->intake;
       $student->level=$request->level;
       $student->save();
       
        
       // Alert::success('Success')->autoclose(500);;
        return redirect()->route('students.index')->with('student','Success');
      
      
    }
    public function sponsorview($id)
    {
      $one_sponsor=Sponsorinformation::find($id);
      return view('students.sponsorview')->with(['one_sponsor'=>$one_sponsor]);
    }
    public function sponsorupdate(Request $request,$id)
    {
       $sponsor =Sponsorinformation::find($id);
       $sponsor->sponsor=$request->sponsor;
       $sponsor->sponsor_title=$request->sponsor_title;
       $sponsor->sponsor_name=$request->sponsor_name;
       $sponsor->sponsor_address=$request->sponsor_address;
       $sponsor->sponsor_phonenumber=$request->sponsor_phonenumber;
       $sponsor->sponsor_email=$request->sponsor_email;
       $sponsor->save();
        //Alert::success('Success')->autoclose(500);;
       return redirect()->route('students.index')->with('student','Success');
       
    }

    public function employerview($id)
    {
      $one_employer=Employerinformation::find($id);
      return view('students.employerview')->with(['one_employer'=>$one_employer]);
    }

    public function employerupdate(Request $request,$id)
    {
       $employerinfo=Employerinformation::find($id);
       $employerinfo->employer_title=$request->employer_title;
       $employerinfo->employer_name=$request->employer_name;
       $employerinfo->company_name=$request->company_name;
       $employerinfo->employer_phonenumber=$request->employer_phonenumber;
       $employerinfo->employer_email=$request->employer_email;
       $employerinfo->save();
        //Alert::success('Success')->autoclose(500);;
       return redirect()->route('students.index')->with('student','Success');
       
    }

    public function academicview($id)
    {
     $one_academicinfo=Academicinformation::find($id);
     return view('students.academicview')->with(['one_academicinfo'=>$one_academicinfo]);

    }

    public function academicupdate(Request $request,$id)
    {
       $academicinfo=Academicinformation::find($id);
       $academicinfo->school_name=$request->school_name;
       $academicinfo->type_of_school=$request->type_of_school;
       $academicinfo->school_address=$request->school_address;
       $academicinfo->location=$request->location;
       $academicinfo->year_of_completion=$request->year_of_completion;
       $academicinfo->enrolled_in_school=$request->enrolled_in_school;
       $academicinfo->save();
       
      // Alert::success('Success')->autoclose(500);;
       return redirect()->route('students.index')->with('student','Success');
      
    }

    public function collageview($id)
    {
      $one_collage=Collage::find($id);
      return view('students.collageview')->with(['one_collage'=>$one_collage]);
    }
    public function collageupdate(Request $request,$id)
    {
       $collage= Collage::find($id);
       $collage->school_attended=$request->school_attended;
       $collage->course_studied=$request->course_studied;
       $collage->date_attended=$request->date_attended;
       $collage->save();
       //Alert::success('Success')->autoclose(500);
      return redirect()->route('students.index')->with('student','Success');
       

    }

    public function delete($id)
    {
      $one_delete=Student::find($id)->delete();
      return redirect()->route('students.index')->withSuccessMessage('successfully added');
     // return redirect()->route('students.index')->alert()->success('Success','Lorem Lorem Lorem')->autoclose(500);

     
    }

    public function allstudent()
    {
      $allstudents=Student::all()->count();
      return view('admin',compact('allstudents'));
    }

    public function laikipiastudent()
    {

      $all_student=Student::where(['campus'=>'Laikipia Campus']);
     
      return view('students.laikipiastudent')->with('all_student',$all_student);
    }

    public function westlandstudent()
    {

      $all_student=Student::where(['campus'=>'Westland Campus']);
     
      return view('students.westlandstudent')->with('all_student',$all_student);
    }

    public function jkuatstudent()
    {

      $all_student=Student::where(['campus'=>'Jkuat Juja Campus']);
     
      return view('students.jkuatstudent')->with('all_student',$all_student);
    }

    public function malestudent()
    {

      $all_student=Student::where(['gender_gender'=>'Male']);
     
      return view('students.malestudent')->with('all_student',$all_student);
    }

    public function femalestudent()
    {

      $all_student=Student::where(['gender_gender'=>'Female']);
     
      return view('students.femalestudent')->with('all_student',$all_student);
    }
    
    //admin forgot password
    public function adminforgotpassword(){
        return view('students.adminforgotpassword');
    }
    
    public function checkadminemail(Request $request){
        $email=$request->email;
        $validatedData = $request->validate(['email' => ['required', 'string', 'email', 'max:255','exists:users']]);
        $update =DB::table('users')->where(['email'=>$email])->update(array('password' => Hash::make($request['password'])));
        return redirect()->route('login')->with('status','Update Successfull');
       
        
        
    }
    
    //admin forgot password
    public function admineditpassword(){
        return view('students.admineditpassword');
    }
    
    public function processadmineditpassword(){
         $update =DB::table('admins')->update(array('password' => Hash::make($request['password'])));
            
             Alert::success('Password Updated Succsessfully')->autoclose(500);
              return redirect()->route('students.adminforgotpassword');
       
    
    }
    
    //student evaluation
     public function evaluation(){
         $students = DB::table('students')->get();
        return view('students.evaluation', ['students' => $students]);
    }
    //add student scores
    
     public function addscore($id){
         $students = DB::table('students')->where(['id'=>$id])->first();
         
         return view('students.addscore', ['students' => $students]);
       
    }
    
     public function classassesment($id){
         $students = DB::table('students')->where(['id'=>$id])->first();
       
        return view('students.classassesment', ['students' => $students]);
    }
    
    
    
     //add view student scores
    
     public function viewscore($id){
         
         $stude=DB::table('students')->where(['id'=>$id])->first();
         $name=$stude->full_name;
         $clasasesment = DB::table('clasasesments')->where(['student_table_id'=>$id])->get();
         $students = DB::table('marks')->where(['student_table_id'=>$id])->get();
         $record=count($students);
         $record_clasasesment=count($clasasesment);
         if(!$record >=1 && !$record_clasasesment >=1){
              Alert::warning('Sorry .No scores for this student')->showConfirmButton('Ok','#3085d6');
              return redirect()->route('students.evaluation');
              //return redirect()->route('students.evaluation')->with('status','No scores fo this student');
         }else{
             return view('students.viewscore', ['stude'=>$stude,'students' => $students,'clasasesment'=>$clasasesment]);
         }
       
    }
    
    //insertfinal evaluation
    
     public function insertfinalevaluation(Request $request,$id){
        $record=DB::table('marks')->where(['student_table_id'=>$id])->get();
        $countrecord=count($record);
        if(!$countrecord >=1){
            //
            $date= new Date();
            $year= Date('Y');
            $student_tableid=$id;
            $total=$request->final_project+$request->class_assesment_practical+$request->class_assesment_theory+$request->assignment+$request->attendance+$request->discipline+$request->in_class_participation;
            $class_score=$total-$request->final_project;
            $query= DB::table('marks')->insert(
                    [
                        'name' =>$request->name, 
                        'student_table_id' =>$student_tableid,
                        'gender' =>$request->gender,
                        'admision_no' =>$request->admision_no,
                        'class' =>$request->class,
                        'course' =>$request->course,
                        'campus' =>$request->campus,
                        'final_project' =>$request->final_project,
                        'class_assesment_practical' =>$request->class_assesment_practical,
                        'class_assesment_theory' =>$request->class_assesment_theory,
                        'assignment' =>$request->assignment,
                        'attendance' =>$request->attendance,
                        'discipline' =>$request->discipline,
                        'in_class_participation' =>$request->in_class_participation,
                        'total'=>$total,
                        'tutor_name' =>$request->tutor_name,
                        'date' =>$date,
                        'intake' =>$request->intake,
                        'comment' =>$request->comment,
                        'year' =>$year,
                        'class_score'=>$class_score,
                        
                        
                        
                        
                    ]
                );
            return redirect()->route('students.evaluation')->with('clas','Success');
            //
            
        }else{
            return redirect()->back()->with('failedmark','Failed!  this student can only be assest once for this particular assesment'); 
        }
        
    }
    
    //insert class assesment
    
    public function insertclasasesment(Request $request,$id){
        $student=DB::table('clasasesments')->where(['student_table_id'=>$id])->get();
        $studentcount=count($student);
        if(!$studentcount >=1){
            $date= new Date();
            $year= Date('Y');
            $student_tableid=$id;
            $total=$request->design+$request->data_validation+$request->database_design+$request->data_insert+$request->data_retrieve+$request->asesment_type;
            $query= DB::table('clasasesments')->insert(
                    [
                        'name' =>$request->name, 
                        'student_table_id' =>$student_tableid,
                        'gender' =>$request->gender,
                        'admision_number' =>$request->admision_number,
                        'class' =>$request->class,
                        'course' =>$request->course,
                        'campus' =>$request->campus,
                        'project_title' =>$request->project_title,
                        'asesment_type' =>$request->asesment_type,
                        'theory' =>$request->theory,
                        'design' =>$request->design,
                        'data_validation' =>$request->data_validation,
                        'database_design' =>$request->database_design,
                        'data_insert' =>$request->data_insert,
                        'data_retrieve' =>$request->data_retrieve,
                        'date' =>$date,
                        'total'=>$total,
                        'comment' =>$request->comment,
                        'tutor_name' =>$request->tutor_name,
                        'intake'=>$request->intake,
                        'year'=>$year
                    ]
                );
            
           if($query){
                return redirect()->route('students.evaluation')->with('clas','Success');
           }else{
                return redirect()->route('students.classassesment')->with('failed','Could not submit');
           }
           
            
        }else{
           return redirect()->back()->with('asestonce','Failed!  this student can only be assest once for this particular assesment type');  
        }
    }
    
    
    
    //print score
    
    public function printscore($id){
        $student=DB::table('marks')->where(['id'=>$id])->first();
        return view('students.printscore')->with(['student'=>$student]);
    }
    
    //print classassesment
     public function printclasasesment($id){
         $student=DB::table('clasasesments')->where(['id'=>$id])->first();
        return view('students.printclasasesment')->with(['student'=>$student]);
    }
    
    //update class asesment 
    public function updateclasasesment($id){
        $students=DB::table('clasasesments')->where(['id'=>$id])->first();
        return view('students.updateclasasesment')->with(['students'=>$students]);
        
    }
    
    //insertupdateclassasesment
         public function insertupdateclasasesment(Request $request,$id){
             $record=DB::table('clasasesments')->where(['id'=>$id])->first();
             $tableid= $record->student_table_id;
             $total=$request->design+$request->data_validation+$request->database_design+$request->data_insert+$request->data_retrieve+$request->asesment_type;
             $studentupdate=DB::table('clasasesments')->where(['id'=>$id])->update(
                 [
                        'name' =>$request->name, 
                        'gender' =>$request->gender,
                        'admision_number' =>$request->admision_number,
                        'class' =>$request->class,
                        'course' =>$request->course,
                        'campus' =>$request->campus,
                        'design' =>$request->design,
                        'data_validation' =>$request->data_validation,
                        'database_design' =>$request->database_design,
                        'data_insert' =>$request->data_insert,
                        'data_retrieve' =>$request->data_retrieve,
                        'total'=>$total,
                        'comment' =>$request->comment,
                        'tutor_name' =>$request->tutor_name,
                    ]
                 );
                  return redirect('/admin/students/viewscore/'.$tableid)->with('update','Successfully update');
             
         }
    
    
    //update class asesment 
    public function updatefinalasesment($id){
        $students=DB::table('marks')->where(['id'=>$id])->first();
        return view('students.updatefinalasesment')->with(['students'=>$students]);
        
    }
    //insert update final assesment
     public function insertupdatefinalasesment(Request $request,$id){
         $record=DB::table('marks')->where(['id'=>$id])->first();
         $tableid= $record->student_table_id;
         $studentupdate=DB::table('marks')->where(['id'=>$id])->update([
             
                   'name' =>$request->name, 
                    'gender' =>$request->gender,
                    'admision_no' =>$request->admision_no,
                    'class' =>$request->class,
                    'course' =>$request->course,
                    'campus' =>$request->campus,
                    'final_project' =>$request->final_project,
                    'class_assesment_practical' =>$request->class_assesment_practical,
                    'class_assesment_theory' =>$request->class_assesment_theory,
                    'assignment' =>$request->assignment,
                    'attendance' =>$request->attendance,
                    'discipline' =>$request->discipline,
                    'in_class_participation' =>$request->in_class_participation,
                    'tutor_name' =>$request->tutor_name,
                    
             ]);
             return redirect('/admin/students/viewscore/'.$tableid)->with('update','Successfully update');
         
         
     }
     public function studentportal(){
         
         $sloginStudent=Auth::user()->student_id;
         $student=DB::table('students')->where(['student_id'=>$sloginStudent])->first();
         $studentproject=DB::table('proposals')->where(['student_id'=>$sloginStudent])->first();
         $finalproject=DB::table('finalprojects')->where(['student_id'=>$sloginStudent])->first();
         
         return view('students.studentportal')->with(['student'=>$student,'studentproject'=>$studentproject,'finalproject'=>$finalproject]);
     }
     
     //insertstudentproject
     public function insertstudentproject(Request $request){
          $request->validate([
              'upload'=>"required|mimes:pdf|max:10000"
         ]);
         $studentExist=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
         if(!empty($studentExist)){
              return redirect()->back()->with('failed','Failed .This project proposal is already submited');
         }else{
             
             $upload=$request->file('upload');
             $new_name=rand().'.' .$upload->getClientOriginalExtension();
             $upload->move(public_path('projects'),$new_name);
             $insert=DB::table('proposals')->insert([
             'student_id'=>$request->student_id,
             'name'=>$request->name,
             'campus'=>$request->campus,
             'project_name'=>$request->project_name,
             'description'=>$request->description,
             'upload'=>$new_name,
             'status'=>'Null',
             'date_submited'=>Date('d/m/Y'),
             'comment'=>'Null',
             
             ]);
             return redirect()->route('students.studentportal')->with('status','Project Submitted Successfully');
             
         }
         
        
         
     }
     
     //end of insertstudent project
     
      public function insertstudentfinalproject(Request $request){
           $request->validate([
              'documentation'=>"required|mimes:pdf|max:10000"
         ]);
             $studentExist=DB::table('finalprojects')->where(['student_id'=>$request->student_id])->first();
             if(empty($studentExist)){
                  $studentproposal=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
                  if(!empty($studentproposal)){
                        $projectstatus=DB::table('proposals')->where(['student_id'=>$request->student_id])->first();
                        $good=$projectstatus->status;
                        if($good=='Aprove'){
                            $documentation=$request->file('documentation');
                             $new_name=rand().'.' .$documentation->getClientOriginalExtension();
                             $documentation->move(public_path('projects'),$new_name);
                             $insert=DB::table('finalprojects')->insert([
                             'student_id'=>$request->student_id,
                             'name'=>$request->name,
                             'campus'=>$request->campus,
                             'project_name'=>$request->project_name,
                             'description'=>$request->description,
                             'documentation'=>$new_name,
                             'project_link'=>$request->project_link,
                             'status'=>'Null',
                             'date_uploaded'=>Date('d/m/Y'),
                             'comment'=>'Null',
                             
                             ]);
                             return redirect()->route('students.studentportal')->with('status','Project Submitted Successfully'); 
             
             
                        }else{return redirect()->back()->with('notapprove','Failed .Your project proposal has not been approved ');}
                  }else{return redirect()->back()->with('noproposal','Failed .Please submit proposal for this project to be approved');}
             }else{return redirect()->back()->with('projectexist','Failed .This project already exist');}
             
          
      }
      //submited proposal
      public function submitedproposal(){
          $project=DB::table('proposals')->get();
          return view('students.submitedproposal')->with(['project'=>$project]);
      }
      //submited final project
      public function submitedfinalproject(){
            $project=DB::table('finalprojects')->get();
           return view('students.submitedfinalproject')->with(['project'=>$project]);;
      }
      //view student proposal
      public function viewstudentproposal($id){
          $proposal=DB::table('proposals')->where(['id'=>$id])->first();
          return view('students.viewstudentproposal')->with(['proposal'=>$proposal]);
      }
      //view student project
       public function viewstudentproject($id){
          $proposal=DB::table('finalprojects')->where(['id'=>$id])->first();
          return view('students.viewstudentproject')->with(['proposal'=>$proposal]);
      }
      
      //update student proposal
      public function updateproposal(Request $request,$id){
          $update=DB::table('proposals')->where(['id'=>$id])->update([
              'status'=>ucfirst($request->status),
              'comment'=>ucfirst($request->comment),
              ]);
          return redirect()->route('students.submitedproposal')->with('status','Update Successfull');
      }
      
       //update student project
      
       public function updatefinalproject(Request $request,$id){
          $update=DB::table('finalprojects')->where(['id'=>$id])->update([
              'status'=>$request->status,
              'comment'=>ucfirst($request->comment),
             
              ]);
          return redirect()->route('students.submitedfinalproject')->with('status','Update Successfull');
      }
      
      //update profile hoto for student
      public function updatephoto(Request $request){
          $id=$request->id;
          $photo=$request->file('photo');
          $new_name=rand().'.' .$photo->getClientOriginalExtension();
          $photo->move(public_path('img'),$new_name);
          $updateDate=DB::table('students')->where(['id'=>$id])->update([
              'photo'=>$new_name,
              ]);
              
              return redirect()->back()->with('status','Success');
          
         
      }
      
          
      
}
