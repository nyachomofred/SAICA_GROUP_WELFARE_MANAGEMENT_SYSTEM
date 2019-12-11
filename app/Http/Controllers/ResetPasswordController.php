<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Auth;


class ResetPasswordController extends Controller
{
    
    public function index(){
        return view('resetpasswords.index');
    }
    public function confirmemail(Request $request){
        $validatedData = $request->validate([
        'email' => 'required|exists:users|max:255',
        
    ]);
        $email=$request->email;
        $user=DB::table('users')->where(['email'=>$email,'pno'=>1])->first();
        if(!empty($user)){
             return view('resetpasswords.passwordresetform')->with(['user'=>$user]);
        }else{
            return redirect()->back()->with('failed','Failed! this action can not be completed.please contact administrator');
        }
       
        
    }
    public function passwordresetform(){
        return view('resetpasswords.passwordresetform');
    }
    public function insertpasswordupdate(Request $request){
        $validateData=$request->validate(['password' => ['required', 'string', 'min:8', 'confirmed'],]);
        $id=$request->id;
        $updatePassword=DB::table('users')->where(['id'=>$id])->update(['password'=>Hash::make($request->password)]); 
        return redirect()->route('login')->with('updatesuccess','Password updated successfully. You can now login'); 
    }
}
