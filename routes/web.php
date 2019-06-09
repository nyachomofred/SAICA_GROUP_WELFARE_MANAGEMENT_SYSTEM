<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/members','MemberController@index')->name('member.index');
    Route::get('/members/create','MemberController@showForm')->name('member.show.form');
    Route::post('/members/create','MemberController@create')->name('member.create');
    Route::get('/members/view/{id}','MemberController@view')->name('member.view');
    Route::get('/members/user','MemberController@userData')->name('member.user');
    Route::get('/members/user/api','MemberController@dataUser')->name('member.userapi');
});

//route for members
Route::get('/home/members','MemberController@index')->name('index');
Route::get('/home/spouses','SpouseController@index')->name('index');
Route::get('/home/balances','BalanceController@index')->name('index');
Route::get('/home/childrens','ChildrensController@index')->name('index');
