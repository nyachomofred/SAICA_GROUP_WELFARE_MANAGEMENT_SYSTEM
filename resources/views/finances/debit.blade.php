
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Debit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Debit Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @if (session('failedstatus'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session('failedstatus') }}
        </div>
    @endif

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
               
                <h2 class="card-title"> <a href="{{route('finances.index')}}"><i class="fa fa-backward"></i> </a> &nbsp;&nbsp;&nbsp; Debited Form  For : {{$student->full_name}} [{{$student->student_id}}]</h2>
                  <p class="card-title">Course:[{{$course->course}}]</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form"  method="POST" action="{{ url('/admin/finances/insertdebit/'.$student->id)}}">
                      {{ csrf_field() }}

                  <!-- select -->
                  <div class="form-group">
                    <label>Required Amount</label>
                    <input type="text" name="required_amount" id="first-name" required="required" class="form-control" value="">
                    </select>
                  </div>
                 
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Amount To Pay</label>
                    <input type="text" name="amount_to_pay" id="first-name" required="required" class="form-control" value="">
                  </div>
                     <a href="{{route('finances.index')}}" class="btn btn-default">Cancel</a>
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