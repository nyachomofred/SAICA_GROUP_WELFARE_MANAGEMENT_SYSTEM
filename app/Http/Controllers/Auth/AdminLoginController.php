<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:admin',['except'=>['logout','userLogout']]);
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //valiadte user
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6',

            ]
        );
       
        //atempt to login user
        //if login successfull redirect to other page
        if( Auth::guard('admin')->Attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
        //if not successfull then rediect back
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
       
        return redirect()->route('admin.login');

        //$request->session()->invalidate();

       
    }

}
