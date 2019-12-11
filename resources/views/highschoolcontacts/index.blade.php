
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
            <h1>School Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">School Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        @if(!empty($data))
        <div class="col-12">
        
          <div class="card card-info">
            <div class="card-header">
               <button   class="btn btn-info btn-sm" data-toggle="modal" data-target="#addcontact" style="floate:right;"><i class="fa fa-plus"></i> Add New Contact </button>          
                 
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       
                        <th>School Name</th>
                        <th>Postal Address</th>
                        <th>Postal Code</th>
                        <th>County</th>
                        <th>Town</th>
                        <th>Teacher Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Action</th>
                       
                    </tr>
                  </thead>
                <tbody>
               
                        @foreach($data as $record) 
                         <tr>
                            <td>{{$record->school_name}}</td>
                            <td>{{$record->postal_address}}</td>
                            <td>{{$record->postal_code}}</td>
                            <td>{{$record->county}}</td>
                            <td>{{$record->town}}</td>
                            <td>{{$record->teacher_name}}</td>
                            <td>{{$record->phone_number}}</td>
                            <td>{{$record->email_address}}</td>
                            
                            <td>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{url('admin/highschoolcontacts/view/'.$record->id)}}"><i class="fa fa-eye"></i>Update </a>
                                      
                                  </div>
                               </div>
                            </td>
                         </tr>
                      @endforeach
                        
                </tbody>
               
              </table>
              
              
                          
                  <div class="modal fade" id="addcontact">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add Contact</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" action="{{ url('/admin/highschoolcontacts/create')}}">
                            <div class="modal-body">
                             {{csrf_field()}}
                             <div class="form-group">
                                <label for="title">School Name</label>
                                <input id="school_name" type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name">
                                
                                @error('school_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Postal Address</label>
                                <input id="postal_address" type="text" class="form-control @error('postal_address') is-invalid @enderror" name="postal_address">
                                
                                @error('postal_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Postal Code</label>
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code">
                                
                                @error('postal_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">County</label>
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county">
                                
                                @error('County')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">town</label>
                                <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town">
                                
                                @error('town')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">Teacher Name</label>
                                <input id="teacher_name" type="text" class="form-control @error('teacher_name') is-invalid @enderror" name="teacher_name">
                                
                                @error('teacher_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Phone Number</label>
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                                
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">Email Address</label>
                                <input id="email_address" type="text" class="form-control @error('email_address') is-invalid @enderror" name="email_address">
                                
                                @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             
                             
                             
                             
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <input  type="submit" class="btn btn-primary" name="submit" value="create">
                            </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
      
      
      
            </div>
            <!-- /.card-body -->
          </div>
        
          <!-- /.card -->
        </div>
        @else
          <p style="color:red">No record</p>
        @endif
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection