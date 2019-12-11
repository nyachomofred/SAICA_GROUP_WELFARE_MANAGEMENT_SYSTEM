@extends('layouts.layout')
@section('content')

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Form Wizards <small>Sessions</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


      <!-- Smart Wizard -->
      <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
      <div id="wizard" class="form_wizard wizard_horizontal">
        <ul class="wizard_steps">
          <li>
            <a href="#step-1">
              <span class="step_no">1</span>
              <span class="step_descr">
                                Step 1<br />
                                <small>Step 1 Personal Information</small>
                            </span>
            </a>
          </li>
          <li>
            <a href="#step-2">
              <span class="step_no">2</span>
              <span class="step_descr">
                                Step 2<br />
                                <small>Step 2 Personal</small>
                            </span>
            </a>
          </li>
          <li>
            <a href="#step-3">
              <span class="step_no">3</span>
              <span class="step_descr">
                                Step 3<br />
                                <small>Step 3 Sponsor Information</small>
                            </span>
            </a>
          </li>
          <li>
            <a href="#step-4">
              <span class="step_no">4</span>
              <span class="step_descr">
                                Step 4<br />
                                <small>Step 4 Employer Information</small>
                            </span>
            </a>
          </li>

          <li>
            <a href="#step-5">
              <span class="step_no">5</span>
              <span class="step_descr">
                                Step 5<br />
                                <small>Step 5 Acdemic Information</small>
                            </span>
            </a>
          </li>

          <li>
            <a href="#step-6">
              <span class="step_no">6</span>
              <span class="step_descr">
                                Step 6<br />
                                <small>Step 6 College/University</small>
                            </span>
            </a>
          </li>

          <li>
            <a href="#step-7">
              <span class="step_no">7</span>
              <span class="step_descr">
                                Step 7<br />
                                <small>Step 7 Course Applied</small>
                            </span>
            </a>
          </li>

        </ul>
        <div id="step-1">
        <h2 class="StepTitle">Step 2 Content</h2>

          <form class="form-horizontal form-label-left">

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">I am applying for course period begining<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="course_period">
                      <option value="">Choose..</option>
                      <option value="Full Time Clasess">Full Time Clasess</option>
                      <option value="Evening Clasess">Evening Clasess</option>
                     </select>
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Are you self sponsored,if not who is sponsoring you <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="sponsor">
                      <option value="">Choose..</option>
                      <option value="Self Sponsored">Self Sponsored</option>
                      <option value="Parent/Guardian">Parent/Guardian</option>
                      <option value="Relative">Relative</option>
                      <option value="Employer">Employer</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Student Id</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="student_id">
                  </div>
                </div>

                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Full Name</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="name">
                  </div>
                </div>
              
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth (dd/mm/yyy)</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="date_of_birth">
                  </div>
                </div>
                


                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">National Id No/Birth Certificate No/Passport No</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="id_no">
                  </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gender <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="gender">
                      <option value="">Choose..</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
              </div>

          </form>

        </div>
        <div id="step-2">
          <h2 class="StepTitle">Step 2 Content</h2>

          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="email">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phonenumber<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="phonenumber">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alternate Phonenumber<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="alternate_phonenumber">
                  </div>
              </div>
              
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Citizenship<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="citizenship">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Marital Status<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>
                        Maried:
                        <input type="radio" class="flat" name="gender" id="genderM" value="Maried" checked="" required /> Single:
                        <input type="radio" class="flat" name="gender" id="genderF" value="Single" />
                      </p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Future Career<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="future_career">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Physiccal Address<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea id="message" required="required" class="form-control" name="physical_address" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="50" data-parsley-minlength-message="You need to enter at least a 30 caracters long comment.." data-parsley-validation-threshold="10"></textarea>      
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Religion<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="religion">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Medical Condition<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="medical_condition">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Campus <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="campus">
                      <option value="">Choose..</option>
                      @foreach($campus as $all_campus)
                      <option value="{{$all_campus->id}}">{{$all_campus->name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Intake <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="intake">
                      <option value="">Choose..</option>
                      <option value="Jan-May">Jan-May</option>
                      <option value="May-Aug">May-Aug</option>
                      <option value="Aug-Oct">Aug-Oct</option>
                      <option value="Oct-Dec">Oct-Dec</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Level <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" required name="intake">
                      <option value="">Choose..</option>
                      <option value="Basic Level">Basic Level</option>
                      <option value="Advanced Level">Advanced Level</option>
                      <option value="Standard Level">Standard Level</option>
                    </select>
                  </div>
              </div>



          </form>

        </div>
        <div id="step-3">
          <h2 class="StepTitle">Sponsor Information</h2>
          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>
            
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Who Is Sponsoring You ? <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" required name="sponsor">
                    <option value="">Choose..</option>
                    <option value="Parent/Guardian">Parent/Guardian</option>
                    <option value="Relative">Relative</option>
                    <option value="Employer">Employer</option>
                  </select>
                </div>
            </div>

            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sponsor Title<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sponsor_title">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sponsor Name<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sponsor_name">
              </div>
            </div>
            
            <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sponsor Address<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea id="message" required="required" class="form-control" name="sponsor_address" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="50" data-parsley-minlength-message="You need to enter at least a 30 caracters long comment.." data-parsley-validation-threshold="10"></textarea>      
                  </div>
            </div> 
            

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sponsor Phonenumber<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sponsor_Phonenumber">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sponsor Email<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sponsor_email">
              </div>
            </div>
          </form>
        </div>
        <div id="step-4">
          <h2 class="StepTitle">Step 4 Content</h2>
          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>
            
            

           
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Employer Title<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="employer_title">
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Employer Name<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="employer_name">
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Company Name<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="company_name">
             </div>
           </div>
           
          
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Employer Phonenumber<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="employer_Phonenumber">
             </div>
           </div> 

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Employer Email<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="employer_email">
             </div>
           </div>
         </form>
        </div>

        <div id="step-5">
          <h2 class="StepTitle">Academic Information</h2>
          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">School Name<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="school_name">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Type Of School<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="type_of_school">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">School Address<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="message" required="required" class="form-control" name="school_address" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="50" data-parsley-minlength-message="You need to enter at least a 30 caracters long comment.." data-parsley-validation-threshold="10"></textarea>      
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Location Of School (City or Town)<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="school_location">
              </div>
            </div> 
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Year Of Completion<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Year_of_completion">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Are You Currently Enrolled In school<span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" required name="sponsor">
                    <option value="">Choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="Yes">No</option>
                  </select>
                </div>
            </div> 

          </form>
        </div>

        <div id="step-6">
          <h2 class="StepTitle">Academic Information</h2>
          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">School Name<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="collage_name">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Course Studied<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="collage_course">
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date Attended<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Date_attended">
              </div>
            </div> 
          </form>
        </div>

        <div id="step-7">
          <h2 class="StepTitle">Academic Information</h2>
          <form class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date Attended<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Date_attended">
              </div>
            </div> 
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
          </form>
        </div>

        
      </div>
      <!-- End SmartWizard Content -->

    </div>
  </div>
</div>
</div>
@endsection

@push('scripts')
    <script>
    
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    </script>
@endpush