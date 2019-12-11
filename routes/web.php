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
Route::get('/search','ReportController@search');
Route::get('/generalperfomancesearch','ReportController@generalperfomancesearch');
Route::get('/feereportsearch','ReportController@feereportsearch');

//student login route
Route::post('/registerStudent', 'CourseController@registerstudent')->name('registerstudent');
//end of studentlogin
Route::get('/projects/studentproject','ProjectController@studentproject')->name('projects.studentproject');
Route::get('/projects/upload','ProjectController@upload')->name('projects.upload');
Route::post('/projects/fileinsert','ProjectController@fileinsert')->name('projects.fileinsert');
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
    
    
    //toute for student login
    
    
    //routes for changing password for admin
     Route::get('/adminforgotpassword','StudentController@adminforgotpassword')->name('students.adminforgotpassword');
     Route::post('/checkadminemail','StudentController@checkadminemail')->name('students.checkadminemail');
     Route::get('/admineditpassword','StudentController@admineditpassword')->name('students.admineditpassword');
     Route::post('/processadmineditpassword','StudentController@admineditpassword')->name('students.processadmineditpassword');
     
    //end of route
//route for courses
    Route::get('/courses/index','CourseController@index')->name('courses.index');
    Route::get('/courses/indexv','CourseController@indexv')->name('courses.indexv');
    Route::get('/courses/create','CourseController@showForm')->name('courses.show.form');
    Route::post('/courses/create','CourseController@create')->name('courses.create');
    Route::get('/courses/view/{id}','CourseController@view')->name('courses.view');
    Route::post('/courses/update/{id}','CourseController@update')->name('courses.update');
    Route::get('/courses/delete/{id}','CourseController@delete')->name('courses.delete');
    Route::post('/courses/delete','CourseController@deletecourse')->name('courses.deletecourse');
    Route::post('/courses/update','CourseController@updatecourse')->name('courses.updatecourse');
    
//route for campuses
    Route::get('/campuses/index','CampusController@index')->name('campuses.index');
    Route::get('/campuses/show','CampusController@show')->name('campuses.show');
    Route::get('/campuses/create','CampusController@showForm')->name('campuses.show.form');
    Route::post('/campuses/create','CampusController@create')->name('campuses.create');
    Route::get('/campuses/view/{id}','CampusController@view')->name('campuses.view');
    Route::post('/campuses/update/{id}','CampusController@update')->name('campuses.update');
    Route::get('/campuses/delete/{id}','CampusController@delete')->name('campuses.delete');

    //students roaute
    Route::get('/students/show','StudentController@show')->name('students.show');
   
    Route::get('/students/index','StudentController@index')->name('students.index');
    Route::get('/students/indexv','StudentController@indexv')->name('students.indexv');
    Route::get('/students/create','StudentController@create')->name('students.create');
   // Route::get('/students/create','StudentController@course')->name('students.create');
   
    Route::post('/students/insert','StudentController@insert')->name('students.insert');
    //routes for inserting new admin
    Route::get('/students/registeradmin','StudentController@registeradmin')->name('students.registeradmin');
    Route::post('/students/insertadmin','StudentController@insertadmin')->name('students.insertadmin');
    Route::post('/students/updatephoto','StudentController@updatephoto')->name('students.updatephoto');
    
    
    
    Route::get('/students/view/{id}','StudentController@view')->name('students.view');
    Route::get('/students/update/{id}','StudentController@update')->name('students.update');
    Route::post('/students/profileupdate/{id}','StudentController@profileupdate')->name('students.profileupdate');
    Route::get('/students/sponsorview/{id}','StudentController@sponsorview')->name('students.sponsorview');
    Route::post('/students/sponsorupdate/{id}','StudentController@sponsorupdate')->name('students.sponsorupdate');
    Route::get('/students/employerview/{id}','StudentController@employerview')->name('students.employerview');
    Route::post('/students/employerupdate/{id}','StudentController@employerupdate')->name('students.employerupdate');
    Route::get('/students/academicview/{id}','StudentController@academicview')->name('students.academicview');
    Route::post('/students/academicupdate/{id}','StudentController@academicupdate')->name('students.academicupdate');
    Route::get('/students/collageview/{id}','StudentController@collageview')->name('students.collageupdate');
    Route::post('/students/collageupdate/{id}','StudentController@collageupdate')->name('students.collageupdate');
    Route::get('/students/delete/{id}','StudentController@delete')->name('students.delete');

    Route::get('/students/laikipiastudent','StudentController@laikipiastudent')->name('students.laikipiastudent');
    Route::get('/students/westlandstudent','StudentController@westlandstudent')->name('students.westlandstudent');
    Route::get('/students/jkuatstudent','StudentController@jkuatstudent')->name('students.jkuatstudent');

    Route::get('/students/malestudent','StudentController@malestudent')->name('students.malestudent');
    Route::get('/students/femalestudent','StudentController@femalestudent')->name('students.femalestudent');
    
    //students project 
    
     Route::post('/students/insertstudentproject','StudentController@insertstudentproject')->name('students.insertprojectproposal');
     Route::post('/students/insertstudentfinalproject','StudentController@insertstudentfinalproject')->name('students.insertfinalprojectproposal');
     Route::get('/students/submitedproposal','StudentController@submitedproposal')->name('students.submitedproposal');
     Route::get('/students/submitedfinalproject','StudentController@submitedfinalproject')->name('students.submitedfinalproject');
     Route::get('/students/viewstudentproposal/{id}','StudentController@viewstudentproposal')->name('students.viewstudentproposal');
     Route::get('/students/viewstudentproject/{id}','StudentController@viewstudentproject')->name('students.viewstudentproject');
     Route::post('/students/updateproposal/{id}','StudentController@updateproposal')->name('students.updateproposal');
     Route::post('/students/updatefinalproject/{id}','StudentController@updatefinalproject')->name('students.updatefinalproject');
    //end of student project
    
     //Route::get('/users','StudentController@femalestudent')->name('users');
    
    //users
    
    Route::get('/users','CourseController@user')->name('user');
    Route::get('/adduser','CourseController@adduser')->name('adduser');
    Route::post('/insertuser','CourseController@insertuser')->name('insertuser');
    Route::post('/insertupdateuser','CourseController@insertupdateuser')->name('insertupdateuser');
    Route::get('/updateuser/{id}','CourseController@updateuser')->name('updateuser');
    Route::post('/deleteuser','CourseController@deleteeuser')->name('deleteeuser');
    
    //student evaluation route
    
     Route::get('/students/evaluation','StudentController@evaluation')->name('students.evaluation');
     Route::get('/students/addscore/{id}','StudentController@addscore')->name('students.addscore');
     Route::get('/students/classassesment/{id}','StudentController@classassesment')->name('students.classassesment');
     Route::post('/students/insertfinalevaluation/{id}','StudentController@insertfinalevaluation')->name('students.insertfinalevaluation');
     Route::post('/students/insertclasasesment/{id}','StudentController@insertclasasesment')->name('students.insertclasasesment');
     Route::get('/students/viewscore/{id}','StudentController@viewscore')->name('students.viewscore');
     Route::get('/students/updateclasasesment/{id}','StudentController@updateclasasesment')->name('students.updateclasasesment');
     Route::get('/students/updatefinalasesment/{id}','StudentController@updatefinalasesment')->name('students.updatefinalasesment');
     Route::get('/students/printscore/{id}','StudentController@printscore')->name('students.printscore');
     Route::get('/students/printclasasesment/{id}','StudentController@printclasasesment')->name('students.printclasasesment');
     Route::post('/students/insertupdateclasasesment/{id}','StudentController@insertupdateclasasesment')->name('students.insertupdateclasasesment');
     Route::post('/students/insertupdatefinalasesment/{id}','StudentController@insertupdatefinalasesment')->name('students.insertupdatefinalasesment');

    //certificate module url

     Route::get('/certificates/index','CertificateController@index')->name('certificates.index');
     Route::post('/certificates/create','CertificateController@create')->name('certificates.create');
     Route::get('/certificates/view/{student_id}','CertificateController@view')->name('certificates.view');
     Route::post('/certificates/update/{id}','CertificateController@update')->name('certificates.update');
     Route::get('/certificates/delete/{id}','CertificateController@delete')->name('certificates.delete');
     Route::get('/certificates/show','CertificateController@show')->name('certificates.show');

     //finance module
     Route::get('/finances/dashboard','FinanceController@dashboard')->name('finances.dashboard');
     Route::get('/finances/index','FinanceController@index')->name('finances.index');
     Route::get('/finances/show','FinanceController@show')->name('finances.show');
     Route::get('/finances/create','FinanceController@create')->name('finances.create');
     Route::get('/finances/view','FinanceController@view')->name('finances.view');
     Route::get('/finances/update','FinanceController@update')->name('finances.update');
     Route::get('/finances/delete','FinanceController@delete')->name('finances.delete');
     Route::get('/finances/debit/{id}','FinanceController@debit')->name('finances.debit');
     Route::post('/finances/insertdebit/{id}','FinanceController@insertdebit')->name('finances.insertdebit');
     Route::get('/finances/debitedstudent','FinanceController@debitedstudent')->name('finances.debitedstudent');
     Route::get('/finances/makepayment/{student_id}','FinanceController@makepayment')->name('finances.makepayment');
    // Route::get('/finances/insertcredit/{id}','FinanceController@makepayment')->name('finances.makepayment');
     Route::post('/finances/insertcredit/{id}','FinanceController@insertcredit')->name('finances.insertcredit');
     Route::get('/finances/feepaymenthistory/{student_id}','FinanceController@feepaymenthistory')->name('finances.feepaymenthistory');
     Route::get('/finances/printinvoice/{id}','FinanceController@printinvoice')->name('finances.printinvoice');
     //Route::get('/finances/invoice/{id}','FinanceController@insertinvoice')->name('finances.invoice');
     Route::post('/finances/insertinvoice/{id}','FinanceController@insertinvoice')->name('finances.insertinvoice');
     Route::get('/finances/pdf','FinanceController@pdf')->name('finances.pdf');
     Route::get('/finances/regsistrationfee','FinanceController@registrationfee')->name('finances.registrationfee');//registration fee payment;
     Route::get('/finances/searchstudent','FinanceController@searchstudent')->name('finances.searchstudent');//registration fee payment;
     Route::post('/finances/searchstudent/addregistrationpayment','FinanceController@addregistrationpayment')->name('finances.addregistrationpayment');//registration fee payment;
     
     
     
     //printing of receipt
     Route::get('/finances/printreceipt/{id}','FinanceController@printreceipt')->name('finances.printreceipt');
     
     //Route for projects
     Route::get('/projects/index','ProjectController@index')->name('projects.index');
     
     
     //studennt portal
      Route::get('/students/studentportal','StudentController@studentportal')->name('students.studentportal');
      
      
      //routes for interns
      Route::get('/interns/index','InternController@index')->name('interns.index');
      Route::post('/interns/create','InternController@create')->name('interns.create');
      Route::get('/interns/view/{id}','InternController@view')->name('interns.view');
      Route::post('/interns/update/{id}','InternController@update')->name('interns.update');
      Route::get('/interns/delete/{id}','InternController@delete')->name('interns.delete');
      Route::get('/interns/assesment','InternController@assesment')->name('interns.assesment');
      Route::get('/interns/projectassesment/{id}','InternController@projectassesment')->name('interns.projectassesment');
      Route::post('/interns/interprojectassesment','InternController@interprojectassesment')->name('interns.interprojectassesment');
      Route::get('/interns/score/{id}','InternController@score')->name('interns.score');
      Route::get('/interns/internviewscore','InternController@internviewscore')->name('interns.internviewscore');
      Route::post('/interns/updatetechnical/{id}','InternController@updatetechnical')->name('interns.updatetechnical');
      Route::get('/interns/printtechnical/{id}','InternController@printtechnical')->name('interns.printtechnical');
      Route::get('/interns/generalassesment/{id}','InternController@generalassesment')->name('interns.generalassesment');
      Route::post('/interns/insertgeneralassesment','InternController@insertgeneralassesment')->name('interns.insertgeneralassesment');
      Route::post('/interns/updategeneralassesment/{id}','InternController@updategeneralassesment')->name('interns.updategeneralassesment');
      Route::get('/interns/printgeneralassesment/{id}','InternController@printgeneralassesment')->name('interns.printgeneralassesment');
      
      
      //high school contacts
        Route::get('/highschoolcontacts/index','HighschoolController@index')->name('highschoolcontacts.index');
        Route::post('/highschoolcontacts/create','HighschoolController@create')->name('highschoolcontacts.create');
        Route::get('/highschoolcontacts/view/{id}','HighschoolController@view')->name('highschoolcontacts.view');
        Route::post('/highschoolcontacts/update/{id}','HighschoolController@update')->name('highschoolcontacts.update');
      
      
      ///reports
      
       Route::get('/reports/assesmentreport','ReportController@assesmentreport')->name('reports.assesmentreport');
       Route::get('/reports/generalperfomance','ReportController@generalperfomance')->name('reports.generalperfomance');
       Route::get('/reports/projectReport','ReportController@projectReport')->name('reports.projectReport');
       Route::get('/reports/feeReport','ReportController@feeReport')->name('reports.feeReport');
       
       //events
       Route::get('/events/index','EventController@index')->name('events.index');
       Route::get('/events/viewevent','EventController@viewevent')->name('events.viewevent');
       Route::post('/events/create','EventController@create')->name('events.create');
       Route::get('/events/view/{id}','EventController@view')->name('events.view');
       Route::post('/events/update','EventController@update')->name('events.update');
       Route::get('/events/delete/{id}','EventController@delete')->name('events.delete');
     
     
     //routes for university student
     Route::get('/universityStudents','UniversityStudentController@index')->name('universitystudents.index');
     Route::post('/universityStudents/create','UniversityStudentController@create')->name('universitystudents.create');
     
    Route::post('/universityStudents/update','UniversityStudentController@update')->name('universitystudents.update');
    Route::post('/universityStudents/delete','UniversityStudentController@delete')->name('universitystudents.delete');
    
    //route for zalego clases
    
    Route::get('/zalegoclases','ZalegoClasController@index')->name('zalegoclases.index');
    Route::post('/zalegoclases/create','ZalegoClasController@create')->name('zalegoclases.create');
    Route::post('/zalegoclases/update','ZalegoClasController@update')->name('zalegoclases.update');
    Route::post('/zalegoclases/delete','ZalegoClasController@delete')->name('zalegoclases.delete');
    
    //attachees routes
    Route::get('/attachees','AttacheeController@index')->name('attachees.index');
    Route::post('/attachees/create','AttacheeController@create')->name('attachees.create');
    Route::post('/attachees/update','AttacheeController@update')->name('attachees.update');
    Route::post('/attachees/delete','AttacheeController@delete')->name('attachees.delete');
    //assets routes
    
   
    //routes for adding student as users
    Route::get('/studentusers','StudentUserController@index')->name('studentusers.index');
    Route::post('/studentusers/create','StudentUserController@create')->name('studentusers.create');
    
    //student projects
     Route::get('/students/proposal','StudentProjectController@proposal')->name('studentprojects.proposal');
     Route::get('/students/finalproject','StudentProjectController@finalproject')->name('studentprojects.finalproject');
     Route::post('/students/proposal/create','StudentProjectController@proposalcreate')->name('studentprojects.proposalcreate');
     Route::post('/students/finalproject/create','StudentProjectController@finalprojectcreate')->name('studentprojects.finalprojectcreate');
     Route::post('/students/proposal/update','StudentProjectController@proposalupdate')->name('studentprojects.proposalupdate');
     Route::post('/students/finalproject/update','StudentProjectController@finalprojectupdate')->name('studentprojects.finalprojectupdate');
     
     //routes for student fianace portal
      Route::get('/students/financeReport','StudentFinanceController@index')->name('studentfinance.index');
      Route::get('/students/paymenthistory/{student_id}','StudentFinanceController@paymenthistory')->name('studentfinance.paymenthistory');
      
      Route::get('/assets','AssetsController@index')->name('assets.index');
      Route::get('/assets/add','AssetsController@add')->name('assets.add');
      Route::post('/assets/create','AssetsController@create')->name('assets.create');
      Route::post('/assets/update','AssetsController@update')->name('assets.update');
      Route::post('/assets/delete','AssetsController@delete')->name('assets.delete');
      Route::get('/assets/deployed','AssetsController@deployed')->name('assets.deployed');
      Route::get('/assets/notdeployed','AssetsController@notdeployed')->name('assets.notdeployed');
      Route::get('/assets/allasset','AssetsController@allasset')->name('assets.allasset');
      Route::get('/assets/maintainance','AssetsController@maintainance')->name('assets.maintainance');
      Route::post('/assets/deploy','AssetsController@deploy')->name('assets.deploy');
      Route::post('/assets/undeploy','AssetsController@undeploy')->name('assets.undeploy');
      
      //route for setting password
        Route::get('system-user/resetpassword','ResetPasswordController@index')->name('resetpasswords.index');
        Route::post('system-user/confirmemail','ResetPasswordController@confirmemail')->name('resetpasswords.confirmemail');
        Route::get('system-user/passwordresetform','ResetPasswordController@passwordresetform')->name('resetpasswords.passwordresetform');
        Route::get('system-user/insert-passwordupdate','ResetPasswordController@insertpasswordupdate')->name('resetpasswords.insertpasswordupdate');
      
    
});

