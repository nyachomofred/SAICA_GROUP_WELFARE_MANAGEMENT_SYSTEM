
@extends('layouts.adminlte')
@section('content')
<?php
use App\Student;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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
              <li class="breadcrumb-item active">Certificate</li>
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
              <div class="card-header"> <h5>  <a href="{{route('certificates.index')}}"> <i class="fa fa-backward"></i></a> 
               &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp; Certificate Information For: {{$student->full_name}} [{{$student->student_id}}]</h5>
                   </div>
               <div class="card-body">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/certificates/update/'.$one_certificate->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label class="" for="first-name">Certificate Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="certificate_name" value="{{$one_certificate->certificate_name}}" id="first-name" required="required" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label  for="first-name">Certificate Number <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="certificate_number" value="{{$one_certificate->certificate_number}}" id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Student  <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">

                        <select id="heard" name="student_id" class="form-control" required >
                            <option value="{{$student->id}}">{{$student->full_name}}</option>
                          </select>

                        </div>
                      </div>

                      <div class="form-group">
                        <label  for="first-name">Date Collected  <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="collected_date" value="{{$one_certificate->collected_date}}"  id="first-name" required="required" class="form-control">
                        </div>
                      </div>

                     
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                           <a href="{{route('certificates.index')}}" class="btn btn-default">Discard</a>
                           <input type="submit" name="submit" value="Update" class="btn btn-success">
                        </div>
                      </div>

                    </form>
             
              <!-- /.card-header -->
             <div>
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