<!DOCTYPE html>
<html>
	<head>
		<title>Chauffeur Services</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
		
		
		<script>
         $(function() {
            $( ".date-picker" ).datetimepicker({format: "yyyy/mm/dd"});
            $( ".date-picker" ).datetimepicker("hide");
         });
		$(document).ready(function(){
			$(".book-reservation .expand").click(function(){
			$(".book-reservation").toggleClass("full-width");
			
				
			});
		});
		</script>

	</head>
	
	<header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title">
			<div class="row">
				<h1>Chauffeur Services</h1>
			</div>
		</div>
	</header>
	<body class="cs">
		<div class="container-fluid" id="slide">
			<div class="row">
				<div class="col-md-8 slider-section">
					<div class="row">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="<?php echo base_url();?>/assets/images/cs/suv-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>

							<div class="item">
							  <img src="<?php echo base_url();?>/assets/images/cs/lsedan-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>

							<div class="item">
							  <img src="<?php echo base_url();?>/assets/images/cs/v-class-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<img src="<?php echo base_url();?>/assets/images/left.png">
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<img src="<?php echo base_url();?>/assets/images/right.png">
							<span class="sr-only">Next</span>
						  </a>
						</div>
						<a class="reserve-online" href="#">Make Reservation Online</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="book-reservation">
							<div class="section-one">
								<img src="<?php echo base_url();?>/assets/images/book.png">
								<p>Book Your Reservation</p>
								<span class="expand" href="#"><img src="<?php echo base_url();?>/assets/images/arrow_1.png"/><u>Expand</u><img src="<?php echo base_url();?>/assets/images/arrow_2.png"/></span>
							</div>
							<div class="destination">
								<div class="from">
									<h4>From</h4>
									<input type="text" class="dest-from">
								</div>
								<div class="to">
									<h4>To</h4>
									<input type="text" class="dest-to">
								</div>
									
							</div>
							<div class="app-book">
							    <a class="book-now" href="">Book Now</a> </br>
								<a href="#"><img src="<?php echo base_url();?>/assets/images/android.png"></a>
								<a href="#"><img src="<?php echo base_url();?>/assets/images/apple.png"></a>
							
							</div>
						</div>
						<div class="map-section">
							<div class="expand-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68436.06048923!2d-74.04761800088724!3d40.70755539893427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1506333999345" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="car-block">
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block1.png">
						<p>Allstate Limo Commercial</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block2.png">
						<p>World Class Service</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block3.png">
						<p>Expensive Fleet</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block4.png">
						<p>Online Airport Rates</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block5.png">
						<p>Special Occasions</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div id="myCarouse2" class="carousel slide" data-ride="carousel">
					
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<h1 class="slider-title">Our Fleet</h1>
					<div class="item active">
					  <img src="<?php echo base_url();?>/assets/images/cs/lsedan-f.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/suv-f.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/sedan-f.jpg">
					</div>
					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/v-class-f.jpg">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarouse2" data-slide="prev">
					<img src="<?php echo base_url();?>/assets/images/white-arrow-left.png">
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarouse2" data-slide="next">
					<img src="<?php echo base_url();?>/assets/images/white-arrow-right.png">
					<span class="sr-only">Next</span>
				  </a>
				</div>
				<div class="sedan">
					<p>Sedan</p>
					<a href="#">Book Now</a>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/sedan-t.jpg">
					<p>Sedan</p>
					<a href="#">Book Now</a>
				</div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/lsedan-t.jpg">
					<p>Luxury Sedan</p>
					<a href="#">Book Now</a>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/v-class-t.jpg">
					<p>V Class</p>
					<a href="#">Book Now</a>
				</div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/suv-t.JPG">
					<p>SUV's</p>
					<a href="#">Book Now</a>
				</div>
			</div>
		</div>
		
		<div class="container-fluid rate-section">
			<div class="row">
				<div class="col-md-6 left-img">
					<div class="row">
						<div class="rate-inner">
							<div id="myCarouse3" class="carousel slide" data-ride="carousel">

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner rate-slider">
								<div class="item active">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="#">Book Now</a>
								</div>

								<div class="item">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="#">Book Now</a>
								</div>

								<div class="item">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="#">Book Now</a>
								</div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarouse3" data-slide="prev">
								<img src="<?php echo base_url();?>/assets/images/rate-left.png">
							  </a>
							  <a class="right carousel-control" href="#myCarouse3" data-slide="next">
								<img src="<?php echo base_url();?>/assets/images/rate-right.png">
							  </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 right-img">
					<div class="row">
						<div class="rate-inner">
							<h3>Special Online Airport Rate</h3>
							<div class="box">
								<p class="from-dest">-from LaGuardia-</p>
								<p class="price">$40.00</p>
							</div>
							<div class="box">
								<p class="from-dest">-from JFK-</p>
								<p class="price">$53.00</p>
							</div>
							<div class="box">
								<p class="from-dest">-from Newark-</p>
								<p class="price">$57.00</p>
							</div>
							<h5>* restriction may apply</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Footer -->
		<?php $this->load->view('footer/footer') ?>
	</body>
</html>

