
@extends('layouts.adminlte')
@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Finance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if(!empty($all_student))
          <div class="card card-info" >
            <div class="card-header">
             Students
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           
                             <th>Student Id</th>
                             <th>Name</th>
                             <th>Phonenumber</th>
                             <th>Campus</th>
                             <th>Sponsor</th>
                             <th>Course Period</th>
                             <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
               
                     @foreach($all_student as $student_record)
                       <tr>
                       
                         <td>{{$student_record->student_id}}</td>
                         <td>{{$student_record->full_name}}</td>
                         <td>{{$student_record->phonenumber}}</td>
                         <td>{{$student_record->campus}}</td>
                         <td>{{$student_record->self_sponsered}}</td>
                         <td>{{$student_record->course_period}}</td>
                        
                         
                       
                       <td>
                           <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{URL::to('/admin/finances/debit/'.$student_record->id)}}"><i class="fa fa-eye"></i>Debit this student </a>
                                 

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
          @else
          <p style="color:red">No record</p>
          @endif
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection