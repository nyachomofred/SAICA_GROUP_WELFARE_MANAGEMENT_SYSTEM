@extends('layouts.student')
@section('content')
     
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                       
                          
                        </ul>
                      </div>

                      <div class="clearfix"></div>

                     @foreach($all_student as $record)
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>{{$record->course}}</i></h4>
                            <div class="left col-xs-7">
                              <h2>{{$record->full_name}}</h2>
                              <p><strong>Campus: </strong> {{$record->campus}} </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> {{$record->physical_address}} </li>
                                <li><i class="fa fa-phone"></i>{{$record->phonenumber}}: </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{asset('img/user.png')}}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <a href="{{URL::to('/admin/students/view/'.$record->id)}}"  class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> View Profile
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                     @endforeach
                      
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
         

@endsection