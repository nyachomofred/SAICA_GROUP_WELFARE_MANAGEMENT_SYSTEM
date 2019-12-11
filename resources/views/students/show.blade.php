<?php
use App\Student;
use App\Course;
?>
@extends('layouts.layout')
@section('content')
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{route('students.index')}}" class="btn btn-success btn-sm">Admission Process</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel tile fixed_height_320">
                                    <div class="x_title">
                                        <h2>Admission Details</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up">More</i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <a href="{{route('students.index')}}" class="btn btn-app"> <span class="badge bg-green">{{Student::count()}}</span> <i class="fa fa-users"></i> All Admission</a>
                                          </div>
                                          <div class="col-sm-6">
                                          <a href="{{route('students.index')}}" class="btn btn-app" style="height:70px;"> <span class="badge bg-green">{{Student::count()}}</span> <i class="fa fa-users"></i> Admision In <br>Current Acd. Year</a>
                                          </div>
                                      </div>
                                      <div class="row" style="height:20px;"></div>
                                      <div class="row">
                                          <div class="col-sm-6"></div>
                                          <div class="col-sm-6">
                                             <a class="btn btn-app" style="height:70px;"> <span class="badge bg-green">211</span> <i class="fa fa-users"></i>Laikipia Campus</a>
                                          </div>
                                      </div>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel tile fixed_height_320">
                                    <div class="x_title">
                                        <h2>Admission In <br>Current Acc. Year</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up">More</i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="{{route('students.westlandstudent')}}" class="btn btn-app"> <span class="badge bg-green">{{Student::where('campus','Westland Campus')->count()}}</span> <i class="fa fa-users"></i> Westlands Campus</a>
                                            </div>
                                            <div class="col-sm-6">
                                            <a href="{{route('students.jkuatstudent')}}" class="btn btn-app"> <span class="badge bg-green">{{Student::where('campus','Jkuat Juja Campus')->count()}}</span> <i class="fa fa-users"></i> Jkuat Campus</a>
                                            </div>
                                        </div>
                                      <div class="row" style="height:20px;"></div>
                                      <div class="row">
                                          <div class="col-sm-6"></div>
                                          <div class="col-sm-6">
                                          <a href="{{route('students.laikipiastudent')}}" class="btn btn-app" style="height:70px;"> <span class="badge bg-green">{{Student::where('campus','Laikipia Campus')->count()}}</span> <i class="fa fa-users"></i> Laikipia Campus</a>
                                              
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel tile fixed_height_320">
                                    <div class="x_title">
                                        <h2>Admission Details</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up">More</i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <div class="row"></div>
                                      <div class="row">
                                          <div class="col-sm-6"> <a href="{{route('students.malestudent')}}" class="btn btn-app"> <span class="badge bg-green">{{Student::where('gender_gender','Male')->count()}}</span> <i class="fa fa-users"></i> Male</a></div>
                                          <div class="col-sm-6">
                                              <a href="{{route('students.femalestudent')}}" class="btn btn-app"> <span class="badge bg-green">{{Student::where('gender_gender','Female')->count()}}</span> <i class="fa fa-users"></i> Female</a>
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
@endsection