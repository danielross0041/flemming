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
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
	  
			body{
				margin: 0;
				font-size: .9rem;
				font-weight: 400;
				line-height: 1.6;
				color: #212529;
				text-align: left;
				background-color: #f5f8fa;
			}
			.navbar-laravel
			{
				box-shadow: 0 2px 4px rgba(0,0,0,.04);
			}
			.navbar-brand , .nav-link, .my-form, .login-form
			{
				font-family: Raleway, sans-serif;
			}
			.my-form
			{
				padding-top: 1.5rem;
				padding-bottom: 1.5rem;
			}
			.my-form .row
			{
				margin-left: 0;
				margin-right: 0;
			}
			.login-form
			{
				padding-top: 1.5rem;
				padding-bottom: 1.5rem;
			}
			.login-form .row
			{
				margin-left: 0;
				margin-right: 0;
			}
		</style>
	</head>
<body>
	<main class="login-form">
	  <div class="cotainer">
		  <div class="row justify-content-center">
			  <div class="col-md-8">
				  <div class="card">
					  <div class="card-header">Reset Password</div>
					  <div class="card-body">
	  
						  <form action="{{ route('reset.password.post') }}" method="POST">
							  @csrf
							  <input type="hidden" name="token" value="{{ $token }}">
	  
							  <div class="form-group row">
								  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
								  <div class="col-md-6">
									  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
									  @if ($errors->has('email'))
										  <span class="text-danger">{{ $errors->first('email') }}</span>
									  @endif
								  </div>
							  </div>
	  
							  <div class="form-group row">
								  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
								  <div class="col-md-6">
									  <input type="password" id="password" class="form-control" name="password" required autofocus>
									  @if ($errors->has('password'))
										  <span class="text-danger">{{ $errors->first('password') }}</span>
									  @endif
								  </div>
							  </div>
							  <div class="form-group row">
								  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
								  <div class="col-md-6">
									  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
									  @if ($errors->has('password_confirmation'))
										  <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
									  @endif
								  </div>
							  </div>
							  <div class="col-md-6 offset-md-4">
								  <button type="submit" class="btn btn-primary">
									  Reset Password
								  </button>
							  </div>
						  </form>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
	</main>
</body>
</html>