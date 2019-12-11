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

class ZalegoClasController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    //index function
    public function index(){
        $data=DB::table('zalegoclases')->paginate(10);
        return view('zalegoclases.index')->with(['data'=>$data]);
    }
    public function create(Request $request){
        $insertData=DB::table('zalegoclases')->insert(['name'=>ucwords($request->name),]);
        return redirect()->back()->with('addstatus','Data has been saved successfully');
    }
    
    //update clases
    public function update(Request $request){
        $id=$request->id;
        $updateData=DB::table('zalegoclases')->where(['id'=>$id])->update(['name'=>ucwords($request->name),]);
        return redirect()->back()->with('updatestatus','Data has been updated successfully');
    }
    
    //delete dta
    public function delete(Request $request){
        $id=$request->id;
        $updateData=DB::table('zalegoclases')->where(['id'=>$id])->delete();
        return redirect()->back()->with('deletestatus','One record has been deleted');
    }
}
