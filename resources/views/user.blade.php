
@extends('layouts.adminlte')
@section('content')
<?php
$users=count(DB::table('users')->where(['pno'=>1])->get());
?>

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

@if (session('deletestatus'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('deletestatus') }}
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
           @if(!empty($user))
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title">
                   {{$users}} Users
                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#add" style="float:right;"><i class="fa fa-user-plus"></i>
                  Add New User
                </button>
               </h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>username</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Action</th>
                         
                        </tr>
                      </thead>
                <tbody>
               
                       @foreach($user as $record)
                        <tr>
                          <td>{{$record->name}}</td>
                          <td>{{$record->lastname}}</td>
                          <td>{{$record->username}}</td>
                          <td>{{$record->email}}</td>
                          <td>{{$record->role}}</td>
                           
            
                          
                           
                           <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action On Users
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#update{{$record->id}}"><i class="fa fa-edit">Update User</i></a>
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#delete{{$record->id}}"><i class="fa fa-trash">Delete User</i></a>
                                  </div>
                              </div>


                           </td>
                        </tr>
                        
                        <!---->
                        
                        
                           <div class="modal fade" id="update{{$record->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update User</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{ route('insertupdateuser')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group" style="display:none;">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Firstname</label>
                                              <input id="text" type="text" class="form-control" name="name" value="{{$record->name}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Lastname</label>
                                              <input id="text" type="text" class="form-control" name="lastname" value="{{$record->lastname}}">
                                          </div> 
                                          
                                         <div class="form-group">
                                             <label>Username</label>
                                              <input id="text" type="text" class="form-control" name="username" value="{{$record->username}}">
                                          </div>
                                          
                                          <div class="form-group">
                                             <label>Email Address</label>
                                               <input id="email" type="text" class="form-control" name="email" value="{{$record->email}}">
                                          </div>
                                          
                                         
                                          
                                          <div class="form-group">
                                            <label>Role <span class="required">*</span>
                                            </label>
                                              <select id="heard" name="role" class="form-control" required>
                                                <option value="{{$record->role}}">{{$record->role}}</option>
                                                <option value="Super Admin">Super Admin</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Finance Officer">Finance Officer</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Trainer">Trainer</option>
                                                <option value="Intern">Intern</option>
                                              </select>
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
                        
                        
                         <div class="modal fade" id="delete{{$record->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Are you sure you want to delete this record ?. This action will not be reversed.</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{ route('deleteeuser')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group" style="display:none;">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                          </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                            
                        <!---->
                        
                        @endforeach
                        
                </tbody>
               
               
                    <div class="modal fade" id="add">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New User</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('insertuser')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group">
                                     <label>Firstname</label>
                                      <input id="text" type="text" class="form-control" name="name">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Lastname</label>
                                      <input id="text" type="text" class="form-control" name="lastname" required>
                                  </div>
                                  
                                 
                                  
                                  <div class="form-group">
                                     <label>Email Address</label>
                                       <input id="email" type="text" class="form-control" name="email" required>
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Username</label>
                                      <input id="text" type="text" class="form-control" name="username" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>Password </label>
                                      <input type="text" name="password" id="first-name" required="required" class="form-control" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>Confirm Password </label>
                                      <input type="text" name="password_confirmation" id="first-name" required="required" class="form-control" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>Role <span class="required">*</span>
                                    </label>
                                      <select id="heard" name="role" class="form-control" required>
                                        <option value="">Choose..role</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Finance Officer">Finance Officer</option>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="Intern">Intern</option>
                                      </select>
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
          @else
          <p style="color:red" >There is registered user</p>
          @endif
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection