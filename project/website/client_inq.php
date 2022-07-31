<?php 
include_once('header.php')
?>

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Client Inquiry</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Send us a message for be a client</h3>
				</div>
				<div class="agileinfo-contact-form-grid">
					<form action="" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="text" name="sub" placeholder="Subject" required="">
						<input type="email" name="email" placeholder="Email" required="">
						<textarea name="decs" placeholder="Message" required=""></textarea>
						<input type="submit" name="submit"class="btn1" value="Submit">
					</form>
				</div>
			</div>
		</div>
				
			
	</div>
</section>
<!-- //Contact -->
	<?php
include_once('footer.php');
?>