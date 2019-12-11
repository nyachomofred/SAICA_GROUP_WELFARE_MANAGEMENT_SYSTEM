
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
              <li class="breadcrumb-item active">User Update Form</li>
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
               
                <h2 class="card-title"> <a href="{{route('user')}}"><i class="fa fa-backward"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Userinformation for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[{{$user->name}}]</h2>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <form  method="POST" action="{{ url('/admin/insertupdateuser/'.$user->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label>Name <span class="required">*</span>
                        </label>
                       
                          <input type="text" name="name" value="{{$user->name}}" id="first-name" required="required" class="form-control">
                       
                      </div>
                      
                      <div class="form-group">
                        <label for="first-name">Username <span class="required">*</span>
                        </label>
                       
                          <input type="text" name="username" value="{{$user->username}}" id="first-name" required="required" class="form-control">
                    
                      </div>
                      
                      <div class="form-group">
                        <label for="first-name">Email <span class="required">*</span>
                        </label>
                        
                          <input type="text" name="email" value="{{$user->email}}" id="first-name" required="required" class="form-control">
                       
                      </div>
                      
                     
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Role <span class="required">*</span>
                        </label>
                        
                          <select id="heard" name="role" class="form-control" required >
                            <option value="{{$user->role}}">{{$user->role}}</option>
                           <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="Finance Officer">Finance Officer</option>
                            <option value="Project Manager">Project Manager</option>
                            <option value="Trainer">Trainer</option>
                            <option value="Intern">Intern</option>
                          </select>
                      
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <a href="{{route('user')}}" class="btn btn-primary">Cancel</a>
                           <input type="submit" name="submit" value="Update" class="btn btn-success">
                        </div>
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