<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Student;
use Auth;
use DB;

class ReportController extends Controller
{
    public function __construct (){
        $this->middleware('auth');
    }
    
    public function assesmentreport(){
        return view('reports.assesmentreport');
    }
    
     public function generalperfomance(){
         $data=DB::table('marks')->orderBy('total','desc')->get();
         $year="";
         $intake="";
        return view('reports.generalperfomance')->with(['data'=>$data,'year'=>$year,'intake'=>$intake]);
    }
    
    public function projectReport(){
         $data=DB::table('clasasesments')->orderBy('total','desc')->get();
         $intake="";
         $year="";
        return view('reports.projectReport')->with(['data'=>$data,'year'=>$year,'intake'=>$intake]);
    }
    public function feeReport(){
        $data=DB::table('finances')->orderBy('balance','desc')->get();
        $year="";
        $intake="";
        return view('reports.feeReport')->with(['data'=>$data,'intake'=>$intake,'year'=>$year]);
    }
    //search for projectreport
     public function search(Request $request){
         $intake=$request->get('intake');
         $year=$request->get('year');
         $data=DB::table('clasasesments')->where(['intake'=>$intake,'year'=>$year])->paginate(10);
       return view('reports.projectReport')->with(['data'=>$data,'intake'=>$intake,'year'=>$year]);
         
     }
     //search for general performance report
     public function generalperfomancesearch(Request $request){
         $intake=$request->get('intake');
         $year=$request->get('year');
         $data=DB::table('marks')->where(['intake'=>$intake,'year'=>$year])->paginate(10);
       return view('reports.generalperfomance')->with(['data'=>$data,'intake'=>$intake,'year'=>$year]);
         
     }
     //fee report search
      public function feereportsearch(Request $request){
         $intake=$request->get('intake');
         $year=$request->get('year');
         $data=DB::table('finances')->where(['intake'=>$intake,'year'=>$year])->paginate(10);
        return view('reports.feeReport')->with(['data'=>$data,'intake'=>$intake,'year'=>$year]);
         
     }
     
}