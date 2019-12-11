
@extends('layouts.adminlte')
@section('content')

@if (session('addstatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('addstatus') }}
    </div>
@endif

@if (session('updatestatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('updatestatus') }}
    </div>
@endif

@if (session('failedstatus'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('failedstatus') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
           
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title">
                   Proposal Submited
                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#add" style="float:right;"><i class="fa fa-user-plus"></i>
                 Submite New Proposal
                </button>
               </h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                          <th>Student Id</th>
                          <th>Name</th>
                          <th>Campus</th>
                          <th>Project Name</th>
                          <th>Description</th>
                          <th>Document Link</th>
                          <th>Date Submited</th>
                          <th>Status</th>
                          <th>Comment</th>
                        </tr>
                      </thead>
                <tbody>
                    @if(!empty($data))
                    <tr>
                        <td>{{$data->student_id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->campus}}</td>
                        <td>{{$data->project_name}}</td>
                        <td>{{$data->description}}</td>
                         <td><a href="http://www.zalegoacademy.com/studentmis/storage/app/{{$data->upload}}" target="_blank">Document Link</a></td>
                        <td>{{$data->date_submited}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->comment}}</td>
                    </tr>
                   @endif   
                        
                </tbody>
               
               
                    <div class="modal fade" id="add">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Proposal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('studentprojects.proposalcreate')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                             
                                <div class="form-group">
                                     <label>Student Id</label>
                                     <input id="text" type="text" class="form-control" name="student_id" value="{{$student->student_id}}" readonly=true>
                                </div>
                                
                                 <div class="form-group">
                                     <label>Name</label>
                                     <input id="text" type="text" class="form-control" name="name" value="{{$student->full_name}}" readonly=true>
                                </div>
                                 <div class="form-group">
                                     <label>Campus</label>
                                     <input id="text" type="text" class="form-control" name="campus" value="{{$student->campus}}" readonly=true>
                                </div>
                                
                                 <div class="form-group">
                                     <label>Project Name</label>
                                     <input id="text" type="text" class="form-control" name="project_name">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Description</label>
                                     <textarea name="description" class="form-control"></textarea>
                                  </div>
                                  
                                 <div class="form-group">
                                     <label>Upload File</label>
                                      <input id="text" type="file" class="form-control" name="upload">
                                  </div>
                                  
                      
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>
                          
                          
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