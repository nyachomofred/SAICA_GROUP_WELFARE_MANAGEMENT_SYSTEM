
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
             
              @else
              <h3 class="card-title">
                  Fee  Payment Information for: {{Auth::user()->name}}
               </h3>
              @endguest
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                          <th>Name</th>
                          <th>Admision Number</th>
                          <th>Intake</th>
                          <th>Required Amount</th>
                          <th>Amount To Pay</th>
                          <th>Amount Paid</th>
                          <th>Balance</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
                    @if(!empty($data))
                     <tr>
                         <td>{{$data->name}}</td>
                         <td>{{$data->adm_no}}</td>
                         <td>{{$data->intake}}</td>
                         <td>{{$data->required_amount}}</td>
                         <td>{{$data->amount_to_pay}}</td>
                         <td>{{$data->amount_paid}}</td>
                         <td>{{$data->balance}}</td>
                         <td><a href="{{URL::to('/admin/students/paymenthistory/'.$data->student_id)}}" class="btn btn-success btn-xs" ><i class="fa fa-eye"></i>View Payemnt History</a> </td>
                     </tr>
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