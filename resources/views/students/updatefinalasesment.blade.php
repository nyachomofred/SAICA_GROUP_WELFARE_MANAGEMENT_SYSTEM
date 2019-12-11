
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
              <li class="breadcrumb-item active"> Student Assesment</li>
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
            <div class="card card-primary">
              <div class="card-header">
               
             <h3> <a href="{{URL::to('admin/students/viewscore/'.$students->student_table_id)}}"> <i class="fa fa-backward"></i></a>  
                   &nbsp Final Assesment Form For : {{$students->name}} [{{$students->admision_no}}]</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/insertupdatefinalasesment/'.$students->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label  for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="name" value="{{$students->name}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="gender" value="{{$students->gender}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                     <div class="form-group">
                        <label  for="first-name">Admision Number <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="admision_no" value="{{$students->admision_no}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Class <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="class" id="first-name" value="{{$students->class}}" required="required" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Course <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="course" id="first-name" value="{{$students->course}}" required="required" class="form-control" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="first-name">Campus <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="campus" value="{{$students->campus}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      
                       <div class="form-group">
                        <label  for="first-name">Final Project <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="final_project" value="{{$students->final_project}}"  id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  for="first-name">Class Assesment(practical) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="class_assesment_practical" required>
                            <option value="{{$students->class_assesment_practical}}">{{$students->class_assesment_practical}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                      </div>
                      
                     <div class="form-group">
                        <label  for="first-name">Class Assesment(thoery) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                         <select class="form-control" name="class_assesment_theory" required>
                            <option value="{{$students->class_assesment_theory}}">{{$students->class_assesment_theory}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label  for="first-name">Assignment(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="assignment" required>
                            <option value="{{$students->assignment}}">{{$students->assignment}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Attendance(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="attendance">
                            <option value="{{$students->attendance}}">{{$students->attendance}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Discipline(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="discipline">
                            <option value="{{$students->discipline}}">{{$students->discipline}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">In class Participation <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="in_class_participation">
                            <option value="{{$students->in_class_participation}}">{{$students->in_class_participation}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label  for="first-name"> Tutor Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="tutor_name"  id="first-name" value="{{$students->tutor_name}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <a href="{{route('students.evaluation')}}" class="btn btn-default">Discard</a>
                           <input type="submit" name="submit" value="Submit" class="btn btn-success">
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