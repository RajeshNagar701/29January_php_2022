
@extends('web.layout.main_content');
@section('main_container')
<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Edit Profile</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			<div class="col-md-12 contact-form-left map">
				<div class="w3layouts-contact-form-top">
				<div class="contact-form-top">
					<h3>Edit Profile</h3>
				</div>
				<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Edit Profile account</h5>
				
			</div>
			<div class="modal-body">
				<form action="{{url('profile/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name</label>
						<input type="text" class="form-control" value="<?php echo $fetch->name;?>" placeholder="Name" name="name" id="recipient-rname" required="">
					</div>
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="text" class="form-control" value="<?php echo $fetch->username;?>" placeholder="User Name" name="username" id="recipient-email" required="">
					</div>
					
					<div class="form-group">
						<label for="gender" class="col-form-label">Gender</label>
						<?php 
						$gen=$fetch->gen;
						if($gen=="Male")
						{
						?>
						<input type="radio" name="gen" value="Male" checked>:Male
						<input type="radio" name="gen" value="Female">:Female
						<?php
						}
						else
						{
						?>
						<input type="radio" name="gen" value="Male" >:Male
						<input type="radio" name="gen" value="Female" checked>:Female
						<?php
						}
						?>
					</div>
					<div class="form-group">
						<label for="gender" class="col-form-label">Laungauges</label>
						
						
						<input type="checkbox" name="lag[]" value="Hindi" <?php
						$lag_str=$fetch->lag;
						$lag_arr=explode(",",$lag_str);
						if(in_array("Hindi",$lag_arr))
						{
							echo "checked";
						}
						?>>:Hindi
						<input type="checkbox" name="lag[]" value="English" <?php
						$lag_str=$fetch->lag;
						$lag_arr=explode(",",$lag_str);
						if(in_array("English",$lag_arr))
						{
							echo "checked";
						}
						?>>:English
						<input type="checkbox" name="lag[]" value="Gujarati" <?php
						$lag_str=$fetch->lag;
						$lag_arr=explode(",",$lag_str);
						if(in_array("Gujarati",$lag_arr))
						{
							echo "checked";
						}
						?>>:Gujarati
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Select Country</label>
						<select class="form-control" name="cid" required="">
							<option value="">------  Select Country ------</option>
							<?php
							foreach($country_arr as $d)
							{
								if($fetch->cid==$d->id)
								{
							?>
								<option value="<?php echo $d->id?>" selected>
								<?php echo $d->cnm?></option>		
							<?php
								}
								else
								{
								?>
								<option value="<?php echo $d->id?>" >
								<?php echo $d->cnm?></option>		
								<?php		
								}
							}
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Mobile</label>
						<input type="number" class="form-control" placeholder="User Mobile" value="<?php echo $fetch->mobile;?>" name="mobile" id="recipient-email" required="">
					</div>
					
					<div class="form-group">
						<label for="password1" class="col-form-label">Upload Pic</label>
						<input type="file" class="form-control" name="file" value="<?php echo $fetch->file;?>">
						<img src="{{asset('upload/customer/'.$fetch->file)}}" alt="img" height="150px" width="150px">
					</div>
					
					<div class="right-w3l">
						<input type="submit" name="save" class="form-control" value="Save">
					</div>
				</form>
			</div>
		</div>
				</div>
				
			</div>
			
		</div>
				
	</div>
</section>


@endsection