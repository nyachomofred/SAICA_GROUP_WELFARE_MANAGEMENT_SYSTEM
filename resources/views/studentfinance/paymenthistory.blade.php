
@extends('layouts.adminlte')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
           
          <div class="card card-info">
            <div class="card-header">
              @guest
              <h3 class="card-title">
                   Fee Payment histories
               </h3>
              @else
              <h3 class="card-title">
                   Payment History for: {{Auth::user()->name}}
               </h3>
              @endguest
               
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                          <th>Amount Paid</th>
                          <th>Pyament Mode</th>
                          <th>Reference No</th>
                          <th>Date Paid</th>
                        </tr>
                      </thead>
                <tbody>
                    @if(!empty($data))
                    @foreach($data as $record)
                     <tr>
                         <td>{{$record->amount_paid}}</td>
                         <td>{{$record->payment_mode}}</td>
                         <td>{{$record->reference_no}}</td>
                         <td>{{$record->date_paid}}</td>
                     </tr>
                     @endforeach
                     @endif   
                </tbody>
                 
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
    <!-- /.content -->
@endsection