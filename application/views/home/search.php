<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <?php $this->load->view('header/head'); ?>
		
	</head>
	
	
	<body>
        <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid page-title">
			<div class="row">
				<h1>Bravo Delta</h1>
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
					  <img src="<?php echo base_url() ?>/assets/images/slider1.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url() ?>/assets/images/slider1.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url() ?>/assets/images/slider1.jpg">
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
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
							<li>
								<img src="<?php echo base_url() ?>/assets/images/thumb.jpg">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="search-detail">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="container">
					<div class="info-section">
						<div class="info first">
							<img src="<?php echo base_url() ?>/assets/images/search1.png" alt="1">
							<p class="title">Guest</p>
							<p class="count">11</p>
						</div>
						<div class="info second">
							<img src="<?php echo base_url() ?>/assets/images/search2.png" alt="1">
							<p class="title">Guest Sleeping</p>
							<p class="count">0</p>
						</div>
						<div class="info sixth">
							<img src="<?php echo base_url() ?>/assets/images/search3.png" alt="1">
							<p class="title">Cabins</p>
							<p class="count">1</p>
						</div>
						<div class="info fourth">
							<img src="<?php echo base_url() ?>/assets/images/search4.png" alt="1">
							<p class="title">Speed</p>
							<p class="count">22</p>
						</div>
						<div class="info fifth">
							<img src="<?php echo base_url() ?>/assets/images/search5.png" alt="1">
							<p class="title">Length</p>
							<p class="count">14.60</p>
						</div>
					</div>
					<div class="info-details">
						<div class="col-md-6">
							<ul class="first">
								<li>Location</li>
								<li>Port of Registry<span>Golfe Juan</span></li>
							</ul>
							<ul>
								<li>Specification</li>
								<li>Length<span>14.60 Meters</span></li>
								<li>Beam<span>3.25 Meters</span></li>
								<li>Draft<span>0.96 Meters</span></li>
								<li>Number Of Crew<span>1</span></li>
								<li>Built Year<span>2000</span></li>
								<li>Builder<span>Sunseeker</span></li>
								<li>Flag<span>France</span></li>
								<li>Hull Construction<span>Fiber Glass</span></li>
								<li>Air Conditioning<span>Yes</span></li>
								<li>Hull Configuration<span>Mono Hull</span></li>
							</ul>
							<div class="download-section">
								<div class="brochure">
									<img src="<?php echo base_url() ?>/assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
								</div>
								<div class="email">
									<img src="<?php echo base_url() ?>/assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="second">
								<li>Equipment</li>
								<li>Engine<span>Yanmar GLP STE 3 x 300 W</span></li>
								<li>Cruising Speed<span>22</span></li>
								<li>Fuel Consumtion<span>250 L/Hour</span></li>
								<li>Number Of Crew<span>1</span></li>
							</ul>
							
							<ul>
								<li>Accomodation</li>
								<li>Number of Cabins<span>1</span></li>
								<li>Cabin Configuration<span>1 Double</span></li>
								<li>Bed Configuration<span>Queen Bed</span></li>
								<li>Number Of Guests<span>11</span></li>
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
								<th>Vehicle</th>
								<th>Duration</th>
								<th>Depart</th>
								<th>Return</th>
								<th>Departure Port</th>
								<th>Arrival Port</th>
								<th>Guest (s)</th>
							  </tr>
							</thead>
							<tbody>
								<tr>
									<td>France</td>
									<td>Southern France</td>
									<td>Motor</td>
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
						<a class="back" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Search</a>
						<a class="next" href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<?php $this->load->view('footer/footer') ?>
	</body>
</html>