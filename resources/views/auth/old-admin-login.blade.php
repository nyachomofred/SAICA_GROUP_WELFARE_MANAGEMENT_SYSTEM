
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
<body>
	
	
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
						Admin login
					</span>
				</div>

                
			
				<form class="login100-form validate-form"  method="POST"  action="{{ route('admin.login.submit') }}">
				   @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
					
						
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						
						 <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
						
							
						</div>

						<div>
							<a href="{{route('students.adminforgotpassword')}}" class="txt1">
							 Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn" style="width:500px">
						<button type="submit" class="login100-form-btn">
                          Login
                        </button>
                       
					</div>
				</form>
			</div>
		</div>
	</div>
	


</body>
</html>