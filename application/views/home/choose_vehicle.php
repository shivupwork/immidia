<!DOCTYPE html>
<html>
	<head>
		<title>Choose Vehicle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
  <?php $this->load->view('header/head'); ?>
		
	</head>
	
	
	<body class="choosevechicle">
            <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title page-title2">
			<div class="row">
				<h1>CUSTOMER INFORMATION</h1>
			</div>
		</div>
	</header>
	<section class="ride-detail">
		<div class="container-fluid brown-color">
			<div class="container">
			<div class="row">
				
					<div class="col-md-12 ride-title">
						<h1>Choose Vehicle</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="breadcrumb">
					<ul>
						<li>RIDE DETAILS</li>
						<li>YOUR BOOKING</li>
						<li>CONTACT INFORMATION</li>
						<li>PAYMENT INFORMATION</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">		
				<div class="col-md-6">
					<div class="car-box">
						<div class="row">
							<div class="col-md-3 col-xs-3">
								<h4>Sedan</h4>
								<h2>$152.00</h2>
								<div class="ic"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i1.png" class=""> 3 <img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i2.png" class=""> 3 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?php echo base_url() ?>/assets/images/choose-vehicle/1.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="car-box">
						<div class="row">
							<div class="col-md-3 col-xs-3">
								<h4>Luxury Sedan</h4>
								<h2>$152.00</h2>
								<div class="ic"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i1.png" class=""> 4 <img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i2.png" class=""> 4 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?php echo base_url() ?>/assets/images/choose-vehicle/2.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">		
				<div class="col-md-6">
					<div class="car-box">
						<div class="row">	
							<div class="col-md-3 col-xs-3">
								<h4>V Class</h4>
								<h2>$182.00</h2>
								<div class="ic"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i1.png" class=""> 4 <img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i2.png" class=""> 4 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?php echo base_url() ?>/assets/images/choose-vehicle/3.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="car-box">
						<div class="row">	
							<div class="col-md-3 col-xs-3">
								<h4>SUV's</h4>
								<h2>$304.00</h2>
								<div class="ic"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i1.png" class=""> 5 <img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i2.png" class=""> 5 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?php echo base_url() ?>/assets/images/choose-vehicle/4.png" class="img-responsive">
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="container-fluid brown-color">
			<div class="row">
				<div class="container">
				    <div class="previous-step">
						
						<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
						<h4>PREVIOUS Step</h4>
					</div>
					<div class="next-step">
						<h4>Next Step</h4>
						<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>