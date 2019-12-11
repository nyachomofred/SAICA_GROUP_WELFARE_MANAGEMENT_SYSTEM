@extends('layouts.adminlte')
@section('content')




 <!-- Content Header (Page header) -->
 @if(!empty($general))
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                  <a href="{{url('/admin/interns/score/'.$general->table_id)}}"><i class="fa fa-backward"></i></a>
                   &nbsp;
                    
                   General  Skills  Evaluation  for: [{{$general->name}}]
                   
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

              <!-- Table row -->
               <div class="row">
                   <p style="color:black;font-size:20px;font-family:verdana">The purpose of this form is to assess interns affliated with Zalego Institute and give an overview of their work,
                   profesional skills and competencies.The assesment rating range from 1 to 5 and are as follows
                    <ol>
                        <li>=Unsatisfactory Never demonstrate this ability/does not meet expectation</li>
                        <li>=Needs improvement Seldom demonstrates this ability/rarely meet expectation</li>
                        <li>=Fair Sometimes demonstrate this ability/meet expectation</li>
                        <li>=Good Usually demonstrate this ability/sometimes exceeds expectation</li>
                        <li>=Excellent Always demonstrate this ability/consistently exceeds expectations </li>
                    </ol>
                   </p>
              </div>
              <div class="row">
                <h2>Personal Details</h2>
                 <table class="table table-stripped table-bordered">
                    
                    <tr>
                        <td>Name</td>
                        <td>{{$general->name}}</td>
                        
                    </tr>
                    
                     <tr>
                        <td>Email</td>
                        <td>{{$general->email}}</td>
                        
                    </tr>
                    <tr>
                        <td>Phonenumber</td>
                        <td>{{$general->phonenumber}}</td>
                        
                    </tr>
                    <tr>
                        <td>Area of study</td>
                        <td>{{$general->area_of_study}}</td>
                        
                    </tr>
                     <tr>
                        <td>Duration</td>
                        <td>(From): {{$general->day}}/ {{$general->month}}/ {{$general->year}}- (To): {{Date('d')}}/ {{Date('m')}}/ {{Date('Y')}}  </td>
                        
                    </tr>
                </table>
               
              </div>
              <!-- /.row -->
             
               <div class="row">
                   <h2>A. Ability to learn</h2>
              </div>
              
               <div class="row">
                    <table class="table table-stripped table-bordered">
                                            <tr>
                                                <td>1</td>
                                                <td>Observes and /or pays attension to others</td>
                                                <td>
                                                   
                                                      {{$general->attension}}
                                                        
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Asks petinent and purposful questions</td>
                                                <td>
                                                   
                                                        {{$general->petinent}}
                                                       
                                                </td>
                                            </tr>
                                            
                                             <tr>
                                                <td>3</td>
                                                <td>Seeks out and utilizes appropriate resources</td>
                                                <td>
                                                   
                                                     {{$general->resource}}
                                                      
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Accept responsibility from mistakes and learn from experiences</td>
                                                <td>
                                                    
                                                     {{$general->mistake}}
                                                        
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>5</td>
                                                <td>Open to new experiences;take appropriate risks</td>
                                                <td>
                                                   
                                                       {{$general->risk}}
                                                        
                                                    
                                                </td>
                                            </tr>
                                           
                                        </table>
                                        
              </div>
              <div class="row"><h2>B.Listening &Oral communication Skills</h2></div>
              <div class="row">
                  
                   <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1</td>
                                                <td>Listening to others in an attentive and active manner </td>
                                                <td>
                                                 
                                                       {{$general->listen}}
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Comprehends and follows verbal instructions </td>
                                                <td>
                                                   
                                                       {{$general->verbal}}
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Effectively participate in meetings or group settings </td>
                                                <td>
                                                  
                                                       {{$general->meeting}}
                                                       
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Demonstrate effective verbal communication skills </td>
                                                <td>
                                                    
                                                      {{$general->demonstrate}}
                                                        
                                                </td>
                                             </tr>
                                             
                                         </table>
                                         
              </div>
              <div class="row"><h2>C.Profesional and Dareer Developement</h2></div>
              <div class="row">
                  
                   <table class="table table-stripped table-bordered">
                                              
                                               <tr>
                                                <td>1 </td>
                                                <td>Exhibits self-motivated approach to work </td>
                                                <td>
                                                   
                                                       {{$general->work}}
                                                        
                                                   
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Demonstarte ability to set appropriate priorities/goals </td>
                                                <td>
                                                   
                                                        {{$general->goal}}
                                                        
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Exhibits professional behaviour and attitude </td>
                                                <td>
                                                 
                                                       {{$general->attitude}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Manage personal expectation consistent with work role </td>
                                                <td>
                                                    
                                                       {{$general->manage}}
                                                       
                                                   
                                                </td>
                                             </tr>
                                             
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Show interest in determining career direction </td>
                                                <td>
                                                   
                                                        {{$general->career}}
                                                       
                                                </td>
                                             </tr>
                                              
                                          </table>
                                          
              </div>
              <div class="row"><h2>D.Interpersonal and Teamwork skills</h2></div>
              <div class="row">
                  
                   <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1 </td>
                                                <td>Relate to co-workers and team members effectively</td>
                                                <td>
                                                   
                                                      {{$general->relate}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Manage and solve conflict in an effective manner</td>
                                                <td>
                                                    
                                                      {{$general->conflict}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Control emotions in a manner  appropriate for work</td>
                                                <td>
                                                   
                                                       {{$general->control}}
                                                        
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Demonstrate assertive but appropriate behaviour</td>
                                                <td>
                                                  
                                                       {{$general->assertive}}
                                                       
                                                </td>
                                             </tr>
                                         </table>
                                         
              </div>
              <div class="row"><h2> E.Organisational Effectiveness Skills:</h2></div>
              <div class="row">
                   <table class="table table-stripped table-bordered">
                                            <tr>
                                                <td>1 </td>
                                                <td>Seeks to understand and support the organisation mission and goals</td>
                                                <td>
                                                  
                                                       {{$general->support}}
                                                        
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Fits in with the norms and expectation of the organisation</td>
                                                <td>
                                                   
                                                       {{$general->fit}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Works within appropriate authority and decision making chanels</td>
                                                <td>
                                                   
                                                      {{$general->within}}
                                                        
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Demonstrates a sense of responsibility and confidentiality</td>
                                                <td>
                                                   
                                                       {{$general->sense}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Interact effectively and appropriately with suppervisor</td>
                                                <td>
                                                  
                                                       {{$general->interact}}
                                                       
                                                </td>
                                             </tr>
                                             
                                             
                                        </table>
              </div>
              <div class="row"><h2>F.Basic  Work skills:</h2></div>
              <div class="row">
                   <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1 </td>
                                                <td>Report to work as scheduled</td>
                                                <td>
                                                   
                                                       {{$general->report}}
                                                        
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Is prompt in showing up to work and meetings</td>
                                                <td>
                                                   
                                                        <option value="{{$general->prompt}}">{{$general->prompt}}</option>
                                                        
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Exhibits appositive and constructive attitude</td>
                                                <td>
                                                   
                                                      {{$general->positive}}
                                                        
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Brings a sense of values and integrity to the job</td>
                                                <td>
                                                    
                                                     >{{$general->bring}}
                                                        
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Behaves in an ethical and profesional manner</td>
                                                <td>
                                                  
                                                      {{$general->manner}}
                                                        
                                                </td>
                                             </tr>
                                             
                                        </table>
              </div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
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
  @else
  <p style="color:red">No download for this student</p>
  @endif
    
@endsection