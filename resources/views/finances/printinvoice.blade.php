
@extends('layouts.adminlte')
@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                
                <a href="{{url('admin/finances/feepaymenthistory/'.$student->id)}}"><i class="fa fa-backward"></i></a>
                    
                   FEE STATEMENT  FOR: [{{$student->full_name}}]
                   
                  </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="btn btn-success" onclick="window.print()"><i class="fa fa-print">Print fee statement</i></a></li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

 <section class="content" style="color:black;font-size:20px;font-family:verdana">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                      <img src="{{asset('img/zaleu.jpg')}}" style="height:100px;width:300px">
                      <small class="float-right"><img src="{{asset('img/zalo.PNG')}}"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                
              
                   <center>
                       <p style="color:black;font-size:20px;font-family:verdana"> 
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Devan Plaza 6Th Floor Crossway Road, Westlands|PO Box 105024-00101, Nairobi<br>
                      
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Phone: +254723 274 774 |Email:info@zalegoinstitute.ac.ke|Website:<a href="https://www.zalegoinstitute.ac.ke">www.zalegoinstitute.ac.ke</a></p>
                   </center>
                   
                <!-- /.col -->
              </div>
              
              <div class="row invoice-info">
                   <center>
                       <p> 
                       <br>
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       FEE STATEMENT </p>
                   </center>
              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-sm-12">
                      <table class="table table-striped table-bordered">
                          <tr>
                              <td>Name</td>
                              <td>{{$student->full_name}}</td>
                          </tr>
                           <tr>
                              <td>Admision Number</td>
                              <td>{{$student->student_id}}</td>
                          </tr>
                          <tr>
                              <td>Campus</td>
                              <td>{{$student->campus}}</td>
                          </tr>
                      </table>
                  </div>
              </div>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                               
                                <th>Amount Paid</th>
                                <th>Payment Mode</th>
                                <th>Reference Id</th>
                                <th>Date Paid</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($paymenthistory as $v_one)
                              <tr>
                               
                                <td>{{$v_one->amount_paid}}</td>
                                <td>{{$v_one->payment_mode}}</td>
                                <td>{{$v_one->reference_no}}</td>
                                <td>{{$v_one->date_paid}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                          <p class="lead">Payment Methods:</p>
                          <img src="{{asset('img/barclays.jpeg')}}" style="width:40px;height:20px">
                          <img src="{{asset('img/zal.jpeg')}}" style="width:40px;height:20px">
                          <img src="{{asset('img/mpesas.png')}}" style="width:50px">
                          <img src="{{asset('img/barclays.jpeg')}}" style="width:50px;height:20px">

                </div>
                <!-- /.col -->
                <div class="col-6">
                     <p class="lead">Amount Due {{Date('d/m/Y')}}</p>

                  <div class="table-responsive">
                       <table class="table table-bordered">
                              <tbody>
                                   <tr>
                                      <th style="width:50%">Required Amount:</th>
                                      <td>Ksh: {{$finance->required_amount}}</td>
                                    </tr>
                                    <tr>
                                      <th style="width:50%">Amount To pay:</th>
                                      <td>Ksh: {{$finance->amount_to_pay}}</td>
                                    </tr>
                                    <tr>
                                      <th>Amount Paid</th>
                                      <td>Ksh: {{$finance->amount_paid}}</td>
                                    </tr>
                                    <tr>
                                      <th>Balance</th>
                                      <td>Ksh : {{$finance->balance}}</td>
                                    </tr>
                                
                              </tbody>
                        </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  
                  
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->





@endsection