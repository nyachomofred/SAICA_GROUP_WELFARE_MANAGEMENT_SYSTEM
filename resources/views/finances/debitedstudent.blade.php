

@extends('layouts.adminlte')
@section('content')
@if (session('debitedstatus'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session('debitedstatus') }}
    </div>
@endif
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Finance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
              <h5>Debited Student
              
                   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                   <small>Note: balance with negative (-) means overpayment</small
              </h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                             <th>Name</th>
                             <th>Required Amount</th>
                             <th>Amount To Pay</th>
                             <th>Amount Paid</th>
                             <th>Balance</th>
                             <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
               
                    @foreach($student as $student_record)
                       <tr>
                         
                             <td>{{$student_record->full_name}}</td>
                             <td>{{$student_record->required_amount}}</td>
                             <td>{{$student_record->amount_to_pay}}</td>
                             <td>{{$student_record->amount_paid}}</td>
                             <td>{{$student_record->balance}}</td>
                             
                            
                            <td>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{URL::to('/admin/finances/makepayment/'.$student_record->student_id)}}"><i class="fa fa-eye"></i>Make Payment </a>
                                      <a class="dropdown-item" href="{{URL::to('/admin/finances/feepaymenthistory/'.$student_record->student_id)}}"><i class="fa fa-eye"></i>View Payment History </a>
    
                                  </div>
                               </div>
                            </td>
                        
                        
                       </tr>
                       @endforeach
                        
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