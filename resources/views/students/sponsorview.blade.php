
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sponsor Information</li>
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
               
              <h4> <a href="{{url('/admin/students/view/'.$one_sponsor->id)}}"><i class="fa fa-backward"></i></a> &nbsp;&nbsp;&nbsp; Sponsor Information</h4>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/students/sponsorupdate/'.$one_sponsor->id)}}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="middle-name" class="form-control" type="text" name="sponsor"  value="{{$one_sponsor->sponsor}}">
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor Title <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control" type="text" value="{{$one_sponsor->sponsor_title}}" name="sponsor_title">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="middle-name" class="form-control " type="text"value="{{$one_sponsor->sponsor_name}}"  name="sponsor_name" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor Address <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input id="middle-name" class="form-control" type="text" name="sponsor_address"  value="{{$one_sponsor->sponsor_address}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  for="first-name">Sponsor Phonenumber <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="middle-name" class="form-control" type="text"  name="sponsor_phonenumber" value="{{$one_sponsor->sponsor_phonenumber}}">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor Email <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input id="middle-name" class="form-control" type="text" name="sponsor_email" value="{{$one_sponsor->sponsor_email}}">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <a href="{{route('students.index')}}" class="btn btn-primary">Cancel</a>
                           <input type="submit" name="submit" value="Update" class="btn btn-success">
                        </div>
                      </div>

                    
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