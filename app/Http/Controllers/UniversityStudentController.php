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

class UniversityStudentController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    //index function
    public function index(){
        $data=DB::table('universitystudents')->paginate(10);
        return view('universitystudents.index')->with(['data'=>$data]);
        
    }
    
    public function create(Request $request){
        $validateData=$request->validate([
            'name'=>'required|string|max:200',
            'email'=>'required|string|max:200|email|unique:universitystudents',
            'phone' => 'regex:/(2547)[0-9]{8}/|string|numeric|digits:12|unique:universitystudents',
            'collage'=>'required|string|max:200',
             'course'=>'required|string|max:200',
            'year_of_completion'=>'required|string|max:200',
            'date_interviewed'=>'required|string|max:200',
            'speciality'=>'required|string|max:200',
            'result'=>'required|string|max:200',
             
            ]);
    //insert data
    $inserData=DB::table('universitystudents')->insert([
        'name'=>ucwords($request->name),
        'email'=>ucwords($request->email),
        'phone'=>ucwords($request->phone),
        'collage'=>ucwords($request->collage),
        'course'=>ucwords($request->course),
        'year_of_completion'=>ucwords($request->year_of_completion),
        'date_interviewed'=>ucwords($request->date_interviewed),
        'speciality'=>ucwords($request->speciality),
        'result'=>ucwords($request->result),
        
        ]);
        //return redirect
        return redirect()->back()->with('addstatus','Data has been saved sucesfully');
    }
    
    
    
    public function update(Request $request){
        $validateData=$request->validate([
            'name'=>'required|string|max:200',
            'email'=>'required|string|max:200|email',
            'phone' => 'regex:/(2547)[0-9]{8}/|string|numeric|digits:12',
            'collage'=>'required|string|max:200',
             'course'=>'required|string|max:200',
            'year_of_completion'=>'required|string|max:200',
            'date_interviewed'=>'required|string|max:200',
            'speciality'=>'required|string|max:200',
            'result'=>'required|string|max:200',
             
            ]);
    //insert data
    $id=$request->id;
    $inserData=DB::table('universitystudents')->where(['id'=>$id])->update([
        'name'=>ucwords($request->name),
        'email'=>ucwords($request->email),
        'phone'=>ucwords($request->phone),
        'collage'=>ucwords($request->collage),
        'course'=>ucwords($request->course),
        'year_of_completion'=>ucwords($request->year_of_completion),
        'date_interviewed'=>ucwords($request->date_interviewed),
        'speciality'=>ucwords($request->speciality),
        'result'=>ucwords($request->result),
        
        ]);
        //return redirect
        return redirect()->back()->with('updatestatus','Data has been updated sucesfully');
    }
    
    
     public function delete(Request $request){
       
    //insert data
    $id=$request->id;
    $inserData=DB::table('universitystudents')->where(['id'=>$id])->delete();
    return redirect()->back()->with('deletestatus','One record has been deleted');
    }
    
}
