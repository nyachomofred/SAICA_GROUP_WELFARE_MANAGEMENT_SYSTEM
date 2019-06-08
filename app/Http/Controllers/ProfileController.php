<?php
 namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;
 use Auth;
 use App\User;

 class ProfileController extends Controller
 {
     public function profile(){
     return view('profile');
     
     }
 }

?>