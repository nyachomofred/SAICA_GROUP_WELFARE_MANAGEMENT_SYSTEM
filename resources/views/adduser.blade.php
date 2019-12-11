
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Form</li>
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
               
                <h2 class="card-title"> <a href="{{route('user')}}"> <i class="fa fa-backward"></i></a>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Add new user</h2>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form"  method="POST" action="{{ route('insertuser')}}">
                      {{ csrf_field() }}

                  <!-- select -->
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="first-name" required="required" value="{{ old('name') }}" class="form-control">
                    </select>
                  </div>
                  
                  
                     <div class="form-group">
                         <label>Username</label>
                       
                          <input id="text" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username">
                          
                           @error('username')
                                <span class="invalid-feedback" role="alert" style="color:red">
                                      <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                          
                      
                      </div>
                      
                      
                       <div class="form-group">
                         <label>Email Address</label>
                       
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                             @error('email')
                                <span class="invalid-feedback" role="alert" style="color:red">
                                      <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                          
                      
                      </div>
                      
                      <div class="form-group">
                        <label>Password </label>
                       
                          <input type="text" name="password" id="first-name" required="required" class="form-control">
                       
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
                     <a href="{{route('user')}}" class="btn btn-default">Cancel</a>
                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
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