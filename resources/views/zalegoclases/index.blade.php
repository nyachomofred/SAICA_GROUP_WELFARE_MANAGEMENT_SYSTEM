
@extends('layouts.adminlte')
@section('content')
<?php
$zalegoclases=count(DB::table('zalegoclases')->get());
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

@if(!empty($data))
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Classes </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
   <!-- Main content -->
    @can('isSuper_admin')
     <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title">
                   {{$zalegoclases}} Classes
                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#add" style="float:right;"><i class="fa fa-user-plus"></i>
                  Add New class
                </button>
               </h3>
            </div>
           
            <!-- /.card-header -->
           
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                      <th>Name</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                <tbody>
                @foreach($data as $record)
                    <tr>
                      
                       <td>{{$record->name}}</td>
                       
                       
                       <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action On Class
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#update{{$record->id}}"><i class="fa fa-edit">Update Class</i></a>
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#delete{{$record->id}}"><i class="fa fa-trash">Delete Class</i></a>
                                  </div>
                              </div>
                           </td>
                    </tr>
                    
                    <!---->
                    <div class="modal fade" id="update{{$record->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Update Class</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.update')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group" style="display:none;">
                                     <label>id</label>
                                      <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name" value="{{$record->name}}">
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
                    
                    <!---->
                    <div class="modal fade" id="delete{{$record->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Are you sure you want to delete this record</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.delete')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group" style="display:none;">
                                     <label>id</label>
                                      <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name" value="{{$record->name}}">
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
               
               <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
                
                
                <!---->
                 <div class="modal fade" id="add">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Class</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.create')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name">
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
                <!---->
                
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
    @endcan
    <!-- /.content -->
    
    <!-- Main content -->
    @can('isIntern')
     <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title">
                   {{$zalegoclases}} Classes
                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#add" style="float:right;"><i class="fa fa-user-plus"></i>
                  Add New class
                </button>
               </h3>
            </div>
           
            <!-- /.card-header -->
           
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                      <th>Name</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                <tbody>
                @foreach($data as $record)
                    <tr>
                      
                       <td>{{$record->name}}</td>
                       <td>
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#update{{$record->id}}"><i class="fa fa-edit">Update</i></button>
                       </td>
                    </tr>
                    
                    <!---->
                    <div class="modal fade" id="update{{$record->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Update Class</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.update')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group" style="display:none;">
                                     <label>id</label>
                                      <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name" value="{{$record->name}}">
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
                    
                    <!---->
                    <div class="modal fade" id="delete{{$record->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Are you sure you want to delete this record</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.delete')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group" style="display:none;">
                                     <label>id</label>
                                      <input id="text" type="text" class="form-control" name="id" value="{{$record->id}}">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name" value="{{$record->name}}">
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
               
               <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
                
                
                <!---->
                 <div class="modal fade" id="add">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Class</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <form role="form"  method="POST" action="{{ route('zalegoclases.create')}}">
                            @csrf
                            <div class="modal-body">
                             
                                 <div class="form-group">
                                     <label>Name</label>
                                      <input id="text" type="text" class="form-control" name="name">
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
                <!---->
                
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
    @endcan
    <!-- /.content -->
@endif
@endsection