<?php
if(isset($_SESSION['cust_id']))
{
		echo "<script>
			window.location='index';
			</script>";
} 
include_once('header.php')
?>

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Signup Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			<div class="col-md-12 contact-form-left map">
				<div class="w3layouts-contact-form-top">
				<div class="contact-form-top">
					<h3>Signup Us</h3>
				</div>
				<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
				
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name</label>
						<input type="text" class="form-control" placeholder="Name" name="name" id="recipient-rname" required="">
					</div>
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="text" class="form-control" placeholder="User Name" name="user_name" id="recipient-email" required="">
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password1" required="">
					</div>
					
					<div class="form-group">
						<label for="gender" class="col-form-label">Gender</label>
						<input type="radio" name="gen" value="Male">:Male
						<input type="radio" name="gen" value="Female">:Female
					</div>
					<div class="form-group">
						<label for="gender" class="col-form-label">Laungauges</label>
						<input type="checkbox" name="lag[]" value="Hindi">:Hindi
						<input type="checkbox" name="lag[]" value="English">:English
						<input type="checkbox" name="lag[]" value="Gujarati">:Gujarati
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Select Country</label>
						<select class="form-control" name="cid" required="">
							<option value="">------  Select Country ------</option>
							<?php
							foreach($country_arr as $d)
							{
							?>
							<option value="<?php echo $d->cid?>"><?php echo $d->cnm?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Upload Pic</label>
						<input type="file" class="form-control" name="img" required="">
					</div>
					<div class="right-w3l">
						<input type="submit" name="submit" class="form-control" value="Register">
					</div>
				</form>
			</div>
		</div>
				</div>
				
			</div>
			
		</div>
				
	</div>
</section>
<!-- //Contact -->
	<?php
include_once('footer.php');
?>