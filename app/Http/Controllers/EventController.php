<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Campus;
use DB;
use Illuminate\Support\Fascades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
class EventController extends Controller

{
    
    public function __construct(){
        $this->middleware('auth');
    }
   public function index(){
       $event=DB::table('events')->paginate(10);
       return view('events.index')->with(['event'=>$event]);
   }
   
   public function create(Request $request){
       $validateData=$request->validate([
           'name'=>'required|unique:events',
           'description'=>'required',
           'start_date'=>'required',
           'end_date'=>'required',
           
           ]);
        $saveData=DB::table('events')->insert([
            'name'=>ucwords($request->name),
            'description'=>ucwords($request->description),
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_by'=>$request->created_by,
            ]);
            return redirect()->back()->with('status','Data has been saved successfully');
   }
   //view events
   public function view($id){
       $event=DB::table('events')->where(['id'=>$id])->first();
       return view('events.view')->with(['event'=>$event]);
   }
   //update events
   public function update(Request $request){
       $id=$request->id;
       $event=DB::table('events')->where(['id'=>$id])->update([
             'name'=>ucwords($request->name),
            'description'=>ucwords($request->description),
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_by'=>$request->created_by,
            
           ]);
       return redirect()->route('events.index')->with('status','Data has been saved successfully');
   }
   
   //delete an event
   public function delete($id){
       $deleteEvent=DB::table('events')->where(['id'=>$id])->delete();
       return redirect()->route('events.index')->with('deletestatus','One record is deleted successfully');
   }
   public function viewevent(){
        $event=DB::table('events')->paginate(10);
        return view('events.viewevent')->with(['event'=>$event]);
   }
}
