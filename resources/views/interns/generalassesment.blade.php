@extends('layouts.adminlte')

@section('content')

@if (session('failed'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" style="color:white">X</button>
        {{ session('failed') }}
    </div>
@endif
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interns </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Assesment </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-0"></div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                    
                    <a href="{{route('interns.assesment')}}"><i class="fa fa-backward"></i></a>
                   &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                     &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;
                   Technical Skills Evaluation  Form For:  &nbsp;&nbsp; [{{$intern->name}}]
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                    <div class="card-body">
                        <form role="form" method="POST" action="{{route('interns.insertgeneralassesment')}}">
                        {{csrf_field()}}
                                 <div class="card card-success">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                            Personal Information
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="row">

                                             
                                             <div class="col-sm-3">
                                                 
                                                 <div class="form-group">
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <input type="text" name="name" value="{{$intern->name}}" class="form-control" readonly=true>
                                                  </div>
                          
                                             </div>
                                             
                                              <div class="col-sm-3">
                                                 <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email"name="email" class="form-control" id="exampleInputEmail1" value="{{$intern->email}}" readonly="true">
                                                 </div>
                                              </div>
                                              <div class="col-sm-3">
                                                      
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Phonenumber</label>
                                                    <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1" value="{{$intern->phonenumber}}" readonly=true>
                                                  </div>
                          
                                              </div>
                                              
                                              <div class="col-sm-3">
                                                  
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Area Of Study</label>
                                                    <input type="text" name="area_of_study" class="form-control" id="exampleInputEmail1" value="{{$intern->area_of_study}}" readonly=true>
                                                  </div>
                          
                                              </div>
                                              
                                              
                                              
                                              
                                               <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Place Of Intern</label>
                                                     <select class="form-control" name="place_of_intern" readonly=true>
                                                         <option value="{{$intern->place_of_intern}}">{{$intern->place_of_intern}}</option>
                                                         <option value="Jkuat Juja Campus">Jkuat Juja Campus</option>
                                                         <option value="Laikipia Campus">Laikipia Campus</option>
                                                         <option value="Westland Campus">Westland Campus</option>
                                                     </select>
                                                  </div>
                          
                                              </div>
                                              <div class="col-sm-3">
                                                  <div class="form-group">
                                                   
                                                    <input type="text" name="table_id" value="{{$intern->id}}" class="form-control">
                                                  </div>
                                              </div>
                                         </div>
                                          <div class="row">
                                                   
                                             
                                              
                                              
                                         </div>
                                     </div>
                                     
                                  </div>
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           A. Ability to learn
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                        <table class="table table-stripped table-bordered">
                                            <tr>
                                                <td>1</td>
                                                <td>Observes and /or pays attension to others</td>
                                                <td>
                                                    <select name="attension" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Asks petinent and purposful questions</td>
                                                <td>
                                                    <select name="petinent" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                             <tr>
                                                <td>3</td>
                                                <td>Seeks out and utilizes appropriate resources</td>
                                                <td>
                                                    <select name="resource" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Accept responsibility from mistakes and learn from experiences</td>
                                                <td>
                                                    <select name="mistake" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>5</td>
                                                <td>Open to new experiences;take appropriate risks</td>
                                                <td>
                                                    <select name="risk" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                            </tr>
                                           
                                        </table>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           B. Listening and Oral comminication skills
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1</td>
                                                <td>Listening to others in an attentive and active manner </td>
                                                <td>
                                                    <select name="listen" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Comprehends and follows verbal instructions </td>
                                                <td>
                                                    <select name="verbal" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Effectively participate in meetings or group settings </td>
                                                <td>
                                                    <select name="meeting" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Demonstrate effective verbal communication skills </td>
                                                <td>
                                                    <select name="demonstrate" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                         </table>
                                             
                                     </div>
                                     
                                  </div>
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                            C.Professional and Career Developement Skills:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                          <table class="table table-stripped table-bordered">
                                              
                                               <tr>
                                                <td>1 </td>
                                                <td>Exhibits self-motivated approach to work </td>
                                                <td>
                                                    <select name="work" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Demonstarte ability to set appropriate priorities/goals </td>
                                                <td>
                                                    <select name="goal" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Exhibits professional behaviour and attitude </td>
                                                <td>
                                                    <select name="attitude" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Manage personal expectation consistent with work role </td>
                                                <td>
                                                    <select name="manage" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Show interest in determining career direction </td>
                                                <td>
                                                    <select name="career" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                              
                                          </table>
                                             
                                     </div>
                                     
                                  </div>
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                            D.Interpersonal and team work skills:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1 </td>
                                                <td>Relate to co-workers and team members effectively</td>
                                                <td>
                                                    <select name="relate" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Manage and solve conflict in an effective manner</td>
                                                <td>
                                                    <select name="conflict" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Control emotions in a manner  appropriate for work</td>
                                                <td>
                                                    <select name="control" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Demonstrate assertive but appropriate behaviour</td>
                                                <td>
                                                    <select name="assertive" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                         </table>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           E.Organisational Effectiveness Skills:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                        <table class="table table-stripped table-bordered">
                                            <tr>
                                                <td>1 </td>
                                                <td>Seeks to understand and support the organisation mission and goals</td>
                                                <td>
                                                    <select name="support" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Fits in with the norms and expectation of the organisation</td>
                                                <td>
                                                    <select name="fit" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Works within appropriate authority and decision making chanels</td>
                                                <td>
                                                    <select name="within" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Demonstrates a sense of responsibility and confidentiality</td>
                                                <td>
                                                    <select name="sense" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Interact effectively and appropriately with suppervisor</td>
                                                <td>
                                                    <select name="interact" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             
                                        </table>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           F.Basic  Work skills:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                        <table class="table table-stripped table-bordered">
                                             <tr>
                                                <td>1 </td>
                                                <td>Report to work as scheduled</td>
                                                <td>
                                                    <select name="report" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Is prompt in showing up to work and meetings</td>
                                                <td>
                                                    <select name="prompt" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Exhibits appositive and constructive attitude</td>
                                                <td>
                                                    <select name="positive" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Brings a sense of values and integrity to the job</td>
                                                <td>
                                                    <select name="bring" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Behaves in an ethical and profesional manner</td>
                                                <td>
                                                    <select name="manner" class="form-control" required>
                                                        <option value="">Select Marks</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                        </table>
                                             
                                     </div>
                                     
                                  </div>
                                  
                                   
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           Additional Comments:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                               <textarea name="comment" class="form-control" id="comment" placeholder="Additional Comments...." required ></textarea>
                                               
                                          </div>
                                             
                                     </div>
                                     
                                     
                                  </div>
                                  <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           Assessor name:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                        
                                            <input type="text" name="assessor" class="form-control" required>   
                                     </div>
                                     
                                     
                                  </div>
                                  
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </form>
                         
                    
                        
                    </div>
                    <!-- /.card-body -->
                   
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <div class="col-md-0"></div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
   
    <!-- /.content -->
@endsection

