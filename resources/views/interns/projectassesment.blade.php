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
                        <form role="form" method="POST" action="{{route('interns.interprojectassesment')}}">
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
                                                   
                                                    <input type="hidden" name="table_id" value="{{$intern->id}}" class="form-control">
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
                                           1. Intern Completed his/her project
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="complete" id="complete" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea  name="complete_reason" class="form-control" id="complete_reason" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#complete').change(function() {
                                                    if($("#complete option:selected").text()==='No'){
                                                        $("#complete_reason").show();
                                                    }else{
                                                         $("#complete_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
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
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="project_contain_userregistration" id="bonus" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea  name="regisration_reason" class="form-control" id="tan" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#bonus').change(function() {
                                                    if($("#bonus option:selected").text()==='No'){
                                                        $("#tan").show();
                                                    }else{
                                                         $("#tan").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
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
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="interface" id="interface" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="interface_reason" class="form-control" id="inter" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#interface').change(function() {
                                                    if($("#bonus option:selected").text()==='No'){
                                                        $("#inter").show();
                                                    }else{
                                                         $("#inter").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
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
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="databaset" id="database" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="database_reason" class="form-control" id="database_reason" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#database').change(function() {
                                                    if($("#database option:selected").text()==='No'){
                                                        $("#database_reason").show();
                                                    }else{
                                                         $("#database_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           3.Code is legible and neat:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="code" id="code" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="code_reason" class="form-control" id="code_reason" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#code').change(function() {
                                                    if($("#code option:selected").text()==='No'){
                                                        $("#code_reason").show();
                                                    }else{
                                                         $("#code_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           3.Intern demonstrates a good implementation of alogorithms and functions:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="algorithm" id="algorithm" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="algorithm_reason" class="form-control" id="algorithm_reason" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#algorithm').change(function() {
                                                    if($("#algorithm option:selected").text()==='No'){
                                                        $("#algorithm_reason").show();
                                                    }else{
                                                         $("#algorithm_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
                                          </div>
                                             
                                     </div>
                                     
                                  </div>
                                   <div class="card card-info">
                                     <div class="card-header">
                                          <h3 class="card-title">
                                           3.Intern uploaded their code to repository like Github:
                                        </h3>
                                     </div>
                                     <div class="card-body">
                                         <div class="form-group">
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="github" id="github" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="github_reason" class="form-control" id="github_reason" style="display:none;" placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#github').change(function() {
                                                    if($("#github option:selected").text()==='No'){
                                                        $("#github_reason").show();
                                                    }else{
                                                         $("#github_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
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
                                               
                                                    <label for="exampleInputEmail1">Select Option</label>
                                                    <select class="form-control" name="syllabus" id="syllabus" required>
                                                         <option value="">Select Option</option>
                                                         <option value="Yes">Yes</option>
                                                         <option value="No">No</option>
                                                        
                                                     </select>
                                              <br>
                                               <textarea name="syllabus_reason" class="form-control" id="syllabus_reason" style="display:none;"  placeholder="If no,explain why"></textarea>
                                               
                                               
                                               
                                               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                                                </script>
                                                <script>
                                                $(document).ready(function(){
                                                    $('#syllabus').change(function() {
                                                    if($("#syllabus option:selected").text()==='No'){
                                                        $("#syllabus_reason").show();
                                                    }else{
                                                         $("#syllabus_reason").hide();
                                                    }
                                                   
                                                  });  
                                                });
                                                </script>
                                               

                                          
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
                                               
                                               <textarea name="comment" class="form-control" id="comment" placeholder="Additional Comments...."></textarea>
                                               <br>
                                               <label>Assessor's name</label>
                                               <input type="text" name="assessor" class="form-control">
                                               
                                          </div>
                                             
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

