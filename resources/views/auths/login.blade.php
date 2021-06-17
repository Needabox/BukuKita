<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login PlayBook</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/mylogo1.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/css/main.css')}}">
<!--===============================================================================================-->

<style>
	body{
		background-image: url('csslogin/images/bg.jpg');
    	background-position: center;
    	background-attachment: fixed;
    	background-size: cover;
	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('postlogin') }}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-51">
						PlayBook
                    </span>
                    
                    @if(session()->has('message'))
                    <div class=" container alert alert-success text-center">
                        <strong>{{ session()->get('message') }}</strong>
                        <button class="close" type="button" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
					@endif
					
                    @if(session()->has('error'))
                    <div class=" container alert alert-danger text-center">
                        <strong>{{ session()->get('error') }}</strong>
                        <button class="close" type="button" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
					@endif
					
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						@error('username')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<span class="text-center">Belum Punya Akun? Daftar <a href="{{ route('register') }}">Disini !</a></span>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('csslogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('csslogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('csslogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/js/main.js')}}"></script>

</body>
</html>