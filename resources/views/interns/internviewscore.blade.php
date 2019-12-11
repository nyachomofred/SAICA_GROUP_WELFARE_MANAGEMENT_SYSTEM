
@extends('layouts.adminlte')

@section('content')

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
          <div class="col-md-6">
             @if(!empty($general))
              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                    
                    <a href="{{route('interns.assesment')}}"><i class="fa fa-backward"></i></a>
                   &nbsp;&nbsp;
                     
                   General Skills Evaluation   For:  &nbsp;&nbsp; [{{$general->name}}]
                    &nbsp;&nbsp; &nbsp;&nbsp;
                    <a href="{{URL::to('/admin/interns/printgeneralassesment/'.$general->id)}}"><i class="fa fa-print"></i>Print</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                    <div class="card-body">
                        <form role="form" method="POST" action="{{url('/admin/interns/updategeneralassesment/'.$general->id)}}">
                                @if (session('general'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" style="color:white">X</button>
                                        {{ session('general') }}
                                    </div>
                                @endif
                                
                        {{csrf_field()}}
                                
                                  
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
                                                        <option value="{{$general->attension}}">{{$general->attension}}</option>
                                                        
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Asks petinent and purposful questions</td>
                                                <td>
                                                    <select name="petinent" class="form-control" required>
                                                        <option value="{{$general->petinent}}">{{$general->petinent}}</option>
                                                       
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                             <tr>
                                                <td>3</td>
                                                <td>Seeks out and utilizes appropriate resources</td>
                                                <td>
                                                    <select name="resource" class="form-control" required>
                                                        <option value="{{$general->resource}}">{{$general->resource}}</option>
                                                       
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Accept responsibility from mistakes and learn from experiences</td>
                                                <td>
                                                    <select name="mistake" class="form-control" required>
                                                        <option value="{{$general->mistake}}">{{$general->mistake}}</option>
                                                        
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>5</td>
                                                <td>Open to new experiences;take appropriate risks</td>
                                                <td>
                                                    <select name="risk" class="form-control" required>
                                                        <option value="{{$general->risk}}">{{$general->risk}}</option>
                                                        
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
                                                        <option value="{{$general->listen}}">{{$general->listen}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Comprehends and follows verbal instructions </td>
                                                <td>
                                                    <select name="verbal" class="form-control" required>
                                                        <option value="{{$general->verbal}}">{{$general->verbal}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Effectively participate in meetings or group settings </td>
                                                <td>
                                                    <select name="meeting" class="form-control" required>
                                                        <option value="{{$general->meeting}}">{{$general->meeting}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Demonstrate effective verbal communication skills </td>
                                                <td>
                                                    <select name="demonstrate" class="form-control" required>
                                                        <option value="{{$general->demonstrate}}">{{$general->demonstrate}}</option>
                                                       
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
                                                        <option value="{{$general->work}}">{{$general->work}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Demonstarte ability to set appropriate priorities/goals </td>
                                                <td>
                                                    <select name="goal" class="form-control" required>
                                                        <option value="{{$general->goal}}">{{$general->goal}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Exhibits professional behaviour and attitude </td>
                                                <td>
                                                    <select name="attitude" class="form-control" required>
                                                        <option value="{{$general->attitude}}">{{$general->attitude}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Manage personal expectation consistent with work role </td>
                                                <td>
                                                    <select name="manage" class="form-control" required>
                                                        <option value="{{$general->manage}}">{{$general->manage}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Show interest in determining career direction </td>
                                                <td>
                                                    <select name="career" class="form-control" required>
                                                        <option value="{{$general->career}}">{{$general->career}}</option>
                                                       
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
                                                        <option value="{{$general->relate}}">{{$general->relate}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Manage and solve conflict in an effective manner</td>
                                                <td>
                                                    <select name="conflict" class="form-control" required>
                                                        <option value="{{$general->conflict}}">{{$general->conflict}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Control emotions in a manner  appropriate for work</td>
                                                <td>
                                                    <select name="control" class="form-control" required>
                                                        <option value="{{$general->control}}">{{$general->control}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Demonstrate assertive but appropriate behaviour</td>
                                                <td>
                                                    <select name="assertive" class="form-control" required>
                                                        <option value="{{$general->assertive}}">{{$general->assertive}}</option>
                                                        
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
                                                        <option value="{{$general->support}}">{{$general->support}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>2 </td>
                                                <td>Fits in with the norms and expectation of the organisation</td>
                                                <td>
                                                    <select name="fit" class="form-control" required>
                                                        <option value="{{$general->fit}}">{{$general->fit}}</option>
                                                       
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>3 </td>
                                                <td>Works within appropriate authority and decision making chanels</td>
                                                <td>
                                                    <select name="within" class="form-control" required>
                                                        <option value="{{$general->within}}">{{$general->within}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>4 </td>
                                                <td>Demonstrates a sense of responsibility and confidentiality</td>
                                                <td>
                                                    <select name="sense" class="form-control" required>
                                                        <option value="{{$general->sense}}">{{$general->sense}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td>5 </td>
                                                <td>Interact effectively and appropriately with suppervisor</td>
                                                <td>
                                                    <select name="interact" class="form-control" required>
                                                        <option value="{{$general->interact}}">{{$general->interact}}</option>
                                                       
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
                                                        <option value="{{$general->report}}">{{$general->report}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>2 </td>
                                                <td>Is prompt in showing up to work and meetings</td>
                                                <td>
                                                    <select name="prompt" class="form-control" required>
                                                        <option value="{{$general->prompt}}">{{$general->prompt}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>3 </td>
                                                <td>Exhibits appositive and constructive attitude</td>
                                                <td>
                                                    <select name="positive" class="form-control" required>
                                                        <option value="{{$general->positive}}">{{$general->positive}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>4 </td>
                                                <td>Brings a sense of values and integrity to the job</td>
                                                <td>
                                                    <select name="bring" class="form-control" required>
                                                        <option value="{{$general->bring}}">{{$general->bring}}</option>
                                                        
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                              <tr>
                                                <td>5 </td>
                                                <td>Behaves in an ethical and profesional manner</td>
                                                <td>
                                                    <select name="manner" class="form-control" required>
                                                        <option value="{{$general->manner}}">{{$general->manner}}</option>
                                                        
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
                                               
                                               <textarea name="comment" class="form-control" id="comment" placeholder="Additional Comments...." required >{{$general->comment}}</textarea>
                                               
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
                                        
                                            <input type="text" name="assessor" class="form-control" value="{{$general->assessor}}" required>   
                                     </div>
                                     
                                     
                                  </div>
                                  
                            
                        </form>
                         
                    
                        
                    </div>
                    <!-- /.card-body -->
                   
            </div>
            <!-- /.card -->
             @else
             <p style="color:red">There is no General  evaluation for this student</p>
             @endif
          </div>
          <!-- left column -->
          <div class="col-md-6">
            @if(!empty($intern))
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                    
                    <a href="{{route('interns.assesment')}}"><i class="fa fa-backward"></i></a>
                  
                      &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;
                      Technical Skills Evaluation For:  &nbsp;&nbsp; [{{$intern->name}}]
                     
                     
                      &nbsp;&nbsp; 
                     <a href="{{URL::to('/admin/interns/printtechnical/'.$intern->id)}}"><i class="fa fa-print"></i>Print</a>
                </h3>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" style="color:white">X</button>
                        {{ session('status') }}
                    </div>
                @endif

              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                    <div class="card-body">
                        <form role="form" method="POST" action="{{url('/admin/interns/updatetechnical/'.$intern->id)}}">
                        {{csrf_field()}}
                                
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           1. Intern Completed his/her project
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="complete" id="complete" required>
                                                         <option value="{{$intern->complete}}">{{$intern->complete}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea  name="complete_reason" class="form-control"  id="complete_reason">{{$intern->complete_reason}}</textarea>
                                               
                                          
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           2. Project Contain User Regsitation
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1"> Option</label>
                                                    <select class="form-control" name="project_contain_userregistration" id="bonus" required>
                                                         <option value="{{$intern->project_contain_userregistration}}">{{$intern->project_contain_userregistration}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea  name="regisration_reason" class="form-control" id="tan">{{$intern->regisration_reason}}</textarea>
                                               
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           3.User interface complete and is appealing:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1"> Option</label>
                                                    <select class="form-control" name="interface" id="interface" required>
                                                         <option value="{{$intern->interface}}">{{$intern->interface}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea name="interface_reason" class="form-control" id="inter">{{$intern->interface_reason}}</textarea>
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                  
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           4.Database designed and built following best practices of database:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1"> Option</label>
                                                    <select class="form-control" name="databaset" id="database" required>
                                                         <option value="{{$intern->databaset}}">{{$intern->databaset}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea name="database_reason" class="form-control" id="database_reason">{{$intern->database_reason}}</textarea>
                                               
                                              
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           5.Code is legible and neat:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1"> Option</label>
                                                    <select class="form-control" name="code" id="code" required>
                                                         <option value="{{$intern->code}}">{{$intern->code}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="code_reason" class="form-control" id="code_reason">{{$intern->code_reason}}</textarea>
                                               
                                           
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           6.Intern demonstrates a good implementation of alogorithms and functions:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1"> Option</label>
                                                    <select class="form-control" name="algorithm" id="algorithm" required>
                                                         <option value="{{$intern->algorithm}}">{{$intern->algorithm}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea name="algorithm_reason" class="form-control" id="algorithm_reason">{{$intern->algorithm_reason}}</textarea>
                                               
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           7.Intern uploaded their code to repository like Github:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Option</label>
                                                    <select class="form-control" name="github" id="github" required>
                                                         <option value="{{$intern->github}}">{{$intern->github_reason}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea name="github_reason" class="form-control" id="github_reason"></textarea>
                                               
                                          </div>
                                             
                                     </div>
                                     
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           8.Intern covered syllabus for course assigned:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Option</label>
                                                    <select class="form-control" name="syllabus" id="syllabus" required>
                                                         <option value="{{$intern->syllabus}}">{{$intern->syllabus}}</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                              <label>Reason</label>
                                               <textarea name="syllabus_reason" class="form-control" id="syllabus_reason">{{$intern->syllabus_reason}}</textarea>
                                        
                                          </div>
                                             
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
                                               
                                               <textarea name="comment" class="form-control" id="comment">{{$intern->comment}}</textarea>
                                               <br>
                                               <label>Assessor's name</label>
                                               <input type="text" name="assessor" class="form-control" value="{{$intern->assessor}}">
                                               
                                          </div>
                                             
                                     </div>
                                     
                                     
                                  </div>
                                  
                            
                        </form>
                         
                    
                        
                    </div>
                    <!-- /.card-body -->
                   
            </div>
            @else
             <p style="color:red">There is no Technical evaluation for this student</p>
            @endif
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
         
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
   
    <!-- /.content -->
@endsection