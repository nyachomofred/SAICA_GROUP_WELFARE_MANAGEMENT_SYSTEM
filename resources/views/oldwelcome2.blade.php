
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zalego Academy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login_images/icons/favicon.ico ') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style="font-size:1000px;">
	
	
	<div class="limiter">
	    
		<div class="container-login100">
		         @if (session('status'))
                    <div class="alert alert-success">
                   
                    </div>
                 @endif
                 
			<div class="wrap-login100">
			    
				<div class="login100-form-title" style="background-image: url({{asset('login_images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						Online Zalego Portal<br>
						Choose Login Option
					</span>
				</div>

                
			
				<form class="login100-form validate-form"  method="POST"  action="{{ route('admin.login.submit') }}">
				   @csrf
					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="{{route('login')}}" class="txt1">
							  
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn" style="width:500px">
					    <select name="CHOICE" class="input100" onchange="location = this.value;" style="width:200px;height:40px;">
                            <option value="#">Choose Login option</option>
                            <option value="admin/login">Admin</option>
                             <option value="login">Student</option>
                           
                        </select>
                    
					</div>
				</form>
			</div>
		</div>
	</div>
	


</body>
</html>