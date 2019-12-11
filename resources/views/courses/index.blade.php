
@extends('layouts.adminlte')
@section('content')
<?php
$courses=count(DB::table('courses')->get());
?>

@if (session('addstatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('addstatus') }}
    </div>
@endif

@if (session('updatestatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('updatestatus') }}
    </div>
@endif

@if (session('deletestatus'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('deletestatus') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Courses </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if(!empty($all_course))
          <div class="card card-info">
            <div class="card-header">
             
                <h2 class="card-title">  {{$courses}} Courses 
                 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#add" style="float:right;"><i class="fa fa-plus"></i>Add New Course </button>
                </h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Duration</th>
                            <th>Action</th>
                           
                        </tr>
                      </thead>
                <tbody>
               
                      @foreach($all_course as $key=>$course)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->level}}</td>
                            <td>{{$course->duration}}</td>
                           
                            
                            <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action On Course
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#update{{$course->id}}"><i class="fa fa-edit">Update Course</i></a>
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#delete{{$course->id}}"><i class="fa fa-trash">Delete Course</i></a>
                                  </div>
                               </div>
                           </td>
                        </tr>
                        
                         <div class="modal fade" id="update{{$course->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Course</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{route('courses.updatecourse')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group"style="display:none;">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="id" value="{{$course->id}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Name</label>
                                              <input id="text" type="text" class="form-control" name="name" value="{{$course->name}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Level</label>
                                              <select id="heard" name="level" class="form-control" required>
                                                <option value="{{$course->level}}">{{$course->level}}</option>
                                                <option value="Basic Level">Basic Level</option>
                                                <option value="Basi Level">Standard Level</option>
                                                <option value="Advanced Level">Advanced Level</option>
                                              </select>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Level</label>
                                             
                                              <select id="heard" name="duration" class="form-control " required>
                                                <option value="{{$course->duration}}">{{$course->duration}}</option>
                                                <option value="One Month">One Month</option>
                                                <option value="Two Months">Two Months</option>
                                                <option value="Three Months">Three Months</option>
                                                <option value="Four Months">Four Months</option>
                                                <option value="Five Months">Five Months</option>
                                                <option value="Six Months">Six Months</option>
                                              </select>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Description</label>
                                             <textarea name="description" class="form-control"> {{$course->description}}</textarea>
                                                 
                                          </div>
                                          
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                         <div class="modal fade" id="delete{{$course->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Are You sure you want to delete this record</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{route('courses.deletecourse')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group" style="display:none;">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="id" value="{{$course->id}}">
                                          </div>
                                          
                                          
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                            
                      @endforeach
                        
                </tbody>
               
               
               <!---->
               
                 <div class="modal fade" id="add">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Course</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('courses.create')}}">
                            @csrf
                            <div class="modal-body">
                             
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <input type="text" name="name" id="first-name" required="required" class="form-control">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Level <span class="required">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                 
                                  <select id="heard" name="level" class="form-control" required>
                                    <option value="">Choose..</option>
                                    <option value="Basic Level">Basic Level</option>
                                    <option value="Basi Level">Standard Level</option>
                                    <option value="Advanced Level">Advanced Level</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label ">Duration<span class="required">*</span></label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <select id="heard" name="duration" class="form-control " required>
                                    <option value="">Choose..</option>
                                    <option value="One Month">One Month</option>
                                    <option value="Two Months">Two Months</option>
                                    <option value="Three Months">Three Months</option>
                                    <option value="Four Months">Four Months</option>
                                    <option value="Five Months">Five Months</option>
                                    <option value="Six Months">Six Months</option>
                                  </select>
        
                                </div>
                              </div>
                      
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <textarea id="message" required="required" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10" maxlength="70"></textarea>
                                </div>
                              </div>
                                     
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                          </div>
                      </form>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
               <!---->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          @else
          <p style="color:red">There is no courses</p>
          @endif
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection