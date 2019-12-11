@extends('layouts.adminlte')

@section('content')

@if (session('update'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('update') }}
    </div>
@endif

             <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
           <div class="card card-primary">
               <div class="card-header">
                   <h2> <a href="{{route('students.evaluation')}}"> <i class="fa fa-backward"></i></a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Scores for : {{$stude->full_name}} [{{$stude->student_id}}]</h2>
               </div>
               <div class="card-body">
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card card-success">
                          <div class="card-header">
                            <h3 class="card-title">Class assesment</h3>
            
                           
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                    
                                                  
                                  <th>User Interface Design</th>
                                   <th>Database and tables design</th>
                                  <th>Functionality and code implementation</th>
                                  <th>Successfully insert  and retrieve data from the dataase</th>
                                  <th>Initiative and self motivation</th>
                                  <th>Data validation</th>
                                  <th>Project Originality</th>
                                  <th>Total</th>
                                  <th>Action</th>
                                                   
                                  
                                </tr>
                              </thead>
                              
                              <tbody>
                                @foreach($clasasesment as $record)
                                    <tr>
                                      <td>{{$record->design}}</td>
                                      <td>{{$record->database_design}}</td>
                                      <td>{{$record->asesment_type}}</td>
                                      <td>{{$record->data_insert}}</td>
                                      <td>{{$record->theory}}</td>
                                      <td>{{$record->data_validation}}</td>
                                      <td>{{$record->data_retrieve}}</td>
                                      <td>{{$record->total}}</td>
                            
        
                                     <td>
                                       <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                          <div class="dropdown-menu">
                                              <a class="dropdown-item" href="{{URL::to('/admin/students/updateclasasesment/'.$record->id)}}"><i class="fa fa-edit"></i>Update </a>
                                              <a class="dropdown-item" href="{{URL::to('/admin/students/printclasasesment/'.$record->id)}}"><i class="fa fa-edit"></i>Print Report </a>
            
                
                                          </div>
                                       </div>
                                    </td>
                            
                            
                                    </tr>
                                @endforeach
                             </tbody>
                              
                              
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card card-success">
                          <div class="card-header">
                            <h3 class="card-title">Final Assesment</h3>
            
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed table-bordered">
                              <thead>
                                <tr>
                                    
                                  <th>Final Project</th>
                                  <th>Class Assesment Practical</th>
                                  <th>Class Assesment Theory</th>
                                  <th>Assigment</th>
                                  <th>Attendance</th>
                                  <th>Discipline</th>
                                  <th>In Class Participation</th>
                                  <th>Action</th>
                                 
                                </tr>
                                
                              </thead>
                                  <tbody>
                                     @foreach($students as $student)
                                        <tr>
                                           <td>{{$student->final_project}}</td>
                                           <td>{{$student->class_assesment_practical}}</td>
                                           <td>{{$student->class_assesment_theory}}</td>
                                           <td>{{$student->assignment}}</td>
                                           <td>{{$student->attendance}}</td>
                                           <td>{{$student->discipline}}</td>
                                           <td>{{$student->in_class_participation}}</td>
                                        
                                        <td>
                                           <div class="btn-group">
                                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="{{URL::to('/admin/students/updatefinalasesment/'.$student->id)}}"><i class="fa fa-edit"></i>Update </a>
                                                  <a class="dropdown-item" href="{{URL::to('/admin/students/printscore/'.$student->id)}}"><i class="fa fa-edit"></i>Print Report </a>
                
                    
                                              </div>
                                           </div>
                                        </td>
                                    
                                        
                                        </tr>
                                        @endforeach
                                  </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->
                </div>
          </div><!-- /.container-fluid -->
      </div>
    </section>
    <!-- /.content -->
            

@endsection