
@extends('web.layout.main_content');
@section('main_container')
<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Contact</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					
				</div>
				
				@if(Session()->has('success'))
				<span class="alert alert-success">{{Session('success')}}</span>
				@endif	
			<div class="agileinfo-contact-form-grid">
			
					<form action="{{url('/contact')}}" method="post">
					@csrf
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="Email" required="">
						<textarea name="msg" placeholder="Message" required=""></textarea>
						<input type="submit" name="submit"class="btn1" value="Submit">
					</form>
				</div>
			</div>
		</div>
				
			
	</div>
</section>
<!-- //Contact -->
@endsection