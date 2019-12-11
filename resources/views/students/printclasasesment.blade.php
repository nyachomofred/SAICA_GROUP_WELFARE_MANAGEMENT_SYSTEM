
@extends('layouts.adminlte')
@section('content')




 <!-- Content Header (Page header) -->
 @if(!empty($student))
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                
                
                  <a href="{{url('/admin/students/viewscore/'.$student->student_table_id)}}"><i class="fa fa-backward"></i></a>
                   &nbsp;
                    
                   Project Assesment  for: [{{$student->name}}]
                   
                  </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="btn btn-success" onclick="window.print()"><i class="fa fa-download">Download</i></a></li>
             
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
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Devan Plaza 6Th Floor Crossway Road, Westlands|PO Box 105024-00101, Nairobi<br>
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Phone: +254723 274 774 |Email:info@zalegoinstitute.ac.ke|Website:www.zalegoinstitute.ac.ke</p>
                   </center>
              </div>
              <!-- /.row -->
              
              <!-- info row -->
              <div class="row invoice-info">
                   <center>
                       <p> 
                       <br>
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       STUDENT PROJECT ASSESMENT FORM</p>
                   </center>
              </div>
              <!-- /.row -->

              <!-- Table row -->
               
              <div class="row">
                <h2>A. Personal Details</h2>
                 <table class="table table-stripped table-bordered">
                         <tbody>
                              
                            <tr align="left">
                              <th align="left" style="width:50%">FULL NAME:</th>
                              <td align="left">{{$student->name}}</td>
                            </tr>
                            
                            <tr align="left">
                              <th align="left">PROJECT TITLE:</th>
                              <td  align="left">{{$student->project_title}}</td>
                            </tr>
                            
                             <tr align="left">
                              <th align="left">COURSE:</th>
                              <td align="left">{{$student->course}}</td>
                            </tr>
                            
                          </tbody>
                </table>
               
              </div>
              <!-- /.row -->
             
               <div class="row">
                   <h2>B. Student Scores</h2>
              </div>
              
               <div class="row">
                    <table class="table table-stripped table-bordered">
                         <tbody>
                                   <tr>
                                       <th></th>
                                       <th>
                                           <strong>Maximum</strong>
                                           <strong>Posible score</strong>
                                       </th>
                                      <th>Score</th>
                                   </tr>
                                   
                                  <tr>
                                      <th align="left" style="width:50%">User Interface design:</th>
                                      <td  align="center">10</td>
                                      <td align="center">{{$student->design}}</td>
                                </tr>
                                
                                 <tr>
                                  <th align="left">Database and tables design:</th>
                                  <td align="center">10</td>
                                  <td align="center">{{$student->database_design}}</td>
                                </tr>
                                
                                
                                <tr>
                                  <th align="left">Functionality (code implementation)</th>
                                  <td align="center">10</td>
                                  <td align="center">{{$student->asesment_type}}</td>
                                </tr>
                                
                                <tr>
                                  <th align="left">Successfully send and retrieve data from the database</th>
                                  <td align="center">10</td>
                                  <td align="center">{{$student->data_insert}}</td>
                                </tr>
                                
                                 <tr>
                                  <th align="left">Initiative and self motivation</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->theory}}</td>
                                </tr>
                                
                                <tr>
                                  <th align="left">Data validation</th>
                                  <td align="center">10</td>
                                  <td align="center">{{$student->data_validation}}</td>
                                </tr>
                               
                                 <tr>
                                  <th align="left">Project Originality</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->data_retrieve}}</td>
                                </tr>
                                
                                <tr>
                                  <th align="left">Additional Comments</th>
                                  <td align="left" colspan="2">{{$student->comment}}</td>
                                </tr>
                                
                                 <tr>
                                  <th align="left">Total</th>
                                  <td align="center">60</td>
                                  <td align="center">{{$student->total}}</td>
                                </tr>
                                
                              </tbody>
                                           
                    </table>
                                        
              </div>
             
              
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                 
                  <address>
                    Assessors' name :_________________________<br><br>
                    Signature:__________________________________<br><br>
                    Date:_______________________________________<br><br>
                   
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                 
                  <address>
                  
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col" style="border:1px solid black">
                  Official Stamp
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- /.row -->

             
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @else
  <p style="color:red">No download for this student</p>
  @endif
    
@endsection