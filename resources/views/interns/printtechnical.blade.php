@extends('layouts.adminlte')
@section('content')




 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                
                
                  <a href="{{url('/admin/interns/score/'.$intern->table_id)}}"><i class="fa fa-backward"></i></a>
                   &nbsp;
                    
                   Technical Skills  Evaluation  for: [{{$intern->name}}]
                   
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

    <section class="content">
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

              <!-- Table row -->
              <div class="row">
               <p style="color:black;font-size:22px;font-family:verdana">1. Intern Completed his/her Project 
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                [{{$intern->complete}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->complete_reason}}
                </p>
                
                <p style="color:black;font-size:22px;font-family:verdana">2. Project Contain User Registration
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                [{{$intern->project_contain_userregistration}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->regisration_reason}}
                </p>
                
                
                <p style="color:black;font-size:22px;font-family:verdana">3. User Interface is Complete and is appealing
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              
                
                [{{$intern->interface}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->interface_reason}}
                </p>
                
                
                
                <p style="color:black;font-size:22px;font-family:verdana">4. Database design and built following best practices of database
               
                 &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              
                
                [{{$intern->databaset}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->database_reason}}
                </p>
                
                
                 <p style="color:black;font-size:22px;font-family:verdana">5. Code is legible and neat
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
              
                [{{$intern->code}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->code_reason}}
                </p>
                
                
                <p style="color:black;font-size:22px;font-family:verdana">6. Intern demonstrates a good implementation of algorithm and functions
               
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               
                
                [{{$intern->algorithm}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->algorithm_reason}}
                </p>
                
                <p style="color:black;font-size:22px;font-family:verdana">7. Intern Uploaded Their code to repository like github
               
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                
                [{{$intern->github}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->github_reason}}
                </p>
                
                
             <p style="color:black;font-size:22px;font-family:verdana">8. Intern covered syllabus for course assigned
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                
                
                [{{$intern->syllabus}}]
               <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;If no, Explain why:
               <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->syllabus_reason}}
                </p>
                
                
                <p style="color:black;font-size:22px;font-family:verdana"> Additional Comments
               
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                
                
               
               <br> 
              
               <br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                {{$intern->comment}}
                </p>
                
                
                
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
<!-- info row -->
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
                <div class="col-sm-4 invoice-col">
                 <textarea  style="border:1px solid blue;height:50px;" placeholder="Official Stamp"></textarea>
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
    
    
@endsection