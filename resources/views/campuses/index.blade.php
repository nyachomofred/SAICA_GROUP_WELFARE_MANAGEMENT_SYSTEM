

@extends('layouts.adminlte')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Campuses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Campuses </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card card-info">
            <div class="card-header">
             
                <h2 class="card-title">  <a  href="{{route('campuses.create')}}" class="btn btn-info btn-xs" style="float:right;"><i class="fa fa-plus"></i> Add New Campus </a></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                <tbody>
               
                         @foreach($all_campus as $key=>$campus)
                             <tr>
                                  <td>{{++$key}}</td>
                                  <td>{{$campus->name}}</td>
                                  <td>{{$campus->location}}</td>
                                  
                              <td>
                               
                               <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action On Campuses
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{URL::to('/admin/campuses/view/'.$campus->id)}}"><i class="fa fa-edit">Update Campus</i></a>
        
                                  </div>
                               </div>
                            </td>
                           
                             </tr>
                         @endforeach
                        
                </tbody>
               
              </table>
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