
@extends('layouts.adminlte')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
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
      
          <!-- right column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
               
               <h4> <a href="{{route('students.index')}}"> <i class="fa fa-backward"></i></a>  &nbsp &nbsp  &nbsp Students' Admission Form</h4>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form class="" id="demo-form" data-parsley-validate method="POST" action="{{ url('/admin/students/insert') }}">
           {{ csrf_field() }}
           <div class="card card-info">
            
             <div class="card-header">Personal Information</div>
             <div class="panel-body">
               <div class="row">

                 <div class="col-sm-4">
                      <label for="fullname">I am applying for course period begining* :</label>
                      <select id="heard" class="form-control" required name="course_period">
                          <option value="">Choose..</option>
                          <option value="Full Time Clasess">Full Time Clasess</option>
                          <option value="Evening Clasess">Evening Clasess</option>
                     </select>
                 </div>

                 <div class="col-sm-5">
                     <label for="fullname">Are you self sponsored,if not who is sponsoring you :</label>
                     <select id="heard" class="form-control" required name="self_sponsered">
                      <option value="">Choose..</option>
                      <option value="Self Sponsored">Self Sponsored</option>
                      <option value="Parent/Guardian">Parent/Guardian</option>
                      <option value="Relative">Relative</option>
                      <option value="Employer">Employer</option>
                    </select>
                 </div>

                  <div class="col-sm-3">
                    <label for="fullname">Student Id:</label>
                    <input id="middle-name"  class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id">

                    @error('student_id')
                        <span class="invalid-feedback" role="alert" style="color:red">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Full Name:</label>
                    <input id="middle-name" class="form-control " type="text" name="full_name" required >
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Level:</label>
                    <select id="heard" class="form-control" required name="level">
                      <option value="">Choose..</option>
                      <option value="Basic Level">Basic Level</option>
                      <option value="Advanced Level">Advanced Level</option>
                      <option value="Standard Level">Standard Level</option>
                    </select>
                       
                        
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Birth Certificate No:</label>
                    <input id="middle-name" class="form-control " type="text" name="id_no" required >
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Gender:</label>
                    <select id="heard" class="form-control" required name="gender_gender">
                      <option value="">Choose..</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                 </div> 
                 
                 <div class="col-sm-3">
                   
                     <label for="email">{{ __('E-Mail Address') }}</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                     @error('email')
                        <span class="invalid-feedback" role="alert" style="color:red">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                         
                 </div> 

                  <div class="col-sm-3">
                    <label for="fullname">Phonenumber:</label>
                    <input id="middle-name" class="form-control @error('phonenumber') is-invalid @enderror" type="text" name="phonenumber" value="{{ old('phonenumber') }}" autocomplete="phonenumber">

                    @error('phonenumber')
                        <span class="invalid-feedback" role="alert" style="color:red">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                 </div> 

                <div class="col-sm-3">
                    <label for="fullname">Alternate Phonenumber:</label>
                   
                    <input id="middle-name" class="form-control @error('alternate_phonenumber') is-invalid @enderror" type="text" name="alternate_phonenumber" value="{{ old('alternate_phonenumber') }}" autocomplete="alternate_phonenumber">

                    @error('alternate_phonenumber')
                        <span class="invalid-feedback" role="alert" style="color:red">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Citizenship:</label>
                    <input id="middle-name" class="form-control" type="text" name="citizenship" required>
                 </div>
                 <div class="col-sm-3">
                    <label for="fullname">Marital Status:</label>
                    <p>
                        Maried:
                        <input type="radio" class="flat" name="gender" id="genderM" value="Maried" checked="" required /> Single:
                        <input type="radio" class="flat" name="gender" id="genderF" value="Single" />
                      </p>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Future Career:</label>
                    <input id="middle-name" class="form-control" type="text" name="future_career" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Physical Address:</label>
                    <input id="middle-name" class="form-control" type="text" name="physical_address" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Religion:</label>
                    <input id="middle-name" class="form-control" type="text" name="religion" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Medical Condition:</label>
                    <input id="middle-name" class="form-control" type="text" name="medical_condition" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Campus:</label>
                    <select id="heard" class="form-control" required name="campus">
                      <option value="">Choose..</option>
                      @foreach($campus as $all_campus)
                      <option value="{{$all_campus->name}}">{{$all_campus->name}}</option>
                      @endforeach
                    </select>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Intake:</label>
                    <select id="heard" class="form-control" required name="intake">
                      <option value="">Choose..</option>
                      <option value="Jan-April">Jan-April</option>
                      <option value="May-Aug">May-Aug</option>
                      <option value="Sept-December">Sept-December</option>
                    </select>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Date Of Birth</label>
                    <input  type="date" name="date_of_birth" class="form-control">
                 </div>
             </div>
           </div>

           <div class="card card-info">
            
             <div class="card-header">Sponsor Information</div>
             <div class="panel-body">
               <div class="row">

                 <div class="col-sm-3">
                    <label for="fullname"> Sponsor:</label>
                    <input id="middle-name" class="form-control" type="text" name="sponsor" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Sponsor Title:</label>
                    <input id="middle-name" class="form-control " type="text" name="sponsor_title" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname"> Sponsor Name:</label>
                    <input id="middle-name" class="form-control" type="text" name="sponsor_name" required>
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Sponsor Address :</label>
                    <input id="middle-name" class="form-control " type="text" name="sponsor_address" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Sponsor Phonenumber :</label>
                    <input id="middle-name" class="form-control" type="text" name="sponsor_phonenumber" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Sponsor email :</label>
                    <input id="middle-name" class="form-control" type="text" name="sponsor_email" required>
                 </div>

                

               </div>
             </div>
           </div>
           
          <div class="card card-info">
            
             <div class="card-header">Employer Information</div>
             <div class="panel-body">
                <div class="row">
                   
                 <div class="col-sm-3">
                    <label for="fullname">Employer Title :</label>
                    <input id="middle-name" class="form-control " type="text" name="employer_title" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Employer Name :</label>
                    <input id="middle-name" class="form-control" type="text" name="employer_name" required>
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Company Name :</label>
                    <input id="middle-name" class="form-control " type="text" name="company_name" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Employer Phonenumber :</label>
                    <input id="middle-name" class="form-control " type="text" name="employer_phonenumber" required>
                 </div> 

                 <div class="col-sm-3">
                    <label for="fullname">Employer Email :</label>
                    <input id="middle-name" class="form-control " type="text" name="employer_email" required>
                 </div> 


                </div>
             </div>
           </div>

           <div class="card card-info">
            
             <div class="card-header">Academic  Information</div>
             <div class="panel-body">
               <div class="row">

                 <div class="col-sm-3">
                    <label for="fullname">Name Of School :</label>
                    <input id="middle-name" class="form-control" type="text" name="school_name" required>
                 </div>
                 
                 <div class="col-sm-3">
                    <label for="fullname">Type Of School :</label>
                    <input id="middle-name" class="form-control" type="text" name="type_of_school" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">School Address :</label>
                    <input id="middle-name" class="form-control" type="text" name="school_address" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Location Of School :</label>
                    <input id="middle-name" class="form-control " type="text" name="location" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Year Of  Completion :</label>
                    
                    <input id="middle-name" class="form-control " type="text" name="year_of_completion" required>
                 </div>

                 
                  <div class="col-sm-3">
                    <label for="fullname">Are You Currently Enrolled In School:</label>
                    <p>
                        Yes:
                        <input type="radio" class="flat" name="enrolled_in_school" id="genderM" value="Yes" checked="" required /> No:
                        <input type="radio" class="flat" name="enrolled_in_school" id="genderF" value="No" />
                      </p>
                 </div>

               </div>
             </div>
           </div>

           <div class="card card-info">
            
             <div class="card-header">Collage/University</div>
             <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="fullname">Name Of School :</label>
                        <input id="middle-name" class="form-control" type="text" name="school_attended" required>
                    </div>

                    <div class="col-sm-3">
                    <label for="fullname">Course Studied :</label>
                    <input id="middle-name" class="form-control" type="text" name="course_studied" required>
                 </div>

                 <div class="col-sm-3">
                    <label for="fullname">Date Attended :</label>
                      <input type="date" name="date_attended" required   class="form-control" placeholder="Date Collected">
                 </div>

                </div>
             </div>
           </div>

          <div class="card card-info">
            
             <div class="card-header">Which Course are you applying for</div>
             <div class="panel-body">
               <div class="row">
               
               @foreach($course as $all_course)
               <div class="col-sm-3">
                 
                 
               <input type="checkbox" name="courses[]" id="hobby2" value="{{$all_course->name}}" class="flat" />{{$all_course->name}}
               </div>
               @endforeach
               
               </div>
             </div>
           </div>
          <a class="btn btn-default" href="{{route('students.index')}}">Cancel</a>
          <input type="submit" name="submit" class="btn btn-primary" value="submit">


      </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
           <div class="col-md-0"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
