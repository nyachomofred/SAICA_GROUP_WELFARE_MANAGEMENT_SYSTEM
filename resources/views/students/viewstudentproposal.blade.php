@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
                <h3 class="card-title">{{$proposal->name}} [{{$proposal->student_id}}]</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST" action="{{ url('/admin/students/updateproposal/'.$proposal->id)}}">
                      {{ csrf_field() }}

                  <!-- select -->
                  <div class="form-group">
                    <label>Project Status</label>
                    <select class="form-control" name="status">
                      <option value="{{$proposal->status}}">{{$proposal->status}}</option>
                      <option value="aproved">Approve</option>
                      <option value="Not approved">Not Approved</option>
                     
                    </select>
                  </div>
                 
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" rows="3" name="comment" placeholder="Enter ...">{{$proposal->comment}}</textarea>
                  </div>
                     <a href="{{route('students.submitedproposal')}}" class="btn btn-default">Cancel</a>
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