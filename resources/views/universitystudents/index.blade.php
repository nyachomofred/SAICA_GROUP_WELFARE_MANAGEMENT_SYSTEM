
@extends('layouts.adminlte')
@section('content')
@if (session('addstatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('addstatus') }}
    </div>
@endif

@if (session('updatestatus'))
    <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('updatestatus') }}
    </div>
@endif

@if (session('deletestatus'))
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('deletestatus') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@can('isSuper_admin')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">University Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">University Student </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
   @if(!empty($data))
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title"> <a  href="{{route('adduser')}}" class="btn btn-info btn-xs" style="float:right;" data-toggle="modal" data-target="#add" ><i class="fa fa-user-plus"></i> Add New University Student </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp </h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>University/Collage</th>
                      <th>Course</th>
                      <th>Year Of Completion</th>
                      <th>Date Interviewed</th>
                      <th>Speciality</th>
                      <th>Result</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                <tbody>
                  @foreach($data as $key=>$record)
                   <tr>
                       <td>{{++$key}}</td>
                       <td>{{$record->name}}</td>
                       <td>{{$record->email}}</td>
                       <td>{{$record->phone}}</td>
                       <td>{{$record->collage}}</td>
                       <td>{{$record->course}}</td>
                       <td>{{$record->year_of_completion}}</td>
                       <td>{{$record->date_interviewed}}</td>
                       <td>{{$record->speciality}}</td>
                       <td>{{$record->result}}</td>
                       
                        <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action 
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#update{{$record->id}}"><i class="fa fa-edit">Update</i></a>
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#delete{{$record->id}}"><i class="fa fa-trash">Delete</i></a>
                                  </div>
                              </div>
                        </td>
                       
                   </tr>
                   
                   
                   
                   <!---->
                   
                   
                        <!-- Modal for addind univesity student -->
                    <div class="modal fade bd-example-modal-lg" id="update{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.update')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row" style="display:none;">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}">
                                    </div>
                                  </div>
                                  
                                 <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="name" class="form-control" required value="{{$record->name}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text"name="email" class="form-control" required value="{{$record->email}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="phone" class="form-control" required value="{{$record->phone}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="collage" class="form-control" required value="{{$record->collage}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="course" class="form-control" required value="{{$record->course}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="year_of_completion" class="form-control" required value="{{$record->year_of_completion}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="date_interviewed" class="form-control" required value="{{$record->date_interviewed}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="speciality" class="form-control" required value="{{$record->speciality}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                    <div class="col-sm-10">
                                      <textarea name="result" class="form-control" required>{{$record->result}}</textarea>
                                    </div>
                                  </div>
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
                     <div class="modal fade" id="delete{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.delete')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row">
                                   
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}" style="display:none;">
                                    </div>
                                  </div>
                                  
                                
                                  
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
            
                   @endforeach
                </tbody>
               
              </table>
              
              
              <!---->
              
              
              <!-- Modal for addind univesity student -->
                <div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('universitystudents.create')}}" method="Post">
                          @csrf
                          <div class="modal-body">
                             
                             <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text"name="email" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phone" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                <div class="col-sm-10">
                                  <input type="text" name="collage" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-10">
                                  <input type="text" name="course" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                <div class="col-sm-10">
                                  <input type="text" name="year_of_completion" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                <div class="col-sm-10">
                                  <input type="date" name="date_interviewed" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                <div class="col-sm-10">
                                  <input type="text" name="speciality" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                <div class="col-sm-10">
                                  <textarea name="result" class="form-control" required></textarea>
                                </div>
                              </div>
                              
  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:left;">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              <!---->
              
              
              
              
            </div>
            <!-- /.card-body -->
          </div>
         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @endif
    <!-- /.content -->
@endcan


@can('isProject_manager')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">University Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">University Student </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
   @if(!empty($data))
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title"> <a  href="{{route('adduser')}}" class="btn btn-info btn-xs" style="float:right;" data-toggle="modal" data-target="#add" ><i class="fa fa-user-plus"></i> Add New University Student </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp </h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>University/Collage</th>
                      <th>Course</th>
                      <th>Year Of Completion</th>
                      <th>Date Interviewed</th>
                      <th>Speciality</th>
                      <th>Result</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                <tbody>
                  @foreach($data as $key=>$record)
                   <tr>
                       <td>{{++$key}}</td>
                       <td>{{$record->name}}</td>
                       <td>{{$record->email}}</td>
                       <td>{{$record->phone}}</td>
                       <td>{{$record->collage}}</td>
                       <td>{{$record->course}}</td>
                       <td>{{$record->year_of_completion}}</td>
                       <td>{{$record->date_interviewed}}</td>
                       <td>{{$record->speciality}}</td>
                       <td>{{$record->result}}</td>
                       <td>
                           <a href="#" data-toggle="modal" data-target="#update{{$record->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit">Update</i></a>
                       </td>
                       
                   </tr>
                   
                   
                   
                   <!---->
                   
                   
                        <!-- Modal for addind univesity student -->
                    <div class="modal fade bd-example-modal-lg" id="update{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.update')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row" style="display:none;">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}">
                                    </div>
                                  </div>
                                  
                                 <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="name" class="form-control" required value="{{$record->name}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text"name="email" class="form-control" required value="{{$record->email}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="phone" class="form-control" required value="{{$record->phone}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="collage" class="form-control" required value="{{$record->collage}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="course" class="form-control" required value="{{$record->course}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="year_of_completion" class="form-control" required value="{{$record->year_of_completion}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="date_interviewed" class="form-control" required value="{{$record->date_interviewed}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="speciality" class="form-control" required value="{{$record->speciality}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                    <div class="col-sm-10">
                                      <textarea name="result" class="form-control" required>{{$record->result}}</textarea>
                                    </div>
                                  </div>
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
                     <div class="modal fade" id="delete{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.delete')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row">
                                   
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}" style="display:none;">
                                    </div>
                                  </div>
                                  
                                
                                  
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
            
                   @endforeach
                </tbody>
               
              </table>
              
              
              <!---->
              
              
              <!-- Modal for addind univesity student -->
                <div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('universitystudents.create')}}" method="Post">
                          @csrf
                          <div class="modal-body">
                             
                             <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text"name="email" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phone" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                <div class="col-sm-10">
                                  <input type="text" name="collage" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-10">
                                  <input type="text" name="course" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                <div class="col-sm-10">
                                  <input type="text" name="year_of_completion" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                <div class="col-sm-10">
                                  <input type="date" name="date_interviewed" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                <div class="col-sm-10">
                                  <input type="text" name="speciality" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                <div class="col-sm-10">
                                  <textarea name="result" class="form-control" required></textarea>
                                </div>
                              </div>
                              
  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:left;">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              <!---->
              
              
              
              
            </div>
            <!-- /.card-body -->
          </div>
         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @endif
    <!-- /.content -->
@endcan





@can('isIntern')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">University Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">University Student </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
   @if(!empty($data))
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card card-info">
            <div class="card-header">
             
               <h3 class="card-title"> <a  href="{{route('adduser')}}" class="btn btn-info btn-xs" style="float:right;" data-toggle="modal" data-target="#add" ><i class="fa fa-user-plus"></i> Add New University Student </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp </h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>University/Collage</th>
                      <th>Course</th>
                      <th>Year Of Completion</th>
                      <th>Date Interviewed</th>
                      <th>Speciality</th>
                      <th>Result</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                <tbody>
                  @foreach($data as $key=>$record)
                   <tr>
                       <td>{{++$key}}</td>
                       <td>{{$record->name}}</td>
                       <td>{{$record->email}}</td>
                       <td>{{$record->phone}}</td>
                       <td>{{$record->collage}}</td>
                       <td>{{$record->course}}</td>
                       <td>{{$record->year_of_completion}}</td>
                       <td>{{$record->date_interviewed}}</td>
                       <td>{{$record->speciality}}</td>
                       <td>{{$record->result}}</td>
                       <td>
                           <a href="#" data-toggle="modal" data-target="#update{{$record->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit">Update</i></a>
                       </td>
                       
                   </tr>
                   
                   
                   
                   <!---->
                   
                   
                        <!-- Modal for addind univesity student -->
                    <div class="modal fade bd-example-modal-lg" id="update{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.update')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row" style="display:none;">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}">
                                    </div>
                                  </div>
                                  
                                 <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="name" class="form-control" required value="{{$record->name}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text"name="email" class="form-control" required value="{{$record->email}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="phone" class="form-control" required value="{{$record->phone}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="collage" class="form-control" required value="{{$record->collage}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="course" class="form-control" required value="{{$record->course}}">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="year_of_completion" class="form-control" required value="{{$record->year_of_completion}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="date_interviewed" class="form-control" required value="{{$record->date_interviewed}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="speciality" class="form-control" required value="{{$record->speciality}}">
                                    </div>
                                  </div>
                                  
                                   <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                    <div class="col-sm-10">
                                      <textarea name="result" class="form-control" required>{{$record->result}}</textarea>
                                    </div>
                                  </div>
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
                     <div class="modal fade" id="delete{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('universitystudents.delete')}}" method="Post">
                              @csrf
                              <div class="modal-body">
                                 
                                 <div class="form-group row">
                                   
                                    <div class="col-sm-10">
                                      <input type="text" name="id" class="form-control" required value="{{$record->id}}" style="display:none;">
                                    </div>
                                  </div>
                                  
                                
                                  
                                  
      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
            
            
                   @endforeach
                </tbody>
               
              </table>
              
              
              <!---->
              
              
              <!-- Modal for addind univesity student -->
                <div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('universitystudents.create')}}" method="Post">
                          @csrf
                          <div class="modal-body">
                             
                             <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text"name="email" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phonenumber</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phone" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Collage/University</label>
                                <div class="col-sm-10">
                                  <input type="text" name="collage" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-10">
                                  <input type="text" name="course" class="form-control" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Year Of Completion</label>
                                <div class="col-sm-10">
                                  <input type="text" name="year_of_completion" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Date Interviewed</label>
                                <div class="col-sm-10">
                                  <input type="date" name="date_interviewed" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                                <div class="col-sm-10">
                                  <input type="text" name="speciality" class="form-control" required>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Result</label>
                                <div class="col-sm-10">
                                  <textarea name="result" class="form-control" required></textarea>
                                </div>
                              </div>
                              
  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:left;">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              <!---->
              
              
              
              
            </div>
            <!-- /.card-body -->
          </div>
         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @endif
    <!-- /.content -->
@endcan

@endsection