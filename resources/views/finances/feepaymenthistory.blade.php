
@extends('layouts.adminlte') 
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Finance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Finance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
       
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
               <h5> 
                      <a href="{{route('finances.debitedstudent')}}"> <i class="fa fa-backward"></i></a>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Fee Payment History for: {{$student->full_name}} [[{{$student->student_id}}]
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      <a href="{{URL::to('/admin/finances/printinvoice/'.$student->id)}}" class=" btn btn-success" ><i class="fa fa-print"> Print Fee Statement</i></a>
               
               </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="example1" class="table table-striped table-bordered">
                     <thead>
                       <tr>

                         <th>Amount Paid</th>
                         <th>Payment Mode</th>
                         <th >Reference Id</th>
                         <th>Date Paid</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($paymenthistory as $v_one)
                       <tr>
                         <td>{{$v_one->amount_paid}}</td>
                         <td>{{$v_one->payment_mode}}</td>
                         <td>{{$v_one->reference_no}}</td>
                         <td>{{$v_one->date_paid}}</td>
                         <td>
                             <a href="{{url('/admin/finances/printreceipt/'.$v_one->id)}}" class="btn btn-primary"><i class="fa fa-print">Print Receipt</i></a>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection