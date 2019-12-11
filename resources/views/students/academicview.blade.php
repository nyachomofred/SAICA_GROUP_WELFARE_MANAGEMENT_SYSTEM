
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Academic Information</li>
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
               
              <h5><a href="{{url('/admin/students/view/'.$one_academicinfo->id)}}"><i class="fa fa-backward"></i></a> &nbsp;&nbsp;&nbsp; Academic Information</h5>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/academicupdate/'.$one_academicinfo->id)}}">
                        {{ csrf_field() }}
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name Of School <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="school_name"  value="{{$one_academicinfo->school_name}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type Of School <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="type_of_school"  value="{{$one_academicinfo->type_of_school}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">School Address <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="school_address"  value="{{$one_academicinfo->school_address}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location Of School <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="location"  value="{{$one_academicinfo->location}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Year Of Completion <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="year_of_completion"  value="{{$one_academicinfo->year_of_completion}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Currently Enrolled In School <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="enrolled_in_school"  value="{{$one_academicinfo->enrolled_in_school}}">
                        </div>
                      </div> 



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <a href="{{route('students.index')}}" class="btn btn-primary">Cancel</a>
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