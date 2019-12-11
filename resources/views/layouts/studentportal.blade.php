<!DOCTYPE html>
<!-- 
Conquer Template
http://www.templatemo.com/preview/templatemo_426_conquer
-->
<head>
<title>zalego Academy</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Style Sheets -->
<link rel="stylesheet" href="{{ asset('c/animate.css') }}">
<link rel="stylesheet" href="{{ asset('c/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('c/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('c/templatemo_misc.css') }}">
<link rel="stylesheet" href="{{ asset('c/templatemo_style.css') }}">
<link rel="stylesheet" href="{{ asset('c/styles.css') }}">
<!-- JavaScripts -->
<script src="{{ asset('j/jquery-1.11.1.min.js')}}"></script>
<script src=" asset('j/bootstrap-dropdown.js')}}"></script>
<script src=" asset('j/bootstrap-collapse.js')}}"></script>
<script src=" asset('j/bootstrap-tab.js')}}"></script>
<script src=" asset('j/jquery.singlePageNav.js')}}"></script>
<script src=" asset('j/jquery.flexslider.js')}}"></script>
<script src=" asset('j/custom.js')}}"></script>
<script src=" asset('j/jquery.lightbox.js')}}"></script>
<script src=" asset('j/templatemo_custom.js')}}"></script>
<script src=" asset('j/responsiveCarousel.min.js')}}"></script>
</head>
<body>
<!-- header start -->
<div id="templatemo_home_page">
  <div class="templatemo_topbar">
    <div class="container">
      <div class="row">
        <div class="templatemo_titlewrapper"><img src="{{ asset('images/templatemo_logobg.png') }}" alt="logo background">
          <div class="templatemo_title"><span>Zalego Academy</span></div>
        </div>
        <div class="clear"></div>
        <div class="templatemo_titlewrappersmall">Conquer</div>
        <nav class="navbar navbar-default templatemo_menu" role="navigation">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="top-menu">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a class="menu" href="{{URL::to('/')}}">Home</a></li>
                  <li><a class="menu" href="{{route('login')}}">Student Portal</a></li>
                  <li><a class="menu" href="{{route('login')}}">Projects</a></li>
                  <li><a class="menu" href="{{route('register')}}">Register</a></li>
                  <li><a class="menu" href="{{route('login')}}">Login</a></li>
                </ul>
              </div>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="{{ asset('images/templatemo_logobg.png') }}" alt="Slide 1"></li>
        <li><img src="{{ asset('images/slider/2.jpg') }}" alt="Slide 2"></li>
        <li><img src="{{ asset('images/slider/3.jpg') }}" alt="Slide 3"></li>
      </ul>
    </div>
  </div>
  
</div>
<!-- header end -->
<div class="clear" style="height:150px;"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
 @yield('content')

<!-- team end -->
<div class="clear"></div>

<!-- footer start -->
<div class="templatemo_footerwrapper">
  <div class="container">'
    <div class="row">'
      <div class="col-md-12">Copyright &copy; 2019 <a href="#">Zalego Academy</a> |</div>
    </div>
  </div>
</div>
</body>
</html>