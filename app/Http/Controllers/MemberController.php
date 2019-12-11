<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

use App\Member;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $total_member= Member::all();
        if(session('success_message')){
            Alert::success('Success', '');
        }
        return view('members.index')->with('total_member',$total_member);
    }
    
    public function showForm()
    {
        return view('members.create');
    }
    public function create(Request $request)
    {
       $member= new Member;
       $validator= \Validator::make($request->all(),[
           'firstname'=>'required',
           'lastname'=>'required',
           'email'=>'required|unique:members|email',
           'gender'=>'required',
           'phonenumber'=>'required|unique:members|digits:10',
           'id_no'=>'required|unique:members|digits:8',
       ]);
       if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->input());
       }else{
         
        $member->firstname=$request->firstname;
        $member->lastname=$request->lastname;
        $member->email=$request->email;
        $member->phonenumber=$request->phonenumber;
        $member->gender=$request->gender;
        $member->id_no=$request->id_no;
        $member->save();
        return redirect()->route('member.index')->withSuccessMessage('successfully added');
       }
      
    }

    public function view($id)
    {
     $contact=DB::table('members')->where('id',$id)->first();
      return view('members.view')->With('contact',$contact);
    }

    public function update()
    {
     return view('studentlogin');
    }
    
    public function delete()
    {

    }

    public function userData()
    {
        return view('members.user');
       
    }
    
    public function dataUser()
    {
     
        $users = Member::select(['id', 'firstname', 'lastname', 'gender', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('gender')
            ->make(true);
    }
    
    public function registerstudent(Request $request){
       
    }
}
