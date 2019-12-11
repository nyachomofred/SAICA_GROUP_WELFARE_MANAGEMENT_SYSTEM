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

class AssetsController extends Controller
{
    
    //middleare for auth
    public function __construct(){
        $this->middleware('auth');
    } 
    
    //index function
    public function index(){
        return view('assets.index');
    }
    
    public function add(){
        $data=DB::table('allassets')->orderBy('id','desc')->get();
        return view('assets.add')->with(['data'=>$data]);
    }
    
    public function create(Request $request){
        $day=Date('d');
        $month=Date('m');
        $year=Date('Y');
        $validateData=$request->validate([
            'serialNumber'=>'required|unique:allassets',
            'orderNumber'=>'required|unique:allassets',
            ]);
            
        $insertData=DB::table('allassets')->insert([
            'assetName'=>$request->assetName,
            'serialNumber'=>$request->serialNumber,
            'assetModel'=>$request->assetModel,
            'assetType'=>$request->assetType,
            'supplier'=>$request->supplier,
            'company'=>ucwords($request->company),
            'orderNumber'=>ucwords($request->orderNumber),
            'purchaseCost'=>ucwords($request->purchaseCost),
            'purchaseDate'=>ucwords($request->purchaseDate),
            'waranty'=>ucwords($request->waranty),
            'status'=>'N/A ',
            'checkin'=>'N/A ',
            'checkout'=>'N/A ',
            'day'=>$day,
            'month'=>$month,
            'year'=>$year,
            ]);
            Alert::success('Data has been submited successfully')->autoclose(1500);
            return redirect()->back();
    }
    public function update(Request $request){
        $id=$request->id;
        $insertData=DB::table('allassets')->where(['id'=>$id])->update([
            'assetName'=>$request->assetName,
            'serialNumber'=>$request->serialNumber,
            'assetModel'=>$request->assetModel,
            'assetType'=>$request->assetType,
            'supplier'=>$request->supplier,
            'company'=>ucwords($request->company),
            'orderNumber'=>ucwords($request->orderNumber),
            'purchaseCost'=>ucwords($request->purchaseCost),
            'purchaseDate'=>ucwords($request->purchaseDate),
            'waranty'=>ucwords($request->waranty),
            'status'=>'Not Deployed',
            'status'=>'Not Deployed',
           
            ]);
             Alert::success('Data has been updated successfully')->autoclose(1500);
            return redirect()->back();
    }
    
    public function delete(Request $request){
        $id=$request->id;
        $insertData=DB::table('allassets')->where(['id'=>$id])->delete();
        Alert::warning('Data has been updated successfully')->autoclose(1500);
        return redirect()->back();
    }
    
     public function deployed(){
        $data=DB::table('allassets')->where(['status'=>'deployed'])->orderBy('id','desc')->get();
        return view('assets.deployed')->with(['data'=>$data]);
    }
    
      public function notdeployed(){
         $data=DB::table('allassets')->where(['status'=>'Not Deployed'])->orderBy('id','desc')->get();
        return view('assets.notdeployed')->with(['data'=>$data]);
    }
    
    public function allasset(){
        $data=DB::table('allassets')->orderBy('id','desc')->get();
        return view('assets.allasset')->with(['data'=>$data]);
    }
    
    public function maintainance(){
        $data=DB::table('allassets')->orderBy('id','desc')->get();
        return view('assets.maintainance')->with(['data'=>$data]);
    }
    //deploy an asset
    public function deploy(Request $request){
        $id=$request->id;
        $deployitem=DB::table('allassets')->where(['id'=>$id])->update([
            'status'=>'Deployed',
            ]);
        Alert::success('Asset deployed successfully')->autoclose(1500);
        return redirect()->back();
    }
    //undeploy
    public function undeploy(Request $request){
        $id=$request->id;
        $deployitem=DB::table('allassets')->where(['id'=>$id])->update([
            'status'=>'Not Deployed',
            ]);
        Alert::success('Status Changed to Not deployed')->autoclose(1500);
        return redirect()->back();
    }
    
}
