
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
               
                <h2 class="card-title"> <a href="{{route('finances.debitedstudent')}}"><i class="fa fa-backward"></i></a> 
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                
                Fee Payment form For :{{$one_record->full_name}}  [{{$one_record->student_id}}]</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form"  method="POST" action="{{ url('/admin/finances/insertcredit/'.$one_record->id)}}">
                      {{ csrf_field() }}

                  <!-- select -->
                  <div class="form-group">
                    <label>Amount Paid</label>
                  
                   <input type="text" name="amount_paid" id="amount_paid" required  class="form-control @error('amount_paid') is-invalid @enderror" value="{{ old('amount_paid') }}"  autocomplete="amount_paid" autofocus>
                   
                        @error('amount_paid')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                 
                  
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Payment Mode</label>
                       <select id="heard" class="form-control" required name="payment_mode">
                            <option value="">Choose..</option>
                            <option value="Mpesa">Mpesa</option>
                            <option value="Cheque">Cheque</option>
                        </select>
                  </div>
                  
                   <div class="form-group">
                    <label>Mpeas Id/Cheque No</label>
                       <input type="text" name="reference_no" id="reference_no" required="required"  class="form-control @error('reference_no') is-invalid @enderror" value="{{ old('reference_no') }}"  autocomplete="reference_no" autofocus>
                       
                        @error('reference_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                   
                  </div> 
                  
                 
                  <a href="{{route('finances.debitedstudent')}}" class="btn btn-default">Cancel</a>
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