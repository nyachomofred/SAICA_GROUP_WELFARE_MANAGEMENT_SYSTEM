
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
              <li class="breadcrumb-item active">Collage Information</li>
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
               
              <h5> <a href="{{url('/admin/students/view/'.$one_collage->id)}}"><i class="fa fa-backward"></i></a> &nbsp;&nbsp;&nbsp;Collage/University</h5>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/collageupdate/'.$one_collage->id)}}">
                        {{ csrf_field() }}
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">School Attended<span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="school_attended"  value="{{$one_collage->school_attended}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course Studied<span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="course_studied"  value="{{$one_collage->course_studied}}">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Attended<span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="date_attended"  value="{{$one_collage->date_attended}}">
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