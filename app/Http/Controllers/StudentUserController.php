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

class StudentUserController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    //index function
    public function index(){
        $data=DB::table('users')->where(['pno'=>2])->get();
        return view('studentusers.index')->with(['data'=>$data]);
    }
    //insert data
   public function create(Request $request){
       $insertData=DB::table('users')->insert([
            'name'=>ucwords($request->name),
             'lastname'=>ucwords($request->lastname),
            'username'=>ucwords($request->username),
            'email'=>ucwords($request->email),
            'student_id'=>'Null',
            'password'=>Hash::make($request->password),
            'role'=>ucwords($request->role),
            'pno'=>2,
           ]);
        return redirect()->back()->with('addstatus','Data has been saved successfully');
   }
}
