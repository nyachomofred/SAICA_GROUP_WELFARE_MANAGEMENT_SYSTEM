
@extends('layouts.adminlte')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('status') }}
    </div>
@endif
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Fees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration Fees</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    
     <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-12">
        
          <div class="card card-default">
            <div class="card-header">
               <form class="form-inline" style="float:right;" action="{{route('finances.searchstudent')}}" method="GET">
                   <label>Enter student Number</label>
                   <input type="text" name="search" class="form-control"> &nbsp;&nbsp;
                   <input type="submit" class="btn btn-primary" value="Search">
               </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table  class="table table-bordered table-striped">
                 <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student Id</th>
                        <th>Campus</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                <tbody>
               @if(!empty($data))
                  <tr>
                      <td>{{$data->full_name}}</td>
                      <td>{{$data->student_id}}</td>
                      <td>{{$data->campus}}</td>
                        
                     <td>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pay{{$data->id}}">Pay registration fees</button>
                     </td>
                     
                     <!---->
                        
                        
                           <div class="modal fade" id="pay{{$data->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Registration Fee for: {{$data->full_name}} [{{$data->student_id}}]</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form role="form"  method="POST" action="{{route('finances.addregistrationpayment')}}">
                                    @csrf
                                    <div class="modal-body">
                                     
                                         <div class="form-group" style="display:none">
                                             <label>Id</label>
                                              <input id="text" type="text" class="form-control" name="student_no" value="{{$data->id}}">
                                          </div>
                                          <div class="form-group" style="display:none">
                                             <label>student Id</label>
                                              <input id="text" type="text" class="form-control" name="student_id" value="{{$data->student_id}}">
                                          </div>
                                          
                                          <div class="form-group" style="display:none" >
                                             <label>Name</label>
                                              <input id="text" type="text" class="form-control" name="name" value="{{$data->full_name}}">
                                          </div>
                                          
                                          <div class="form-group" style="display:none">
                                             <label>Campus</label>
                                              <input id="text" type="text" class="form-control" name="campus" value="{{$data->campus}}">
                                          </div>
                                          
                                          <div class="form-group" >
                                             <label>Amount</label>
                                              <input id="text" type="number" class="form-control" name="amount" min="1500" max="1500" required>
                                          </div>
                                   
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                                  
                        <!---->
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
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-12">
        
          <div class="card card-info">
            <div class="card-header">
               <button   class="btn btn-info btn-sm" data-toggle="modal" data-target="#addcontact" style="floate:right;"><i class="fa fa-plus"></i> Add New Contact </button>          
                 
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student Id</th>
                        <th>Campus</th>
                        <th>Amount Paid</th>
                        <th>Date Paid</th>
                      
                    </tr>
                  </thead>
                <tbody>
               @if(!empty($student))
                 @foreach($student as $record)
                 <tr>
                     <td>{{$record->name}}</td>
                     <td>{{$record->student_id}}</td>
                     <td>{{$record->campus}}</td>
                     <td>{{$record->amount}}</td>
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