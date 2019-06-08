<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('members.index');
    }
    
    public function showForm()
    {
        return view('members.create');
    }
    public function create(Request $request)
    {
       $member= new Member;
       $member->firstname=$request->firstname;
       $member->lastname=$request->lastname;
       $member->email=$request->email;
       $member->phonenumber=$request->phonenumber;
       $member->gender=$request->gender;
       $member->id_no=$request->id_no;
       $member->save();
       return redirect()->route('member.index');
    }

    public function view()
    {

    }

    public function update()
    {

    }
    
    public function delete()
    {

    }
}
