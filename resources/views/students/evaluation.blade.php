
@extends('layouts.adminlte')

@section('content')
            @if (session('status'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    {{ session('status') }}
                </div>
            @endif
            
             @if (session('clas'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    {{ session('clas') }}
                </div>
            @endif
<!-- Main content -->
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Evaluation </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Evaluation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
               <h5>Student Evaluation</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                             <th>Student Id</th>
                              <th>Name</th>
                              <th>Campus</th>
                              <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
               
                         @foreach($students as $student)
                        <tr>
                          <td>{{$student->student_id}}</td>
                          <td>{{$student->full_name}}</td>
                          <td>{{$student->campus}}</td>
                         
                            <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{URL::to('/admin/students/classassesment/'.$student->id)}}"><i class="fa fa-edit"></i>Project Assesment </a>
                                      <a class="dropdown-item" href="{{URL::to('/admin/students/addscore/'.$student->id)}}"><i class="fa fa-edit"></i>Final Assesment </a>
                                      <a class="dropdown-item" href="{{URL::to('/admin/students/viewscore/'.$student->id)}}"><i class="fa fa-edit"></i>View Scores </a>
        
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection