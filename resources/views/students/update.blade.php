
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Personal Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-0"> </div>
         @if(!empty($student))
          <!-- right column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
               
              <h5> <a href="{{url('/admin/students/view/'.$student->id)}}"> <i class="fa fa-backward"></i></a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Personal Information  For: {{$student->full_name}}</h5>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form class="" id="demo-form" data-parsley-validate method="POST" action="{{ url('/admin/students/profileupdate/'.$student->id) }}">
           {{ csrf_field() }}
            <div class="card card-success">
              <div class="card-header">Personal Information</div>
             <div class="panel-body">
               <div class="row">

                 <div class="col-sm-4">
                      <label for="fullname">I am applying for course period begining* :</label>
                      <select id="heard" class="form-control" required name="course_period">
                          <option value="{{$student->course_period}}">{{$student->course_period}}</option>
                          <option value="Full Time Clasess">Full Time Clasess</option>
                          <option value="Evening Clasess">Evening Clasess</option>
                     </select>
                 </div>

                 <div class="col-sm-5">
                     <label for="fullname">Are you self sponsored,if not who is sponsoring you :</label>
                     <select id="heard" class="form-control" required name="self_sponsered">
                      <option value="{{$student->self_sponsered}}">{{$student->self_sponsered}}</option>
                      <option value="Self Sponsored">Self Sponsored</option>
                      <option value="Parent/Guardian">Parent/Guardian</option>
                      <option value="Relative">Relative</option>
                      <option value="Employer">Employer</option>
                    </select>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Student Id:</label>
                    <input id="middle-name"  required class="form-control col-md-12 col-xs-12" type="text" name="student_id" value="{{$student->student_id}}">
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Full Name:</label>
                    <input id="middle-name" required class="form-control col-md-12 col-xs-12" type="text" name="full_name" value="{{$student->full_name}}">
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Date Of Birth:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="date_of_birth" value="{{$student->date_of_birth}}">
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Birth Certificate No:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="id_no" value="{{$student->id_no}}">
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Gender:</label>
                    <select id="heard" class="form-control" required name="gender_gender" >
                      <option value="{{$student->gender_gender}}">{{$student->gender}}</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                 </div> 
                 
                 <div class="col-sm-3">
                    <label for="fullname">Email:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="email" value="{{$student->email}}">
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Phonenumber:</label>
                    <input id="middle-name" required class="form-control col-md-12 col-xs-12" type="text" name="phonenumber" value="{{$student->phonenumber}}">
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Alternate Phonenumber:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="alternate_phonenumber" value="{{$student->alternate_phonenumber}}">
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Citizenship:</label>
                    <input id="middle-name" required class="form-control col-md-12 col-xs-12" type="text" name="citizenship" value="{{$student->citizenship}}">
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Marital Status:</label>
                    <select id="heard" class="form-control" required name="gender" >
                      <option value="{{$student->gender}}">{{$student->gender_gender}}</option>
                      <option value="Maried">Maried</option>
                      <option value="Single">Single</option>
                    </select>
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname"> Future Career:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="future_career" value="{{$student->future_career}}">
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Physical Address:</label>
                    <input id="middle-name"   class="form-control col-md-12 col-xs-12" type="text" name="physical_address" value="{{$student->physical_address}}">
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Religion:</label>
                    <input id="middle-name"  class="form-control col-md-12 col-xs-12" type="text" name="religion" value="{{$student->religion}}">
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Medical Condition:</label>
                    <input id="middle-name"   class="form-control col-md-12 col-xs-12" type="text" name="medical_condition" value="{{$student->medical_condition}}">
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Campus:</label>
                    <select id="heard" class="form-control" required name="campus">
                      <option value="{{$student->campus}}">{{$student->campus}}</option>
                      @foreach($campus as $all_campus)
                      <option value="{{$all_campus->id}}">{{$all_campus->name}}</option>
                      @endforeach
                    </select>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Intake:</label>
                    <select id="heard" class="form-control" required name="intake">
                      <option value="{{$student->intake}}">{{$student->intake}}</option>
                      <option value="Jan-May">Jan-May</option>
                      <option value="May-Aug">May-Aug</option>
                      <option value="Aug-Oct">Aug-Oct</option>
                      <option value="Oct-Dec">Oct-Dec</option>
                    </select>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Level:</label>
                    <select id="heard" class="form-control" required name="level">
                      <option value="{{$student->level}}">{{$student->level}}</option>
                      <option value="Basic Level">Basic Level</option>
                      <option value="Advanced Level">Advanced Level</option>
                      <option value="Standard Level">Standard Level</option>
                    </select>
                 </div>
               </div>
             </div>
           </div>
           <br>
           <a class="btn btn-default" href="{{route('students.index')}}">Cancel</a>
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
      </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
          @else
          <p style="color:red">No Record for this student</p>
          @endif
           <div class="col-md-0"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
