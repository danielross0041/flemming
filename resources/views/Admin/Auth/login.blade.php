<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
		<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
		<link rel="shortcut icon" type="image/x-icon" href="images/fwgplogo.png">
		<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css">
		<link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/custome.css') }}" />
		<title>Ken Flemings Dashboard</title>
	</head>
	<body>
		<style>
			body {
				background-color: #EEF2F5;
			}
		</style>
		<div class="container">
			<div class="log_in_page2">
				<div class="frm_catch">
					@if ($message = Session::get('error'))
						<div class="alert alert-danger alert-block">
							<strong>{{ $message }}</strong>
						</div>
					@endif
					<div class="img_area">
						<img src="{{ asset('assets/images/logo-black.svg') }}" alt="Logo">
					</div>
					<form action="{{ route('admin.store') }}" method="POST">
						@csrf
						<h4>Welcome</h4>
						<p>Enter your credentials to access your account.</p>
						<div class="user_name">
							<input type="email" name="email" placeholder="Enter Your Email">
							<span><i class="fa-solid fa-user"></i></span>
							<span class="text-danger"
								style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('email') }}</span>
						</div>
						<div class="user_pass">
							<input type="password" name="password" placeholder="Enter Your Password">
							<span><i class="fa-solid fa-lock"></i></span>
							<span class="text-danger" style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('password') }}</span>
						</div>
						<button type="submit"> Sign in</button>
						<div class="form-group row">
							<div class="col-md-6 offset-md-4">
								<div class="checkbox">
									<label>
										<a href="{{ route('forget.password.get') }}">Reset Password</a>
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
		<script type="text/javascript" src="{{ asset('assets/js/slick.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/typeEffect.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
		<script src="{{ asset('assets/js/custome.js') }}"></script>
		<script src="{{ asset('assets/js/script.js') }}"></script>
	</body>
</html>
