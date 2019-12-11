@extends('layouts.adminlte')
@section('content')

 @if (session('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        {{ session('status') }}
    </div>
@endif

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
      
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Name</th>
                          <th>Admision Number</th>
                        
                          <th>Project Name</th>
                          <th>Description</th>
                          <th>Upload</th>
                          <th>Status</th>
                          <th>Comment</th>
                        
                        </tr>
                    </thead>
                <tbody>
                
                 @foreach($project as $record)
                    <tr>
                     
                     <td><a href="{{URL::to('/admin/students/viewstudentproposal/'.$record->id)}}">{{$record->name}}</a></td>
                     <td><a href="{{URL::to('/admin/students/viewstudentproposal/'.$record->id)}}">{{$record->student_id}}</a></td>
                      
                     
                      <td>{{$record->project_name}}</td>
                      <td>{{$record->description}}</td>
                    
                      <td><a href="http://www.zalegoacademy.com/studentmis/public/projects/{{$record->upload}}" target="_blank">Upload Link</a></td>
                      <td>{{$record->status}}</td>
                      <td>{{$record->comment}}</td>
                      <td>
                    </tr>
                @endforeach
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Admision Number</th>
                 
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Upload</th>
                  <th>Status</th>
                  <th>Comment</th>
                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      
     

      </script>
     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection