
@extends('layouts.layout')
@section('content')
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
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
                                        <h2>Students Finance</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up">More</i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="" class="btn btn-app" style=""> <span class="badge bg-green">3456</span> <i class="fa fa-users"></i> All Student</a>
                                            </div>
                                            <div class="col-sm-6">
                                            <a href="{{route('finances.index')}}" class="btn btn-app" style=""> <span class="badge bg-green"></span> <i class="fa fa-users"></i> Debited Student</a>
                                            </div>
                                        </div>
                                      <div class="row" style="height:20px;"></div>
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <a href="" class="btn btn-app" style=""> <span class="badge bg-green"></span> <i class="fa fa-users"></i> Debited Student</a>
                                          </div>
                                          <div class="col-sm-6">
                                          <a href="" class="btn btn-app" style=""> <span class="badge bg-green"></span> <i class="fa fa-users"></i> Total Amount Debited</a>

                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-12">
                               
                            </div>


                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection