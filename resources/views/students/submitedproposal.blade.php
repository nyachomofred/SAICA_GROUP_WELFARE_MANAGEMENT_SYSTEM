@extends('layouts.adminlte')
@section('content')

        @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    {{ session('status') }}
                </div>
            @endif

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
              <li class="breadcrumb-item active">Student Project</li>
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
              <h5>Submited Proposal</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                          <th>Name</th>
                          <th>Admision Number</th>
                          <th>Project Name</th>
                          <th>Description</th>
                          <th>Documentation Link</th>
                          <th>Status</th>
                          <th>Comment</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
               
                   @foreach($project as $record)
                        <tr>
                         
                         <td>{{$record->name}}</td>
                         <td>{{$record->student_id}}</td>
                          <td>{{$record->project_name}}</td>
                          <td>{{$record->description}}</td>
                          <td><a href="http://www.zalegoacademy.com/studentmis/storage/app/{{$record->upload}}" target="_blank">Documetation Link</a></td>
                          <td>{{$record->status}}</td>
                          <td>{{$record->comment}}</td>
                        
                          
                           <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#update{{$record->id}}">Review Proposal</a>
                                </div>
                           </td>
                           
                           <!---->
                        
                        
                           <div class="modal fade" id="update{{$record->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Proposal</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{ route('studentprojects.proposalupdate')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group" style="display:none;">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Status</label>
                                              <select name="status" class="form-control">
                                                  <option value="{{$record->status}}">{{$record->status}}</option>
                                                   <option value="Approved">Approved</option>
                                                   <option value="Not Approved">Not Approved</option>
                                              </select>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Comment</label>
                                              <textarea name="comment" class="form-control">{{$record->comment}}</textarea>
                                          </div>
                                          
                                          
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                                  
                        <!---->
                        
                        
                        </tr>
                 @endforeach
                 
                </tbody>
              
               <tfooter>
                        <tr>
                          <th>Name</th>
                          <th>Admision Number</th>
                          <th>Project Name</th>
                          <th>Description</th>
                          <th>Upload</th>
                          <th>Status</th>
                          <th>Comment</th>
                         <th>Action</th>
                        </tr>
                    </tfooter>
                    
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
  </div>
  <!-- /.content-wrapper -->
@endsection