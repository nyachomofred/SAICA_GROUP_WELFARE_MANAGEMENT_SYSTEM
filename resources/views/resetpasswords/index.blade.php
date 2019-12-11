
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
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('login_images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						Online Zalego Portal<br>
						
					</span>
					@if (session('status'))
                        <div class="alert alert-success" style="width:600px;">
                          <button type="button" class="close" data-dismiss="alert">×</button>	
                            {{ session('status') }}
                        </div>
                    @endif
				</div>
       
				<form class="login100-form validate-form"  method="POST"  action="{{ route('resetpasswords.confirmemail')}}">
				    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @if (session('failed'))
                        <div class="alert alert-danger">
                            <input type="button" class="close" data-dismiss="alert">X</button>
                            {{ session('failed') }}
                        </div>
                    @endif

				   @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
					
						
						<input id="email" type="email" class="input100 @error('username') is-invalid @enderror" name="email"  required  placeholder="Enter Email address">
						<span class="focus-input100"></span>
					</div>

			
					<div class="container-login100-form-btn" style="width:500px">
						<button type="submit" class="login100-form-btn">
                          Submit
                        </button>
                       
					</div>
				</form>
			</div>
		</div>
	</div>
	


</body>
</html>