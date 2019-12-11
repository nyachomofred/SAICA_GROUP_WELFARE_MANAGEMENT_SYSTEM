@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>High School Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">High School Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-1"> </div>
      
          <!-- right column -->
          <div class="col-md-10">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
               
                <h2 class="card-title">  Edit School :[{{$data->school_name}}]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/highschoolcontacts/update/'.$data->id)}}">
                    {{ csrf_field() }}
                      
                       <div class="form-group">
                                <label for="title">School Name</label>
                                <input id="school_name" type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" value="{{$data->school_name}}">
                                
                                @error('school_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Postal Address</label>
                                <input id="postal_address" type="text" class="form-control @error('postal_address') is-invalid @enderror" name="postal_address" value="{{$data->postal_address}}">
                                
                                @error('postal_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Postal Code</label>
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{$data->postal_code}}">
                                
                                @error('postal_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">County</label>
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{$data->county}}">
                                
                                @error('County')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">town</label>
                                <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{$data->town}}">
                                
                                @error('town')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">Teacher Name</label>
                                <input id="teacher_name" type="text" class="form-control @error('teacher_name') is-invalid @enderror" name="teacher_name" value="{{$data->teacher_name}}">
                                
                                @error('teacher_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                             <div class="form-group">
                                <label for="title">Phone Number</label>
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$data->phone_number}}">
                                
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                              <div class="form-group">
                                <label for="title">Email Address</label>
                                <input id="email_address" type="text" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{$data->email_address}}">
                                
                                @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                             
                            <div class="modal-footer justify-content-between">
                              <a href="{{route('highschoolcontacts.index')}}" class="btn btn-default">Cancel<a/>
                              <input  type="submit" class="btn btn-primary" name="submit" value="update">
                            </div>
                             
                     
                     
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
           <div class="col-md-1"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection