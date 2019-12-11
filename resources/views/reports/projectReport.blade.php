@extends('layouts.adminlte')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Perfomance Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
    <section class="content">
      <div class="container-fluid">
       @if(!empty($data))
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    <select name="year" class="form-control" style="float:right; width:20%">
                        <option value="">Export</option>
                        <option value="">PDF</option> 
                        <option value="">Excel</option>
                    </select>
                    
                    <form  action="{{url('/search')}}" method="get" style="width:40%; float:center;" class="form-inline">
                        <label>Year</label>
                        <select name="year" class="form-control" required>
                            @if(empty($year))
                            <option value="">Select Year</option>
                            <option value="2019">2019</option>
                            @else
                            <option value="{{$year}}">{{$year}}</option>
                           
                            <option value="2019">2019</option>
                            @endif
                            
                           
                        </select>
                        
                        <label>Intake</label>
                        <select name="intake" class="form-control" required>
                            @if(empty($intake))
                             <option value="">Select Intake</option>
                              <option value="Jan-May">Jan-May</option>
                              <option value="May-Aug">May-Aug</option>
                              <option value="Aug-Oct">Aug-Oct</option>
                              <option value="Oct-Dec">Oct-Dec</option>
                            @else
                            <option value="{{$intake}}">{{$intake}}</option>
                              <option value="Jan-May">Jan-May</option>
                              <option value="May-Aug">May-Aug</option>
                              <option value="Aug-Oct">Aug-Oct</option>
                              <option value="Oct-Dec">Oct-Dec</option>
                            @endif
                            
                              
                            
                        </select>
                        
                        <input type="submit" name="submit" class="btn btn-success" value="search">
                    </form>
                
                &nbsp; &nbsp; &nbsp;
                </h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover  table-borderd">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Admision Number</th>
                      <th>Project Title</th>
                      <th>Score</th>
                      <th>Comment</th>
                      <th>Assesor name</th>
                    </tr>
                  </thead>
                
                  <tbody>
                    @foreach($data as $key=>$record) 
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$record->name}}</td>
                      <td>{{$record->admision_number}}</td>
                      <td>{{$record->project_title}}</td>
                      <td>{{$record->total}}</td>
                      <td>{{$record->comment}}</td>
                      <td>{{$record->tutor_name}}</td>
                    </tr>
                   @endforeach
                  </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        @else
        <p style="color:red">No record found</p>
        @endif
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
@endsection