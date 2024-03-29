<!doctype html>
<html lang="en">
  <head>
  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('authen/css/style.css') }}">

	</head>
	<style>
        body {
          background: rgb(35, 34, 34) url("img_tree.gif") no-repeat fixed center;
        }
        </style>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color:rgb(255, 255, 255);">Reset Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				<form  class="login-form" method="POST" action= "{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

					  <div class="form-group">
		      			<input  type="email" name ="email" class="form-control rounded-left" placeholder="Email" value=" {{$request->email}}" required   >
		      		</div>

					<div class="form-group d-flex">
	              <input type="password" name= "password" class="form-control rounded-left" placeholder="Password" required>
	            	</div>


				  <div class="form-group d-flex">
	              <input type="password" name= "password_confirmation" class="form-control rounded-left" placeholder="Comfirm Password " required>
	            </div>



				<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset Password</button>
	            </div>
	            <div class="form-group d-md-flex">

                <div class="w-30 text-md-right">




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

