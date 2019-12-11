
@extends('layouts.adminlte')
@section('content')




@if (session('student'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session('student') }}
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
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
             
               <h2 class="card-title"><a  href="{{route('students.create')}}" class="btn btn-info btn-xs"  style="float:right;"><i class="fa fa-plus"></i> Add New Student </a> 
               </h2> 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                             <th>#</th>
                             <th>Student Id</th>
                             <th>Name</th>
                             <th>Campus</th>
                             <th>Course Period</th>
                             <th>Sponsor</th>
                             <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
                       @foreach($all_student as $key=>$student_record)
                       <tr>
                         <td>{{++$key}}</td>
                         <td>{{$student_record->student_id}}</td>
                         <td>{{$student_record->full_name}}</td>
                         <td>{{$student_record->campus}}</td>
                         <td>{{$student_record->course_period}}</td>
                         <td>{{$student_record->self_sponsered}}</td>
            
                         
                         <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{URL::to('/admin/students/view/'.$student_record->id)}}"><i class="fa fa-eye">View User</i></a>
        
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