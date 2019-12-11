
@extends('layouts.adminlte')
@section('content')
<?php
use App\Student;
use App\Course;
use App\Certificate;
use App\Campus;
use App\User;

$marks=count(DB::table('marks')->get());
$classasesment=count(DB::table('clasasesments')->get());
$asesment=$marks+$classasesment;
$interns=count(DB::table('interns')->get());
$totalevents=count(DB::table('events')->get());
$finalprojects=count(DB::table('finalprojects')->get());
$proposals=count(DB::table('proposals')->get());
$users=count(DB::table('users')->where(['pno'=>1])->get());
?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
     @can('isSuper_admin')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}} {{Auth::user()->lastname}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:3%;height:3%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->role}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                          <div class="inner">
                                            <h3>{{$users}}</h3>
                            
                                            <p>System Users</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('user')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{Course::count()}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Registered Courses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-book"></i>
                                          </div>
                                          <a href="{{route('courses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{Campus::count()}}</h3>
                            
                                            <p>Campuses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('campuses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
          
                                     <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>{{Student::count()}}</h3>
                            
                                            <p>Registered Student</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('finances.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                          <div class="inner">
                                            @if(!empty($asesment))
                                            <h3>{{$asesment}}</h3>
                                            @else
                                             <h3>0</h3>
                                            @endif
                                            <p>Asest student</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('reports.assesmentreport')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                      
                                      <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{Certificate::count()}}</h3>
                            
                                            <p>Awarded Certificate</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('certificates.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                      <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{$interns}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Trainers</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-users"></i>
                                          </div>
                                          <a href="{{route('interns.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
          
          <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{$totalevents}}</h3>
                            
                                            <p>Events</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('events.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                      
                                      
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    <!-- Main content -->
    @can('isAdmin')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:5%;height:5%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                          <div class="inner">
                                            <h3>{{Student::count()}}</h3>
                            
                                            <p>Registered Student</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('students.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{Course::count()}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Registered Courses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-book"></i>
                                          </div>
                                          <a href="{{route('courses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{Campus::count()}}</h3>
                            
                                            <p>Campuses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('campuses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                      <!---->
                                      
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{$totalevents}}</h3>
                            
                                            <p>Events</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('events.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!---->
          
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>0</h3>
                            
                                            <p>Student Fees</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-chart-pie"></i>
                                          </div>
                                          <a href="{{route('finances.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    @can('isProject_manager')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:5%;height:5%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->role}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                          <div class="inner">
                                            <h3>{{$interns}}</h3>
                            
                                            <p>Registered Interns</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('interns.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{$proposals}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Submited Proposals</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-book"></i>
                                          </div>
                                          <a href="{{route('students.submitedproposal')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{$finalprojects}}</h3>
                            
                                            <p>Submited Final Projects</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('campuses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                     
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            
                            
                                            <p>Reports</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-chart-pie"></i>
                                          </div>
                                          <a href="{{route('reports.assesmentreport')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    <!-- /.content -->
    @can('isTrainer')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('img/zalego.png')}}" style="width:5%;height:5%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                  @if(!empty($intern))
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{$intern->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{$intern->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Phonenumber</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{$intern->phonenumber}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Area Of Study</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{$intern->area_of_study}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Place Of Intern</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{$intern->place_of_intern}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @else
                                  <p style="color:red">Could not find this project</p>
                                  @endif
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                          <div class="inner">
                                            <h3>67</h3>
                            
                                            <p>Assesment Score</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-shopping-cart"></i>
                                          </div>
                                          <a href="{{route('interns.internviewscore')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>0<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Notification</p>
                                          </div>
                                          <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                          </div>
                                          <a href="#" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{$totalevents}}</h3>
                            
                                            <p>Events</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('events.viewevent')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>0</h3>
                            
                                            <p>Student Asesment</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-user-plus"></i>
                                          </div>
                                          <a href="{{route('students.evaluation')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>0</h3>
                            
                                            <p>Time Table/Events</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-chart-pie"></i>
                                          </div>
                                          <a href="#" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    
     <!-- Main content -->
    @can('isFinance_officer')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:5%;height:5%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>N/A</h3>
                            
                                            <p>Student Fees</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-chart-pie"></i>
                                          </div>
                                          <a href="{{route('finances.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    @can('isIntern')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:3%;height:3%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->role}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                      
                                     
                                      
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{Course::count()}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Courses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-book"></i>
                                          </div>
                                          <a href="{{route('courses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{Campus::count()}}</h3>
                            
                                            <p>Campuses</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('campuses.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
          
                                       <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>{{Student::count()}}</h3>
                            
                                            <p>Student</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fas fa-users"></i>
                                          </div>
                                          <a href="{{route('students.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      
                                      
                                      <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>{{$interns}}<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Trainers</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-users"></i>
                                          </div>
                                          <a href="{{route('interns.index')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>{{$totalevents}}</h3>
                            
                                            <p>Events</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="{{route('events.viewevent')}}" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                      
          
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    
     @can('isStudent')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  @guest
                   Welcome
                  @else
                   Welcome: {{Auth::user()->name}}
                   <img src="{{asset('zalego/za.jpg')}}" style="width:3%;height:3%;float:right;" class="img-circle">
                  @endguest
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header">
                                <h3 class="card-title">Personal Information</h3>
                              </div>
                              <div class="card-body">
                                @guest
                                @else
                                  <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->username}}">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->role}}">
                                        </div>
                                      </div>
                                      
                                  </form>
                                  @endguest
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="card card-info">
                              <div class="card-header"><h3 class="card-title">Access Roles</h3></div>
                              <div class="card-body">
                                  <div class="row">
                                   
                                      <!-- ./col -->
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>0<sup style="font-size: 20px"></sup></h3>
                            
                                            <p>Proposal</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-users"></i>
                                          </div>
                                          <a href="#" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
          
                                      <div class="col-lg-6 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-warning">
                                          <div class="inner">
                                            <h3>0</h3>
                            
                                            <p>Final Projects</p>
                                          </div>
                                          <div class="icon">
                                            <i class="fa fa-home"></i>
                                          </div>
                                          <a href="#" class="small-box-footer">
                                            More info <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
            
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endcan
    
    
    @endsection