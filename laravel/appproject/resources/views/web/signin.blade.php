
@extends('web.layout.main_content');
@section('main_container')

<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Signin Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			<div class="col-md-12 contact-form-left map">
				<div class="w3layouts-contact-form-top">
				<div class="contact-form-top">
					<h3>Signin Us</h3>
				</div>
				<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
				
			</div>
			@if(Session()->has('failed'))
				<span class="alert alert-danger">{{Session('failed')}}</span>
			@endif	
			<div class="modal-body">
				<form action="{{url('/auth')}}" method="post" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="text" class="form-control" placeholder="User Name" name="username" id="recipient-email" required="">
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password1" required="">
					</div>
					<div class="row sub-w3l my-3">
						<div class="col sub-agile">
							<input type="checkbox" id="brand1" value="">
							<label for="brand1" class="text-white">
								<span></span>Remember me?</label>
						</div>
						<div class="col forgot-w3l text-right">
							<a href="#" class="text-white">Forgot Password?</a>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" name="submit" class="form-control" value="Sign In">
					</div>
					<p class="text-center dont-do text-white mt-3">Don't have an account?
						<a href="signup" >
							Register Now</a>
					</p>
				</form>
			</div>
		</div>	
				</div>
				
			</div>
			
		</div>
				
	</div>
</section>
@endsection