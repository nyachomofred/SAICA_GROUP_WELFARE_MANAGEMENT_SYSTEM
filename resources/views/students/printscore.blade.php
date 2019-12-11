
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
                    
                   General Assesment  for: [{{$student->name}}]
                   
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
                       STUDENT GENERAL ASSESMENT FORM</p>
                   </center>
              </div>
              <!-- /.row -->

              <!-- Table row -->
               
              <div class="row">
                <h2>A. Personal Details</h2>
                 <table class="table table-stripped table-bordered">
                         <tbody>
                              
                                <tr align="left">
                                  <th align="left" style="width:50%">Name:</th>
                                  <td align="left">{{$student->name}}</td>
                                </tr>
                                
                               
                                <tr align="left">
                                  <th align="left">Admision Number:</th>
                                  <td align="left">{{$student->admision_no}}</td>
                                </tr>
                                
                                 <tr align="left">
                                  <th align="left">Course:</th>
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
                                   <tr align="center">
                                       <td align="center"></th>
                                       <td align="center">
                                           <strong>Maximumu</strong>
                                           <strong>Posible</strong>
                                       </th>
                                      <td align="center">Score</th>
                                   </tr>
                                   
                                <tr>
                                      <th align="left" style="width:50%">Final Project:</th>
                                      <td align="center">60</td>
                                      <td align="center">{{$student->final_project}}</td>
                                </tr>
                                <tr>
                                  <th align="left">Class assesment(practical)</th>
                                  <td align="center">10</td>
                                  <td align="center">{{$student->class_assesment_practical}}</td>
                                </tr>
                                <tr>
                                  <th align="left">Class assesment(theory)</th>
                                  <td align="center">10</td>
                                 <td align="center">{{$student->class_assesment_theory}}</td>
                                 
                                </tr>
                                <tr>
                                  <th align="left">Assignments</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->assignment}}</td>
                                </tr>
                                
                                 <tr>
                                  <th align="left">Attendance</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->attendance}}</td>
                                </tr>
                                
                               <tr>
                                  <th align="left">Discipline</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->discipline}}</td>
                               </tr>
                               
                                 <tr>
                                  <th align="left">In class attendance</th>
                                  <td align="center">5</td>
                                  <td align="center">{{$student->discipline}}</td>
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