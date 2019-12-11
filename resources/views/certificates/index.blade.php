
@extends('layouts.adminlte')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('status') }}
    </div>
@endif

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Certificates</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificates</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if(!empty($record))
          <div class="card card-info">
            <div class="card-header">
               <a  href="{{route('certificates.show')}}" class="btn btn-info btn-sm" style="float:right" ><i class="fa fa-plus"></i> Create New Certificate </a>          
                 &nbsp &nbsp &nbsp &nbsp &nbsp
                 </h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           
                            <th>Name</th>
                            <th>Name of Certificate</th>
                            <th>Certificate Number</th>
                            <th>Name of the Course</th>
                            <th>Date Collected</th>
                            <th>Action</th>
                           
                        </tr>
                      </thead>
                <tbody>
               
                         @foreach($record as $records)
                         <tr>
                          <td>{{$records->full_name}}</td>
                          <td>{{$records->certificate_name}}</td>
                          <td>{{$records->certificate_number}}</td>
                          <td>{{$records->course_name}}</td>
                          <td>{{$records->collected_date}}</td>
                            <td>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{URL::to('/admin/certificates/view/'.$records->student_id)}}"><i class="fa fa-edit"></i>Update </a>
                                      <a class="dropdown-item" href="{{URL::to('/admin/certificates/delete/'.$records->id)}}"><i class="fa fa-trash"></i>Delete </a>
    
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
          <p style="color:red">There is no record </p>
          @endif
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection