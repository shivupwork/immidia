<!DOCTYPE html>
<html>
	<head>
		<title>Car Search</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <?php $this->load->view('header/head'); ?>	
		
	</head>
	
	
	<body>
	<header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid page-title">
			<div class="row">
				<h1>Mercedes S350</h1>
			</div>
		</div>
	</header>
	<section class="slider-section">
	 <div class="h"></div>
		<div class="container-fluid">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="<?php echo base_url(); ?>/assets/images/car-search/b1.PNG">
					</div>

					<div class="item">
					  <img src="<?php echo base_url(); ?>/assets/images/car-search/b1.PNG">
					</div>

					<div class="item">
					  <img src="<?php echo base_url(); ?>/assets/images/car-search/b1.PNG">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</section>
	
	<section>
	    
		<div class="container-fluid">
			<div class="row">
				<div id="thumbnail-slider">
					<div class="inner">
						<ul>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="cars search-detail">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="container">
					<div class="info-section">
						<div class="info first">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/1.png" alt="1">
							<p class="title">PASSENGER</p>
							<p class="count">5</p>
						</div>
						<div class="info second">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/2.png" alt="1">
							<p class="title">GPS</p>
							<p class="count">YES</p>
						</div>
						<div class="info sixth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/3.png" alt="1">
							<p class="title">AC</p>
							<p class="count">YES</p>
						</div>
						<div class="info fourth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/4.png" alt="1">
							<p class="title">FUEL</p>
							<p class="count">22</p>
						</div>
						<div class="info fifth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/5.png" alt="1">
							<p class="title">GEARBOX</p>
							<p class="count">Automatic</p>
						</div>
					</div>
					<div class="info-details">
						<div class="col-md-6">
							<ul class="first">
								<li>Location</li>
								<li>Address<span>24 Avenue Maréchal Juin</span></li>
							</ul>
							<ul>
								<li>Specification</li>
								<li>Power<span>260HP</span></li>
								<li>Engine Size<span>2987CC</span></li>
								<li>Gear Box<span>Automatic</span></li>
								<li>Maximum Speed<span>250 km/h</span></li>
								<li>Color<span>Black</span></li>
							</ul>
							<div class="download-section">
								<div class="brochure">
									<img src="<?php echo base_url(); ?>/assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
								</div>
								<div class="email">
									<img src="<?php echo base_url(); ?>/assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="second">
								<li>Rental Conditions</li>
								<li>Deductible<span>6000</span></li>
								<li>Included KM/Miles<span>200</span></li>
								<li>Minimum Driving Experience In Months<span>3</span></li>
								<li>Credit Card For Warranty<span>1</span></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<section class="summary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="summary-title">
						<h5>Search Summary</h5><!--<a href="#">Modify</a>-->
					</div>
					<div class="table-responsive summary-result">
						<table class="table">
							<thead>
							  <tr>
								<th>Country</th>
							<th>State</th>
							<th>Car</th>
							<th>Duration</th>
							<th>Departure</th>
							<th>Return</th>
							<th>Delivery Location</th>
							<th>Drop Off Location</th>
							<th>PASSENGER (s)</th>
							  </tr>
							</thead>
							<tbody>
								<tr>
									<td>France</td>
								<td>Southern France</td>
								<td>MERCEDES</td>
								<td>1 Day</td>
								<td>2017-07-28</td>
								<td>2017-07-28</td>
								<td>Cap D'ail</td>
								<td>Monaco</td>
								<td>2</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-12">
					<div class="back-next">
						<a class="back" href="car-search-result.html"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Search</a>
						<a class="next" href="car-booking.html">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php $this->load->view('footer/footer') ?>
	</body>
</html>