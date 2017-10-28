<!DOCTYPE html>
<html>
	<head>
		<title>CUSTOMER INFORMATION</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      
         <?php $this->load->view('header/head'); ?>
		
	</head>
	
	
	<body class="customerinfomation">
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
						<h1>YOUR BOOKING</h1>
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
		<div class="container-fluid">
				<div class="container yourbooking">
					<div class="row">		
						<div class="col-md-7">
							<img src="<?php echo base_url() ?>/assets/images/customer-info/1.jpg" class="img-responsive" />
							<h4>Luxury Sedan</h4>
							<div class="icc"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i1.png" class=""> 4 </div>
							<div class="icc"><img src="<?php echo base_url() ?>/assets/images/choose-vehicle/i2.png" class=""> 4 </div>
						</div>
						<div class="col-md-5">
							
							
                            <div class="binfo">
						<p class="pb">*Actual Vehicle May Very<p/>
						<p class="pb"><img src="<?php echo base_url() ?>/assets/images/customer-info/i3.png" class=""> ,Nyack New Yourk 10960 United States<br/>
						&nbsp;&nbsp;<img src="<?php echo base_url() ?>/assets/images/customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?php echo base_url() ?>/assets/images/customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?php echo base_url() ?>/assets/images/customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?php echo base_url() ?>/assets/images/customer-info/i4.png" class=""><br/>
						<img src="<?php echo base_url() ?>/assets/images/customer-info/i5.png" class="">Route 46, Vienna, New Jersey United Status<br/><br/><p/>
			
						<p class="pbp"><img src="<?php echo base_url() ?>/assets/images/customer-info/i6.png" class=""> <select class="priceb">
										<option>Price Breakdown</option>
										<option>Country 2</option>
										<option>Country 3</option>
										<option>Country 4</option>
										<option>Country 5</option>
										<option>Country 6</option>
										<option>Country 7</option>
										<option>Country 8</option>
										<option>Country 9</option>
										<option>Country 10</option>
									</select>$4950.08</p>
					</div>	
                     					</div>					
				</div>
									
						</div>
					</div>
		<div class="container-fluid brown-color">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ride-title">
						<h1>CONTACT INFORMATION</h1>
					</div>
				</div>
			</div>
		</div>
	    <div class="container-fluid">
			<div class="row">
				<div class="container customerinfo">
					<div class="col-md-6 ">
						<h3>Person Making The Reservation</h3>
						<p>Please Sign In If You Are a Returning user <a>SIGN IN</a> <a>REGITER</a></p>
						 <div class="form-group">
							<input type="text" class="form-control" placeholder="First Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email"/>
						</div>
						
					</div>
					<div class="col-md-6 ">
					   <h3>Personal Travelling</h3>
					   <div class="radio">
						<label><input type="radio" name="pt" value="same As person Making The Reservation" />
						same As person Making The Reservation</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email"/>
						</div>
								
									
					</div> 
					<div class="col-md-12 ">
						<div class="radio">
							<label class="tc"><input type="radio" name="tc" value="yes" required />
							I Agree To The <a>Terms And Conditions Of The Reservation</a><u></label>
						</div>
						<input type="submit" name="submit" value="SUBMIT RESERVATION" />
					</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<?php $this->load->view('footer/footer') ?>
</body>

</html>