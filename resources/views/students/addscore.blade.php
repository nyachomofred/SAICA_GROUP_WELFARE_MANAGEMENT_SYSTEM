
@extends('layouts.adminlte')
@section('content')

   @if (session('failedmark'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            {{ session('failedmark') }}
        </div>
    @endif
    <?php
       //use DB;
       $total=DB::table('clasasesments')->where(['student_table_id'=>$students->id])->first();
       if(!empty($total)){
           $marks=$total->total;
           
       }else{
           $marks=0;
       }
       
    ?>
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
              <li class="breadcrumb-item active">Project Evaluation</li>
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
            <div class="card card-info">
              <div class="card-header">
               
              <h6> <a href="{{route('students.evaluation')}}"> <i class="fa fa-backward"></i></a>   &nbsp Assesment Form For : {{$students->full_name}}</h6>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/insertfinalevaluation/'.$students->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label  for="first-name">Name <span class="required">*</span>
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
                        <label  for="first-name">Intake <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="intake" value="{{$students->intake}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                     <div class="form-group">
                        <label  for="first-name">Admision Number <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="admision_no" value="{{$students->student_id}}" id="first-name" required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="first-name">Class <span class="required">*</span>
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
                        <label  for="first-name">Final Project <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" name="final_project" id="first-name" value={{$marks}}  required="required" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  for="first-name">Class Assesment(practical) <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="class_assesment_practical" required>
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
                        <label  for="first-name">Class Assesment(thoery) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                         <select class="form-control" name="class_assesment_theory" required>
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
                        <label  for="first-name">Assignment(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="assignment" required>
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
                        <label  for="first-name">Attendance(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="attendance" required>
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
                        <label  for="first-name">Discipline(5mks) <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="discipline" required>
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
                        <label  for="first-name">In class Participation <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                         
                          <select class="form-control" name="in_class_participation" required>
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
                        <label  for="first-name">Comment <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea name="comment"></textarea>
                        </div>
                      </div>
                      
                      
                       <div class="form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tutor Name <span class="required">*</span>
                        
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
           <div class="col-md-0"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection