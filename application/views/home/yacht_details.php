<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url() ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url() ?>/assets/css/testimonial-slider.css">
		<script src="<?=base_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url() ?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?=base_url() ?>/assets/css/style.css">
        
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		
		
		<link href="<?=base_url() ?>/assets/css/thumbs2.css" rel="stylesheet" />
		<link href="<?=base_url() ?>/assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="<?=base_url() ?>/assets/js/thumbnail-slider.js" type="text/javascript"></script>

		
	</head>
	
	<header>
			<?php $this->load->view('header/header');?>
		
		<div class="container-fluid page-title">
			<div class="row">
				<h1><?=$this->yachtDetails->name?></h1>
			</div>
		</div>
	</header>
	<body>

	<section class="slider-section">
	 <div class="h"></div>
		<div class="container-fluid">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[0]->banner,2)?>">
					</div>

					<div class="item">
					  <img src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[1]->banner,2)?>">
					</div>

					<div class="item">
					  <img src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[2]->banner,2)?>">
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
					<?php if(isset($this->yachtDetails->banner[0])){ ?>

								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[0]->banner,2)?>">
						<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[1])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[1]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[2])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[2]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[3])){ ?>
								<img class="ban"  src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[3]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[4])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[4]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[5])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[5]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[6])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[6]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[7])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[7]->banner,2)?>">
								<?php } ?>
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
							<img src="<?=base_url()?>/assets/images/search1.png" alt="1">
							<p class="title">Guest</p>
							<p class="count"><?=$this->yachtDetails->numberOfGuests?></p>
						</div>
						<div class="info second">
							<img src="<?=base_url()?>/assets/images/search2.png" alt="1">
							<p class="title">Guest Sleeping</p>
							<p class="count"><?=$this->yachtDetails->guestSleeping?></p>
						</div>
						<div class="info sixth">
							<img src="<?=base_url()?>/assets/images/search3.png" alt="1">
							<p class="title">Cabins</p>
							<p class="count"><?=$this->yachtDetails->cabins?></p>
						</div>
						<div class="info fourth">
							<img src="<?=base_url()?>/assets/images/search4.png" alt="1">
							<p class="title">Speed</p>
							<p class="count"><?=$this->yachtDetails->speed?></p>
						</div>
						<div class="info fifth">
							<img src="<?=base_url()?>/assets/images/search5.png" alt="1">
							<p class="title">Length</p>
							<p class="count"><?=$this->yachtDetails->length?></p>
						</div>
					</div>
					<div class="info-details">
						<div class="col-md-6">
							<ul class="first">
								<li>Location</li>
								<li>Port of Registry<span><?=$this->yachtDetails->portOfRegistry?></span></li>
							</ul>
							<ul>
								<li>Specification</li>
								<li>Length<span><?=$this->yachtDetails->length?> Meters</span></li>
								<li>Beam<span><?=$this->yachtDetails->beamUnit?> Meters</span></li>
								<li>Draft<span><?=$this->yachtDetails->draft?> Meters</span></li>
								<li>Number Of Crew<span><?=$this->yachtDetails->numberOfCrew?></span></li>
								<li>Built Year<span><?=$this->yachtDetails->builtYear?></span></li>
								<li>Builder<span><?=$this->yachtDetails->builder?></span></li>
								<li>Flag<span><?=$this->yachtDetails->countryName?></span></li>
								<li>Hull Construction<span><?=$this->yachtDetails->hullConstruction?></span></li>
								<li>Air Conditioning<span><?=$this->yachtDetails->isAirConditioning == 1 ? "YES" : "NO" ?></span></li>
								<li>Hull Configuration<span><?=$this->yachtDetails->hullConfiguration?></span></li>
							</ul>
							<div class="download-section">
								<div class="brochure">
									<img src="<?=base_url()?>/assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
								</div>
								<div class="email">
									<img src="<?=base_url()?>/assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="second">
								<li>Equipment</li>
								<li>Engine<span><?=$this->yachtDetails->hullConfiguration?></span></li>
								<li>Cruising Speed<span><?=$this->yachtDetails->speed?></span></li>
								<li>Fuel Consumtion<span><?=$this->yachtDetails->fuelConsumption?> L/Hour</span></li>
								<li>Number Of Crew<span><?=$this->yachtDetails->numberOfCrew?></span></li>
							</ul>
							
							<!-- <ul>
								<li>Accomodation</li>
								<li>Number of Cabins<span><?=$this->yachtDetails->hullConfiguration?></span></li>
								<li>Cabin Configuration<span> <?=$this->yachtDetails->hullConfiguration?></span></li>
								<li>Bed Configuration<span><?=$this->yachtDetails->hullConfiguration?></span></li>
								<li>Number Of Guests<span><?=$this->yachtDetails->numberOfCrew?></span></li>
							</ul> -->
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