@extends('layouts.adminlte')
@section('content')
   @if (session('failed'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('failed') }}
    </div>
  @endif
  
  @if (session('status'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
  @endif
  
   @if (session('notapprove'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('notapprove') }}
    </div>
  @endif
  
   @if (session('noproposal'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('noproposal') }}
    </div>
  @endif
  
  @if (session('projectexist'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('projectexist') }}
    </div>
  @endif
  
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('img/admin.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Admision Number</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Campus</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Project Proposal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Final Projsct</a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                      Submit project proposal
                    </button>
                    <br>
                    <br>
                    <!-- Post -->
                    <div class="post">
                        @if(!empty($studentproject))
                             <table class="table table-bordered table-responsive">
                                  <thead>                  
                                    <tr>
                                     
                                      <th>Project name</th>
                                      <th>Description</th>
                                      <th>Upload</th>
                                      <th>Status</th>
                                      <th>Comment</th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                                        <tr>
                                          <td>{{$studentproject->project_name}}</td>
                                          <td>{{$studentproject->description}}</td>
                                         
                                         <td><a href="http://www.zalegoacademy.com/studentmis/public/projects/{{$studentproject->upload}}" target="_blank">Document Link</a></td>
                                          <td><span class="badge bg-success">{{$studentproject->status}}</span></td>
                                          <td>{{$studentproject->comment}}</td>
                                        </tr>
                                   
                                  </tbody>
                             </table>
                              @else
                              <p>You have not submited your proposal</p>
                        @endif
                       
                       
                    </div>
                    
                    
                      <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Project Proposal</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                              
                             <form role="form" method="POST" action="{{ route('students.insertprojectproposal')}}"  enctype="multipart/form-data">
                                 {{ csrf_field() }}
                              <!-- text input -->
                              <div class="form-group">
                                <label>Student  Name</label>
                                <input type="text" name="name" value="{{$student->full_name}}" class="form-control" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Admision Number</label>
                                <input type="text"  name="student_id" value="{{$student->student_id}}" class="form-control" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Campus</label>
                                <input type="text" name="campus" class="form-control" value="{{$student->campus}}" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" name="project_name" class="form-control">
                              </div>
                              
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                              </div>
                              
                               <div class="form-group">
                                <label>Upload</label>
                                <input type="file" name="upload" class="form-control">
                              </div>
                             
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <input type="submit"  class="btn btn-primary" name="proposal" value="Submit">
                            </div>
                            </form>
                
                              
              
                            </div>
                            
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                     <!-- /.modal -->
                     
                     
                      
                      
      
      
      
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                      Submit final project
                    </button>
                    <br>
                    <br>
                      @if(!empty($finalproject))
                      <table class="table table-bordered table-responsive">
                          <thead>                  
                            <tr>
                             
                              <th>Project name</th>
                              <th>Description</th>
                              <th>Documentation</th>
                              <th>Link</th>
                              <th>Score</th>
                              <th>Comment</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            
                             
                            <tr>
                              <td>{{$finalproject->project_name}}</td>
                              <td>{{$finalproject->description}}</td>
                             <td><a href="http://www.zalegoacademy.com/studentmis/public/projects/{{$finalproject->documentation}}" target="_balnk">Documentation</a></td>
                              <td>{{$finalproject->project_link}}</td>
                              <td>{{$finalproject->comment}}</td>
                              <td><span class="badge bg-success">{{$finalproject->status}}</span></td>
                               
                            </tr>
                            
                          </tbody>
                         
                     </table>
                     @else
                     <p>You have not submited your project</p>
                     @endif
                  <!-- /.tab-pane -->
                  
                  <div class="modal fade" id="modal-lg">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Final Project</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                             
                             
                             <form role="form" method="POST" action="{{ route('students.insertfinalprojectproposal')}}"  enctype="multipart/form-data">
                                 {{ csrf_field() }}
                              <!-- text input -->
                              <div class="form-group">
                                <label>Student  Name</label>
                                <input type="text" name="name" value="{{$student->full_name}}" class="form-control" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Admision Number</label>
                                <input type="text"  name="student_id" value="{{$student->student_id}}" class="form-control" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Campus</label>
                                <input type="text" name="campus" class="form-control" value="{{$student->campus}}" readonly=true>
                              </div>
                              
                               <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" name="project_name" class="form-control">
                              </div>
                              
                              
                            
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                              </div>
                              
                               <div class="form-group">
                                <label>Documentation</label>
                                <input type="file" name="documentation" class="form-control">
                              </div>
                              
                               <div class="form-group">
                                <label>Project Link</label>
                                <input type="text" name="project_link" class="form-control">
                              </div>
                             
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <input type="submit"  class="btn btn-primary" name="proposal" value="Submit">
                            </div>
                            </form>
                
                
                
                            </div>
                           
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                   
                  </div>
                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection