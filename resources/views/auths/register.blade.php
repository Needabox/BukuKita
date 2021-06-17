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
		background-image: url('csslogin/images/regist.jpg');
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

                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('postregist') }}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-51">
						Daftar Kasir Di PlayBook
                    </span>
                    
                    @if(session()->has('message'))
                    <div class=" container alert alert-danger text-center">
                        <strong>{{ session()->get('message') }}</strong>
                        <button class="close" type="button" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Masukan Nama">
						<span class="focus-input100"></span>
						@error('name')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="Masukan Username">
						<span class="focus-input100"></span>
						@error('username')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Masukan Email">
						<span class="focus-input100"></span>
						@error('email')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan Password">
                        <span class="focus-input100"></span>
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Masukan Alamat">
						<span class="focus-input100"></span>
						@error('alamat')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('telepon') is-invalid @enderror" type="text" name="telepon" placeholder="Masukan Telepon">
						<span class="focus-input100"></span>
						@error('telepon')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Buat Akun
						</button>
                    </div>
                    <span>Sudah Punya Akun? Login <a href="{{ route('login') }}">Disini!</a></span>
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