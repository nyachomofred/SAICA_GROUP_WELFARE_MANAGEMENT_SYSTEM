<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zalego Academy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css ')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.css ')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css ')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> Sign Out
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
           <a  class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                                   
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
     
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('img/zalegoadminlte.jpeg')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Zalego Academy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/admin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @guest
          <a href="{{route('home')}}" class="d-block">User</a>
          @else
           <a href="{{route('home')}}" class="d-block">{{Auth::user()->name}}</a>
          @endguest
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    @can('isAdmin')
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Profile
               
              </p>
            </a>
          </li>
          
          
          
          <li class="nav-item">
            <a href="{{route('courses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Courses
               
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('studentusers.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               student
               
              </p>
            </a>
          </li>
          
         
          
           <li class="nav-item">
            <a href="{{route('students.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Admission
               
              </p>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a href="{{route('students.evaluation')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Student Assesment
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('certificates.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Certifiate
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Student Finance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('finances.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('finances.debitedstudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Debited Student</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
           <li class="nav-item">
            <a href="{{route('highschoolcontacts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               High School Contacts
               
              </p>
            </a>
          </li>
          
         
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reports.assesmentreport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Assesment Report</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('reports.feeReport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Payment Report</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          @endcan
          
          
          @can('isTrainer')
          
           <li class="nav-item">
            <a href="{{route('students.evaluation')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Student Assesment
               
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Profile
               
              </p>
            </a>
          </li>
          
         
          
         @endcan
         
         @can('isProject_manager')
         
         <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Profile
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Student Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.submitedproposal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposals</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('students.submitedfinalproject')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Final Projects</p>
                </a>
              </li>
            </ul>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Interns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('interns.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('interns.assesment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intern Assesment</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          
           <li class="nav-item">
            <a href="{{route('universitystudents.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               University Students
               
              </p>
            </a>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reports.assesmentreport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Assesment Report</p>
                </a>
              </li>
              
            </ul>
          </li>
          
         @endcan
         
         @can('isSuper_admin')
         
         
         <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               My Profile
               
              </p>
            </a>
          </li>
          
          
         <li class="nav-item">
            <a href="{{route('user')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Users
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{route('courses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Course
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('zalegoclases.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Classes
               
              </p>
            </a>
          </li>
          
           
          <li class="nav-item">
            <a href="{{route('campuses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Campus
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('students.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Admission
               
              </p>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a href="{{route('students.evaluation')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Student Assesment
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('certificates.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Certifiate
               
              </p>
            </a>
          </li>
          
          
          
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Assets Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                
              <li class="nav-item">
                <a href="{{route('assets.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Asset</p>
                </a>
              </li>
              
              <li class="nav-item">
              <a href="{{route('assets.allasset')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Assets</p>
                </a>
              </li>
              
               
              <li class="nav-item">
                <a href="{{route('assets.deployed')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deployed Assets</p>
                </a>
              </li>
              
               <li class="nav-item">
                <a href="{{route('assets.notdeployed')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assets Not Deployed</p>
                </a>
              </li>
              
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asset That are Checkin</p>
                </a>
              </li>
              
              
               <li class="nav-item">
                <a href="{{route('assets.maintainance')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assets Under Maintainanc And Repair</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asset Documentation</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
          
  
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Student Finance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('finances.registrationfee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay Regsistration Fee</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('finances.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Debit Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('finances.debitedstudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Payment</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Student Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.submitedproposal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposals</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('students.submitedfinalproject')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Final Projects</p>
                </a>
              </li>
            </ul>
          </li>
          
           <li class="nav-item">
            <a href="{{route('highschoolcontacts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               High School Contacts
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{route('attachees.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Attachees
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('universitystudents.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               University Students
               
              </p>
            </a>
          </li>
          
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Interns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('interns.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('interns.assesment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intern Assesment</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reports.assesmentreport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Assesment Report</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('reports.feeReport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Payment Report</p>
                </a>
              </li>
            </ul>
          </li>
         
         @endcan
         
         @can('isFinance_officer')
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Student Finance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('finances.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('finances.debitedstudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Debited Student</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="{{route('reports.feeReport')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Payment Report</p>
                </a>
              </li>
            </ul>
          </li>
          
         
         @endcan
         
         @can('isIntern')
         
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               My Profile
               
              </p>
            </a>
          </li>
          
        
          
          <li class="nav-item">
            <a href="{{route('courses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Course
               
              </p>
            </a>
          </li>
          
          
           
          <li class="nav-item">
            <a href="{{route('campuses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Campus
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('students.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Admission
               
              </p>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a href="{{route('universitystudents.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               University Students
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('highschoolcontacts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               High School Contacts
               
              </p>
            </a>
          </li>
          
      
          <li class="nav-item">
            <a href="{{route('certificates.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Certifiate
               
              </p>
            </a>
          </li>
          
         
         @endcan
         
         @can('isStudent')
         <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Profile
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{route('studentprojects.proposal')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               proposal
               
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('studentprojects.finalproject')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               final Projects
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{route('studentfinance.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Fee Record
               
              </p>
            </a>
          </li>
          
          
         @endcan
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
   @include('sweetalert::alert')
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
   <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Zalego Academy</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js ')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js ')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.js ')}}"></script>
<!-- FastClick -->
<script src="{{ asset('adminlte/plugins/fastclick/fastclick.js ')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js ')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js ')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
