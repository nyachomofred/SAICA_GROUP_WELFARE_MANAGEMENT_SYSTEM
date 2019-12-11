@extends('layouts.adminlte')
@section('content')

<div class="row">
    <div class="col-sm-0"></div>
    <div class="col-sm-12">
        
        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('status') }}
            </div>
        @endif
    </div>
    
    <div class="col-sm-0"></div>
</div>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interns</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Interns</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card card-info">
            <div class="card-header">
             
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default" style="float:right;">
                  <i class="fa fa-user-plus">Register Intern</i>
                </button>
        
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(!empty($intern))
                  <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email Address</th>
                              <th>Phonenumber</th>
                             
                              <th>Area of Study</th>
                              <th>Place Of Intern</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($intern as $record)
                        <tr>
                              <td>{{$record->name}}</td>
                              <td>{{$record->email}}</td>
                              <td>{{$record->phonenumber}}</td>
                              <td>{{$record->area_of_study}}</td>
                              <td>{{$record->place_of_intern}}</td>
                             
                              
                              <td>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{URL::to('/admin/interns/view/'.$record->id)}}"><i class="fa fa-eye"></i>Update </a>
                                      <a class="dropdown-item" href="{{URL::to('/admin/interns/delete/'.$record->id)}}"><i class="fa fa-eye"></i>Delete </a>
                                      
                                  </div>
                               </div>
                            </td>
                            
                              
                        </tr>
                         @endforeach
                    </tbody>
                        <tfoot>
                            <tr>
                              <th>Name</th>
                              <th>Email Address</th>
                              <th>Phonenumber</th>
                              <th>Area of Study</th>
                              <th>Place Of Intern</th>
                              <th>Action</th>
                            </tr>
                        </tfoot>
                  </table>
                @else
                  <p style="color:red;">No record for this module</p>
                @endif
               <!-- /.modal for intern-->
               <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add new Intern</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         
                         
                         
                          <form role="form" method="POST" action="{{route('interns.create')}}">
                              {{csrf_field()}}
                                <div class="card-body">
                                    
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email"name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email Address" required>
                                  </div>
                                  
                                     
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Phonenumber</label>
                                    <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1" placeholder="Enter phonenumber..." required>
                                  </div>
                                  
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Area Of Study</label>
                                    <input type="text" name="area_of_study" class="form-control" id="exampleInputEmail1" placeholder="Enter area of study eg python,web..." required>
                                  </div>
                                  
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Place Of Intern</label>
                                     <select class="form-control" name="place_of_intern" required>
                                         <option value="">Select place of intern.......</option>
                                         <option value="Jkuat Juja Campus">Jkuat Juja Campus</option>
                                         <option value="Laikipia Campus">Laikipia Campus</option>
                                         <option value="Westland Campus">Westland Campus</option>
                                     </select>
                                  </div>
                                  
                                 
                                </div>
                                <!-- /.card-body -->
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection