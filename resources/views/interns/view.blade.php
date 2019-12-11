@extends('layouts.adminlte')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interns </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Interns</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                    
                    <a href="{{route('interns.index')}}"><i class="fa fa-backward"></i></a>
                   &nbsp;&nbsp; &nbsp;&nbsp; View Form For: {{$intern->name}}
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form role="form" method="POST" action="{{url('/admin/interns/update/'.$intern->id)}}">
                  {{csrf_field()}}
                    <div class="card-body">
                        
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="name" value="{{$intern->name}}" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"name="email" class="form-control" id="exampleInputEmail1" value="{{$intern->email}}">
                      </div>
                      
                         
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phonenumber</label>
                        <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1" value="{{$intern->phonenumber}}">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">Area Of Study</label>
                        <input type="text" name="area_of_study" class="form-control" id="exampleInputEmail1" value="{{$intern->area_of_study}}">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">Place Of Intern</label>
                         <select class="form-control" name="place_of_intern">
                             <option value="{{$intern->place_of_intern}}">{{$intern->place_of_intern}}</option>
                             <option value="Jkuat Juja Campus">Jkuat Juja Campus</option>
                             <option value="Laikipia Campus">Laikipia Campus</option>
                             <option value="Westland Campus">Westland Campus</option>
                         </select>
                      </div>
                      
                     
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Update</button>
                    </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <div class="col-md-1"></div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection