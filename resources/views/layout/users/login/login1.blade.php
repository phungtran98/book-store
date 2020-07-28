<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập | MeoMeo Book</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('bookshop/img/logo/icons8-cat-96.png')}}" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('/bookshop/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/bookshop/login/css/main.css')}}">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('/bookshop/login/images/bg2.jpg')}});">
					<span class="login100-form-title-1">
						Đăng nhập
					</span>
				</div>

				<form class="login100-form validate-form" action="{{ route('postLogin') }}"  method="POST">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tài khoản</span>
						<input class="input100" type="text" name="username" placeholder="Nhập tài khoản">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							
						</div>
					</div>

					<div class="container">
						<div class="row" style="margin-left: -100px;">
							<div class="col-md-6">
								<div class="container-login100-form-btn">
									<button class="login100-form-btn">
										Đăng nhập
									</button>
								</div>
							</div>
							<div class="col-md-6">
								<div class="container-login100-form-btn">
									<button class="login100-form-btn_1 ">
										Đăng ký
									</button>
								</div>
							</div>
						</div>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('/bookshop/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('/bookshop/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/bookshop/login/js/main.js')}}"></script>

</body>
</html>