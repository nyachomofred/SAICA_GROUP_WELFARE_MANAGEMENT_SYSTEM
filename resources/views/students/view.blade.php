
@extends('layouts.adminlte')
@section('content')
   
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="card card-info">
  <div class="card-header">User Profile</div>
  <div class="card-body">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                @if(!empty($student))
              <div class="col-md-3">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                     @if(!empty($student->photo))
                      <img class="profile-user-img img-fluid img-circle"
                      
                           src="{{asset('img/'.$student->photo)}}"
                           alt="User profile picture">
                     @else
                     
                      <img class="profile-user-img img-fluid img-circle"
                      
                           src="{{asset('img/logo.jpg')}}"
                           alt="User profile picture">
                           
                     @endif
                    </div>
    
                    <h3 class="profile-username text-center">{{$student->full_name}}  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">update photo</a></h3>
                   
    
                   
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Name</b> <a class="float-right">{{$student->full_name}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Admision Number</b> <a class="float-right">{{$student->student_id}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Campus</b> <a class="float-right">{{$student->campus}}</a>
                      </li>
                    </ul>
    
                    <a href="{{URL::to('/admin/students/update/'.$student->id)}}" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
                     <a href="{{URL::to('/admin/students/delete/'.$student->id)}}"><b></b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
               
              </div>
              @else
              <p style="color:red">No records for personal Informations</p>
              @endif
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Sponsor Information</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Employer Information</a></li>
                       <li class="nav-item"><a class="nav-link" href="#academic" data-toggle="tab">Academic Information</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="#collage" data-toggle="tab">Collage/University</a></li>
                     
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        
                      
                        <!-- Post -->
                        <div class="post">
                            <!-- start user projects -->
                            @if(!empty($sponsorinfo))
                                <table class="data table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                     
                                      <th>Sponsor</th>
                                      <th>Sponsor Title</th>
                                      <th>Sponsor Name</th>
                                      <th>Sponsor Address</th>
                                      <th>Sponsor Phonenumber</th>
                                      <th>Sponsor Email</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                     
                                     <td>{{$sponsorinfo->sponsor}}</td>
                                     <td>{{$sponsorinfo->sponsor_title}}</td>
                                     <td>{{$sponsorinfo->sponsor_name}}</td>
                                     <td>{{$sponsorinfo->sponsor_address}}</td>
                                     <td>{{$sponsorinfo->sponsor_phonenumber}}</td>
                                     <td>{{$sponsorinfo->sponsor_email}}</td>
                                    <td> <a href="{{URL::to('/admin/students/sponsorview/'.$sponsorinfo->id)}}"class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Update</a></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                            @else
                            <p style="color:red">No record for Sponsor information</p>
                            @endif
                                <!-- end user projects -->
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
                       
                        <!-- start user projects -->
                        @if(!empty($employerinfo))
                            <table class="data table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                    
                                      <th>Employer Title</th>
                                      <th>Employer Name</th>
                                      <th>Company Name</th>
                                      <th>Employer Phonenumber</th>
                                      <th>Employer Email</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                     <td>{{$employerinfo->employer_title}}</td>
                                     <td>{{$employerinfo->employer_name}}</td>
                                     <td>{{$employerinfo->company_name}}</td>
                                     <td>{{$employerinfo->employer_phonenumber}}</td>
                                     <td>{{$employerinfo->employer_email}}</td>
                                     <td> <a href="{{URL::to('/admin/students/employerview/'.$employerinfo->id)}}"class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Update</a></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                            <!-- end user projects -->
                        @else
                         <p style="color:red">No record for Sponsor information</p>
                        @endif
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
                      
                       <div class=" tab-pane" id="academic">
                        
                        <!-- Post -->
                              <div class="post">
                            <!-- start user projects -->
                            @if(!empty($academicinfo))
                                <table class="data table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                     
                                      <th>Name of School</th>
                                      <th>Type Of School</th>
                                      <th>School Address</th>
                                      <th>Location</th>
                                      <th>Year OF Completetion</th>
                                      <th>Currently Enrolled In School</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                     
                                     <td>{{$academicinfo->school_name}}</td>
                                     <td>{{$academicinfo->type_of_school}}</td>
                                     <td>{{$academicinfo->school_address}}</td>
                                     <td>{{$academicinfo->location}}</td>
                                     <td>{{$academicinfo->year_of_completion}}</td>
                                     <td>{{$academicinfo->enrolled_in_school}}</td>
                                     <td> <a href="{{URL::to('/admin/students/academicview/'.$academicinfo->id)}}"class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Update</a></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                                <!-- end user projects -->
                            @else
                             <p style="color:red">No record for this student</p>
                            @endif
                        </div>
                        
                        <!-- /.post -->
                      </div>
                      
                       <div class=" tab-pane" id="collage">
                       
                           <div class="post">
                            <!-- start user projects -->
                            @if(!empty($collageinfo))
                                <table class="data table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                     
                                      <th>School Attended</th>
                                      <th>Course Studied</th>
                                      <th>Date Attended</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                      <td>{{$collageinfo->school_attended}}</td>
                                      <td>{{$collageinfo->course_studied}}</td>
                                      <td>{{$collageinfo->date_attended}}</td>
                                      <td> <a href="{{URL::to('/admin/students/collageview/'.$collageinfo->id)}}"class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Update</a></td>
                                      
                                    </tr>
                                    
                                  </tbody>
                                </table>
                                <!-- end user projects -->
                            @else
                            <p style="color:red">No record for collage information</p>
                            @endif
                        </div>
                        <div>
                        
          
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
    </div>
 </div>  
    
    <!--picture modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form name="photo-form" method="POST" action="{{route('students.updatephoto')}}" enctype="multipart/form-data">
       @csrf
      <div class="modal-body">
        <input type="text" name="id" class="form-control" value="{{$student->id}}" style="display:none">
         <input type="file" name="photo" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
      </div>
     </form>
    </div>
  </div>
</div>
    <!--end of modal picture--->
@endsection