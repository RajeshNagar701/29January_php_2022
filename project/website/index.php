<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Taxi Cab Transportation Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?77227';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"70",
      "marginRight":"25",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"TAXI CAB",
      "brandSubTitle":"Hire Taxi Cab near home",
      "brandImg":"images/banner1.jpg",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"9106797282"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</head>

<body>

<!--/banner-->
	<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> Call Taxi : 12(00) 123 1234</p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index">
					<i class="fas fa-taxi"></i> Taxi Cab</a>
			</div>
			
			
			<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
			<?php
				if(isset($_SESSION['cust_id']))
				{
				?>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="profile" >
							<i class="fas fa-lock"></i> Profile</a>
					</span>
					<span>
						<a href="logout">
							<i class="fas fa-user"></i> Logout</a>
					</span>
				<?php	
				}
				else
				{
				?>
				<span class="mx-lg-4 mx-md-2  mx-1">
					<a href="signin" >
						<i class="fas fa-lock"></i> Sign In</a>
				</span>
				<span>
					<a href="signup">
						<i class="fas fa-user"></i> Register</a>
				</span>
				<?php
				}
				?>
			</div>
		</div>
	</div>

	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="booking">Booking</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="client_inq">Client Inq</a>
						</li>
						<?php
						if(isset($_SESSION['cust_id']))
						{
						?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								<?php echo $_SESSION['name']?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-center" href="profile">Profile</a>
								<a class="dropdown-item text-center" href="mybooking">My Booking</a>
							</div>
						</li>
						<?php
						}
						?>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner-text -->
		<div id="wrapper">

			<!-- Slideshow 1 -->
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<div class="banner-img">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h1>24/7 Taxi Service </h1>
									<h2 class="mb-5"><i class="fas fa-phone"></i> 12(00) 123 1234</h2>
									<a href="booking.php">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img one">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Online Cab Booking</h4>
									<h5 class="mb-5">No Extra Charges</h5>
									<a href="booking.php">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img two">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Reach Your Destination</h4>
									<h5 class="mb-5">Within Exact Time </h5>
									<a href="booking.php">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img three">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Travel Safe & Secure</h4>
									<h5 class="mb-5">Assured Cab Service</h5>
									<a href="booking.php">Book Now </a>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->

	
<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Welcome</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="about-head text-center ">
			<div class="row about-grids-top mb-5">
				<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
					<i class="fas fa-money-bill-alt" aria-hidden="true"></i>
					<h4>Low Charges</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h4>Safe & Secure</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-sm-0 mt-5 about-grid p-0">
					<i class="fa fa-road" aria-hidden="true"></i>
					<h4>Traffic Roads</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-taxi" aria-hidden="true"></i>
					<h4>Taxi Cabs</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					<h4>24/7 Service</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-smile" aria-hidden="true"></i>
					<h4>Customers</h4>
				</div>
			</div>
			<div class="row about-grids-bottom text-left">
				<div class="col-md-4 mb-md-0 mb-5 about-bottom-grid">
					<h4 class="mb-4">Lorem ipsum dolor sit amet, In consectetur adipiscing elit. Etiam commodo urna dolor,</h4>
					<a href="about.php"> More About Us</a>	
				</div>
				<div class="col-md-4 about-bottom-grid">
					<p>Lorem ipsum dolor sit init amet, consectetur elit adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibul umac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
				<div class="col-md-4 about-bottom-grid">
					<p>Lorem ipsum dolor sit init amet, consectetur elit adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibul umac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
			</div>
		</div>
				
	</div>
</section>
<!-- //about -->

<!-- Why taxi cab -->
<section class="why">
	<div class="container-fluid p-md-5 p-3">
		<h3 class="heading text-capitalize text-center">Why taxi cab</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row why-grids">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid1 text-center">
					<h4 class="mx-auto"><span>1</span></h4>
					<p class="mt-5">Top Rated Drivers</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid2 text-center">
					<h4 class="mx-auto"><span>2</span></h4>
					<p class="mt-5">Safety Journey</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid3 text-center">
					<h4 class="mx-auto"><span>3</span></h4>
					<p class="mt-5">Without Peak Pricing</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid4 text-center">
					<h4 class="mx-auto"><span>4</span></h4>
					<p class="mt-5">Fast And Secure</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid5 text-center">
					<h4 class="mx-auto"><span>5</span></h4>
					<p class="mt-5">Lowest Rates</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid6 text-center">
					<h4 class="mx-auto"><span>6</span></h4>
					<p class="mt-5">Best Quality Cabs</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-sm-0 mb-4 grid7 text-center">
					<h4 class="mx-auto"><span>7</span></h4>
					<p class="mt-5">Online Booking</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 grid8 text-center">
					<h4 class="mx-auto"><span>8</span></h4>
					<p class="mt-5">24/7 Cab Service</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Why taxi cab -->

<!-- team -->
<section class="wthree-row py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Our Drivers</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row text-center">
			<div class="col-lg-3 col-sm-6 col-6 team-grids">
				<div class="team-effect">
					<img src="images/team1.jpg" alt="img" class="img-fluid">
				</div>
				<!-- team text -->
				<div class="footerv2-w3ls mt-3">
					<h4>John Smith</h4>
					<p class="my-2">Taxi Driver</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1234</p>
				</div>
				<!-- //team text -->
			</div>
			<div class="col-lg-3 col-sm-6 col-6 team-grids">
				<div class="team-effect">
					<img src="images/team2.jpg" alt="img" class="img-fluid">
				</div>
				<!-- team text -->
				<div class="footerv2-w3ls mt-3">
					<h4>Laura Hill</h4>
					<p class="my-2">Taxi Driver</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1235</p>
				</div>
				<!-- //team text -->
			</div>
			<div class="col-lg-3 col-sm-6 col-6 team-grids mt-lg-0 mt-5">
				<div class="team-effect">
					<img src="images/team3.jpg" alt="img" class="img-fluid">
				</div>
				<!-- team text -->
				<div class="footerv2-w3ls mt-3">
					<h4>Smith Kevin</h4>
					<p class="my-2">Taxi Driver</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1236</p>
				</div>
				<!-- //team text -->
			</div>
			<div class="col-lg-3 col-sm-6 col-6 team-grids mt-lg-0 mt-5">
				<div class="team-effect">
					<img src="images/team4.jpg" alt="img" class="img-fluid">
				</div>
				<!-- team text -->
				<div class="footerv2-w3ls mt-3">
					<h4>Thomson Doe</h4>
					<p class="my-2">Taxi Driver</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1237</p>
				</div>
				<!-- //team text -->
			</div>
		</div>
	</div>
</section>
<!-- //team -->

<!-- Our prices -->
<section class="prices py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Our Pricing</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row pricing-grids">
			<div class="col-lg-3 col-md-6 price-grid">
				<h3 class="mb-4">Micro Taxi -- <span class="">2$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-md-0 mt-5 price-grid">
				<h3 class="mb-4">Mini Taxi -- <span class="">3$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Prime Taxi -- <span class="">4$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">3 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Sedan Taxi -- <span class="">5$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">4 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">3 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- //Our prices -->

<!--/testimonials-->
<section class="testimonials banner-bottom-agile-w3ls py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Testimonial</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="inner-sec-w3layouts-agileits">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team1.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team3.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Peter Guptill</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team1.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Steven Wilson</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team3.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team1.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Peter Guptill</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info">
						<div class="feedback-top p-4 p-4">
							<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/team3.jpg" class="img-fluid" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Steven Wilson</h5>
								<p>Customer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--//testimonials-->
<?php
include_once('footer.php');
?>