@extends('layouts.layout')
@section('content');
 <!-- page content -->
 
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:600px;">
                  <div class="x_title">
                  <h2>  <a  href="{{route('courses.create')}}" class="btn btn-info btn-xs" ><i class="fa fa-plus"></i> Create </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Registered Courses</h2>
                  <ul class="nav navbar-right panel_toolbox">
                      
                        <li class="dropdown">
                          <a href="{{route('courses.index')}}" class="dropdown-toggle" ><i class="fa fa-share">Table view</i></a>
                        
                        </li>
                      
                      </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="row">

                      <div class="col-md-12">

                        <!-- price element -->
                        @foreach($all_course as $course)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="pricing">
                            <div class="title">
                              <h2>{{$course->name}}</h2>
                              <h1>Ksh:45,000</h1>
                              <span>{{$course->duration}}</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-check text-success"></i> <strong>Level:</strong>{{$course->level}}</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Description</strong>{{$course->description}}</li>
                                    
                                  </ul>
                                </div>
                              </div>
                              <div class="pricing_footer">
                                <a href="{{URL::to('/admin/courses/view/'.$course->id)}}" class="btn btn-success btn-block" >Profile</a>
                               
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        <!-- price element -->
                        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp 
                         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{$course->paginate(4)}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection