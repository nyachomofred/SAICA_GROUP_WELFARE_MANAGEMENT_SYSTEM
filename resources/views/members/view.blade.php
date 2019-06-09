@extends('layouts.header')
@section('content')
<div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('member.index') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Member Profile</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="{{ asset('img/profile/1.jpg')}}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Firstname</b><br /> {{$contact->firstname}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Lastname</b><br />{{$contact->lastname}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email ID</b><br /> {{$contact->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Phone</b><br /> {{$contact->phonenumber}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>ID No</b><br /> {{$contact->id_no}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Gender</b><br /> {{$contact->gender}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Activity</a></li>
                                <li><a href="#reviews"> Biography</a></li>
                                <li><a href="#INFORMATION">Update Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Full Name</b><br /> Fly Zend</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Mobile</b><br /> 01962067309</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Email</b><br /> fly@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Location</b><br /> UK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="content-profile">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Skill Set</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Java</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Php</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 80%;" class="progress-bar progress-green"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Apps</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>C#</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 60%;" class="progress-bar progress-red"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Education</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                            <ul>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Experience</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                            <ul>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Subjects</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                            <ul>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
															</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/3.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Nudge</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Mark Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="{{ asset('img/contact/3.jpg')}}" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form method="POST" action="">
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection