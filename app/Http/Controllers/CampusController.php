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
class CampusController extends Controller

{
   public function index()
   {
      
         $all_campus=Campus::all();
         return view('campuses.index')->with('all_campus',$all_campus);
       
   }
    
   //
    public function showForm()
    {
        return view('campuses.create');
    }
    //
    public function create(Request $request)
    {
        $campus=new Campus;
        $campus->name=$request->name;
        $campus->location=$request->location;
        $campus->save();
        Alert::success('Success')->autoclose(500);;
        return redirect()->route('campuses.index');
      
    }
      //

    public function view($id)
    {
     $v_one=Campus::find($id);
     return view('campuses.view')->with('v_one',$v_one);
    }

    public function update(Request $request,$id)
    {
        $data=Campus::find($id);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->save();
        
       // $data=array();
        //$data['name']=$request->name;
       // $data['location']=$request->location;
    
       // $course_update=DB::table('campuses')->where('id',$id)->update($data);
       
       Alert::success('Success')->autoclose(500);;
       return redirect()->route('campuses.index');
        
    }

    public function delete($id)
    {
        $delete=Campus::find($id)->delete();
        Alert::success('Success')->autoclose(500);;
        return redirect()->route('campuses.index');
        
    }
}
