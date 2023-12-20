<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot-password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('authen/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot your password?</h2>
                       <h6>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one</h6>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
                  <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
						<form  class="login-form" method="POST" action= "{{ route('password.email') }}">
        @csrf

				     <div class="form-group">
		      			<input  type="email" name ="email" class="form-control rounded-left" placeholder="Email" required>
		      		</div>
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

				    <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Email Password Reset Link</button>
	            </div>
	            <div class="form-group d-md-flex">

                <div class="w-30 text-md-right">
                    
								
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

