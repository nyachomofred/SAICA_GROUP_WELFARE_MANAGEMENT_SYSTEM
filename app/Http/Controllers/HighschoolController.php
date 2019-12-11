<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Course;
use DB;
use Illuminate\Support\Fascades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class HighschoolController extends Controller

{
    public function index(){
        $data=DB::table('high_school_contacts')->get();
        return view('highschoolcontacts.index')->with(['data'=>$data]);
    }
    
    
    public function create(Request $request){
        
       $data=DB::table('high_school_contacts')->insert([
           'school_name'=>ucwords($request->school_name),
           'postal_address'=>ucwords($request->postal_address),
           'postal_code'=>ucwords($request->postal_code),
           'county'=>ucwords($request->county),
           'town'=>ucwords($request->town),
           'teacher_name'=>ucwords($request->teacher_name),
           'phone_number'=>ucwords($request->phone_number),
           'email_address'=>ucwords($request->email_address),
           
           ]);
           return redirect()->route('highschoolcontacts.index')->with('status','Success');
    }
    public function view($id){
        $data=DB::table('high_school_contacts')->where(['id'=>$id])->first();
        return view('highschoolcontacts.view')->with(['data'=>$data]);
        
    }
    
    public function update(Request $request,$id){
        $data=DB::table('high_school_contacts')->where(['id'=>$id])->update([
           'school_name'=>ucwords($request->school_name),
           'postal_address'=>ucwords($request->postal_address),
           'postal_code'=>ucwords($request->postal_code),
           'county'=>ucwords($request->county),
           'town'=>ucwords($request->town),
           'teacher_name'=>ucwords($request->teacher_name),
           'phone_number'=>ucwords($request->phone_number),
           'email_address'=>ucwords($request->email_address),
           
           ]);
       return redirect()->route('highschoolcontacts.index')->with('status','Success');
        
    }
}

?>