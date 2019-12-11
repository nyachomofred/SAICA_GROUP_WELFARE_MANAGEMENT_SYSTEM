
@extends('layouts.adminlte')
@section('content')

             @if (session('failed'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    {{ session('failed') }}
                </div>
            @endif
            
             @if (session('asestonce'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    {{ session('asestonce') }}
                </div>
            @endif
           
           

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
              <li class="breadcrumb-item active"> Class Assesment</li>
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
          <div class="col-md-0"> </div>
      
          <!-- right column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
               
             <h3> <a href="{{URL::to('admin/students/viewscore/'.$students->student_table_id)}}"> <i class="fa fa-backward"></i></a>  &nbsp;
                    Class Assesment Form For : {{$students->name}} [{{$students->admision_number}}]</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/insertupdateclasasesment/'.$students->id)}}">
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
                          <input type="text" name="admision_number" value="{{$students->admision_number}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Class <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="class" id="first-name"  value="{{$students->class}}"required="required" class="form-control">
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
                        <label  for="first-name">Campus <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="campus" value="{{$students->campus}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Project Title <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="project_title"  value="{{$students->project_title}}" id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label  for="first-name">User Interface Design <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="design" required>
                           <option value="{{$students->project_title}}">{{$students->design}}</option>
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
                        <label  for="first-name">Database and Tables Design <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="database_design" required>
                          <option value="{{$students->database_design}}">{{$students->database_design}}</option>
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
                        <label  for="first-name">Functionality and Code Implementation <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="asesment_type" required>
                            <option value="{{$students->asesment_type}}">{{$students->asesment_type}}</option>
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
                        <label  for="first-name">Successfully sens and retrieve data from the database <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="data_insert" required>
                            <option value="{{$students->data_insert}}">{{$students->data_insert}}</option>
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
                        <label  for="first-name">Initiative and self Motivation <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="theory" required>
                            <option value="{{$students->theory}}">{{$students->theory}}</option>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Data Validation  done<span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                         <select class="form-control" name="data_validation" required>
                           <option value="{{$students->data_validation}}">{{$students->data_validation}}</option>
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
                        <label  for="first-name">Project Originality <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="data_retrieve" required>
                            <option value="{{$students->data_retrieve}}">{{$students->data_retrieve}}</option>
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
                        <label  for="first-name">Additional Comments <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <textarea name="comment" required>{{$students->comment}}</textarea>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tutor Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="tutor_name" value="{{$students->tutor_name}}" id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
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
           <div class="col-md-0"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection