
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-1"> </div>
      
          <!-- right column -->
          <div class="col-md-10">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
               
                <h2 class="card-title"> <a href="{{route('courses.index')}}"><i class="fa fa-backward"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></a> Edit Course :[{{$v_one->name}}]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/courses/update/'.$v_one->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="name" id="first-name" required="required" class="form-control " value="{{$v_one->name}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Level <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select id="heard" name="level" class="form-control" required>
                            <option value="{{$v_one->level}}">{{$v_one->level}}</option>
                            <option value="Basic Level">Basic Level</option>
                            <option value="Basi Level">Standard Level</option>
                            <option value="Advanced Level">Advanced Level</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-12 col-sm-12 col-xs-12">Duration<span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <select id="heard" name="duration" class="form-control " required>
                            <option value="{{$v_one->duration}}">{{$v_one->duration}}</option>
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
                          <textarea id="message" required="required" class="form-control" name="description">{{$v_one->description}} </textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a href="{{route('courses.index')}}" class="btn btn-default">Cancel</a>
                           <input type="submit" name="submit" value="Update" class="btn btn-success">
                        </div>
                      </div>

                    </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
           <div class="col-md-1"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection