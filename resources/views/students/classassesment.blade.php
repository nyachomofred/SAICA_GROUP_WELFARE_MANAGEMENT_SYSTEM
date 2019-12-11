
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
          <div class="col-md-1"> </div>
      
          <!-- right column -->
          <div class="col-md-10">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
               
              <h6> <a href="{{route('students.evaluation')}}"> <i class="fa fa-backward"></i></a>   &nbsp Project Evaluation Form For : {{$students->full_name}}</h6>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/insertclasasesment/'.$students->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="name" value="{{$students->full_name}}" id="first-name" required="required" class="form-control" readonly="readonly">
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
                          <input type="text" name="admision_number" value="{{$students->student_id}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Intake <span class="required">*</span>
                        </label>
                       <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="intake" value="{{$students->intake}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label  for="first-name">Class <span class="required">*</span>
                        </label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="class" id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label  for="first-name">Course <span class="required">*</span>
                        </label>
                       <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="course" id="first-name" required="required" class="form-control" >
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
                          <input type="text" name="project_title"  id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label  for="first-name">User Interface Design <span class="required">*</span>
                        </label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="design" required>
                           <option value="">Choose Marks</option>
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
                          <option value="">Choose Marks</option>
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
                            <option value="">Choose Marks</option>
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
                            <option value="">Choose Marks</option>
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
                            <option value="">Choose Marks</option>
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
                        <label  for="first-name">Data Validation  done<span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                         <select class="form-control" name="data_validation" required>
                           <option value="">Choose Marks</option>
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
                        <div class="col-md-12col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="data_retrieve" required>
                            <option value="">Choose Marks</option>
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
                         
                          <textarea name="comment"></textarea>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label  for="first-name"> Tutor Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          @guest
                          <input type="text" name="tutor_name"  id="first-name"  class="form-control">
                          @else
                          <input type="text" name="tutor_name"  id="first-name" required="required" class="form-control" value="{{Auth::user()->name}}" readonly=true>
                          @endguest
                          
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
           <div class="col-md-1"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection