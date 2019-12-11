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

class AttacheeController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
   
   public function index(){
       $data=DB::table('attachees')->paginate(10);
       return view('attachees.index')->with(['data'=>$data]);
   } 
   
   public function create(Request $request){
       $day=Date('d');
       $month=Date('m');
       $year=Date('Y');
       $validateData=$request->validate([
           'name'=>'required|string|max:200',
           'email'=>'required|string|max:200|email|unique:attachees',
           'area_of_study'=>'required|string|max:200',
           'place_attached'=>'required|string|max:200',
           'phone'=>'required|string|max:200|unique:attachees',
           ]);
       $insertData=DB::table('attachees')->insert([
           'name'=>ucwords($request->name),
           'email'=>ucwords($request->email),
           'phone'=>ucwords($request->phone),
           'area_of_study'=>ucwords($request->area_of_study),
           'place_attached'=>ucwords($request->place_attached),
           'date'=>$day,
           'month'=>$month,
           'year'=>$year,
           ]);
        return redirect()->back()->with('addstatus','Data has been saved successfully');
   }
   
   //update attachees
   public function update(Request $request){
       $id=$request->id;
       
       $updateData=DB::table('attachees')->where(['id'=>$id])->update([
           'name'=>ucwords($request->name),
           'email'=>ucwords($request->email),
           'phone'=>ucwords($request->phone),
           'area_of_study'=>ucwords($request->area_of_study),
           'place_attached'=>ucwords($request->place_attached),
           ]);
        return redirect()->back()->with('updatestatus','Data has been update successfully');
   }
   
    public function delete(Request $request){
       $id=$request->id;
       $deleteData=DB::table('attachees')->where(['id'=>$id])->delete();
        return redirect()->back()->with('deletestatus','One record has been deleted');
   }
   
}
