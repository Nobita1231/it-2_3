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
					<h2 style="color:rgb(255, 255, 255);">Sign up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign up</h3>
						<form  class="login-form" method="POST" action= "{{ route('register') }}">
        @csrf
		      		<div class="form-group">
		      			<input  id="name" type="text" name ="name" class="form-control rounded-left" placeholder="Name" required>

		      		</div>

					 <div class="form-group">
		      			<input type="text" name ="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>

					  <div class="form-group">
		      			<input  type="text" name ="phone" class="form-control rounded-left" placeholder="Phone" required>
		      		</div>

					  <div class="form-group">
		      			<input  type="email" name ="email" class="form-control rounded-left" placeholder="Email" required>
		      		</div>

					<div class="form-group d-flex">
	              <input type="password" name= "password" class="form-control rounded-left" placeholder="Password" required>
	            	</div>


				  <div class="form-group d-flex">
	              <input type="password" name= "password_confirmation" class="form-control rounded-left" placeholder="Comfirm Password " required>
	            </div>



				<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
	            </div>
	            <div class="form-group d-md-flex">

                <div class="w-30 text-md-right">

									<a href="{{ route('login') }}"class="txt2 bot1">Go to Sign in now</a>
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

