@extends('web.layout.main_content');
@section('main_container')
<!-- team -->
<section class="wthree-row py-5">
	<div class="container py-md-5 py-3">
		<h3 class="heading text-capitalize text-center">My Profile</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row text-center">
			<div class="col-lg-3"></div>
			<div class="col-lg-3 col-6 team-grids">
				<div class="team-effect">
					<img src="upload/customer/" alt="img" height="150px" width="150px">
				</div>
			</div>
			
			<div class="col-lg-3 col-6 team-grids">	
				<div class="footerv2-w3ls mt-3">
					<h4>Name : <?php echo $fetch->name;?></h4>
					<p class="my-2"> <i class="fas fa-user" aria-hidden="true"></i>User Id : <?php echo $fetch->id;?></p>
					<p class="my-2"> <i class="fas fa-user" aria-hidden="true"></i>User Name : <?php echo $fetch->username;?></p>
					<p><a href="{{url('profile/'. $fetch->id )}}" class="btn btn-primary">Edit</a></p>
				</div>
			</div>
			<div class="col-lg-3"></div>
			
		</div>
	</div>
</section>
<!-- //team -->
@endsection