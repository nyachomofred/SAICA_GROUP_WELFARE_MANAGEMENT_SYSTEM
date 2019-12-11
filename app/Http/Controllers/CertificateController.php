<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Certificate;
use DB;
use App\Campus;
use App\Sponsorinformation;
use App\Employerinformation;
use App\Academicinformation;
use App\Collage;
use App\Course;
use App\Courseapp;


class CertificateController extends Controller
{
    //
    public function index()

    {
         //$record= Certificate::all();
       $record= DB::table('students')->join('certificates','certificates.student_id','students.id')->select('students.full_name','certificates.*')->get();
      
       
        return view('certificates.index')->with('record',$record);
    }
    public function create(Request $request)
    {
       
        $certificate= new Certificate;
        $validateData=$request->validate([
           
            'certificate_number'=>'required|max:100|unique:certificates',
            'student_id'=>'required|unique:certificates',
           
            ]);
        $certificate->certificate_name=ucwords($request->certificate_name);
        $certificate->certificate_number=ucwords($request->certificate_number);
        $certificate->student_id=$request->student_id;
        $certificate->course_name=ucwords($request->course_name);
        $certificate->collected_date=$request->collected_date;
        $certificate->save();
       
       return redirect()->route('certificates.index')->with('status','Success');
    }
    public function view($student_id)
    {
        $one_certificate=Certificate::where(['student_id'=>$student_id])->first();
        $student=DB::table('students')->where(['id'=>$student_id])->first();
        //$one_certificate= DB::table('students')->join('certificates','certificates.student_id','students.id')->select('students.full_name','certificates.*')->where('certificates.id',$id)->get();
        return view('certificates.view')->with(['one_certificate'=>$one_certificate,'student'=>$student]);
    }

    public function update(Request $request,$id)
    {
        $certificate=Certificate::find($id);
        $certificate->certificate_name=ucwords($request->certificate_name);
        $certificate->certificate_number=ucwords($request->certificate_number);
        $certificate->student_id=$request->student_id;
       
        $certificate->collected_date=$request->collected_date;
        $certificate->save();
        return redirect()->route('certificates.index')->with('status','Success');;
    }

    public function delete($id)
    {
        $delete=Certificate::find($id)->delete();
        return redirect()->route('certificates.index')->with('status','Success');;
       
    }
    public function show()
    {
        $all_student=Student::all();
     
        return view('certificates.show')->with('all_student',$all_student);

    }
    
}
