<!doctype html>
<html lang="en">
  <head>

  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('authen/css/style.css') }}">

    <style>
        body {
          background-image: url('backend/images/icon/avatar-03.jpg');
        }
        </style>
	</head>
	<body>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 style="color:rgb(255, 255, 255);">Login</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
						<form  class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
		      		<div class="form-group">
		      			<input type="text" name ="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name= "password" class="form-control rounded-left" placeholder="Password" required>
	            </div>

				<div class="form-group d-md-flex">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login </button>
	            </div>

	            <div class="form-group d-md-flex">

                <div class="w-50 text-md-left">

									<a href="{{route('register')}}"class="txt2 bot1">Sign up</a>
								</div>


								<div class="w-50 text-md-right">
									<a href="{{route('password.request') }}">Forgot Password</a>
								</div>

	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('authen/js/jquery.min.js')}}"></script>
  <script src="{{asset('authen/js/popper.js')}}"></script>
  <script src="{{asset('authen/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('authen/js/main.js')}}"></script>

	</body>
</html>
