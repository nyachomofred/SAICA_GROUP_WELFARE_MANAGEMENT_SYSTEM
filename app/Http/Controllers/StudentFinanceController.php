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

class StudentFinanceController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    public function index(){
        $admNo=Auth::user()->username;
        if(!empty($admNo)){
            $data=DB::table('finances')->where(['adm_no'=>$admNo])->first();
             return view('studentfinance.index')->with(['data'=>$data]);
        }
        
    }
    
    public function paymenthistory($student_id){
        $data=DB::table('paymenthistories')->where(['student_id'=>$student_id])->paginate(10);
        return view('studentfinance.paymenthistory')->with(['data'=>$data]);
    }
    
    public function view($student_id){
        return view('studentfinance.view');
    }
}
