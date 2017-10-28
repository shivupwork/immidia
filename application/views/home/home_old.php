<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/testimonial-slider.css">
		<script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
        
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<style>

	</style>
		<script>
         $(function() {
            $( ".date-picker" ).datepicker({ format: "MM d DD", todayHighlight: true,autoclose: true,});
            $( ".date-picker" ).datepicker("hide");
         });
		 $(function() {
		 $('input#dparrival').change(function(){
		 adate = $( "#dparrival" ).val();
		 var strArray = adate.split(" ");
		 $("#arrival").html( "<span>"+strArray[0]+"</span><span>"+strArray[1]+"</span><span>"+strArray[2]+"</span>");
		 })
		 });
		 
		 $(function() {
		 $('input#dpd').change(function(){
		 adate1 = $( "#dpd" ).val();
		 var strArray1 = adate1.split(" ");
		 $("#departure").html( "<span>"+strArray1[0]+"</span><span>"+strArray1[1]+"</span><span>"+strArray1[2]+"</span>");
		 })
		 });
		 $(function() {
		 $('select.duration').change(function(){
		 adate2 = $( ".duration" ).val();
		 var strArray2 = adate2.split("(");
		 $("#duration").html( "<span>"+strArray2[0]+"</span><span>("+strArray2[1]+"</span>");
		 })
		 });
		 $(function () {
			$('.add').on('click',function(){
				var $qty=$(this).closest('p').find('.qty');
				var currentVal = parseInt($qty.val());
				if (!isNaN(currentVal)) {
					$qty.val(currentVal + 1);
				}
			});
			$('.minus').on('click',function(){
				var $qty=$(this).closest('p').find('.qty');
				var currentVal = parseInt($qty.val());
				if (!isNaN(currentVal) && currentVal > 0) {
					$qty.val(currentVal - 1);
				}
			});
		});
		$('.option-tab').click(function(){
			$('.book-tab .tab-content').css('display', 'block').css('color', '');
		});
		
		$(function () {
			var vid = document.getElementById("bgvid");
				var pauseButton = document.querySelector("#polina button");

				if (window.matchMedia('(prefers-reduced-motion)').matches) {
					vid.removeAttribute("autoplay");
					vid.pause();
					pauseButton.innerHTML = "Paused";
				}

				function vidFade() {
				  vid.classList.add("stopfade");
				}

				vid.addEventListener('ended', function()
				{
				// only functional if "loop" is removed 
				vid.pause();
				// to capture IE10
				vidFade();
				}); 


				pauseButton.addEventListener("click", function() {
				  vid.classList.toggle("stopfade");
				  if (vid.paused) {
					vid.play();
					pauseButton.innerHTML = "<img src=\"<?=base_url()?>/assets/images/pause.png\">";
				  } else {
					vid.pause();
					pauseButton.innerHTML = "<img src=\"<?=base_url()?>/assets/images/play.png\">";
				  }
				});
			});
		
		</script>
	</head>
<body >
	
	<header>
		 <?php $this->load->view('header/header');?>
		<div class="container-fluid book-tab">
			<div class="row">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="option-tab">
							<a href="#tab_default_1" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/1.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_2" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/2.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_3" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/3.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_4" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/4.png"/> </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<div class="book-form">
							<img src="<?=base_url()?>/assets/images/loader.gif" id="loader" style="display:none" class="loader">
							
								<h3>Book Your Yacht Now</h3>
								<form action="yachts" method="post">
									<div class="book-inner">
										<div class="inner-block first">
											<div class="country-icon">
												<select id="yachtCountry" name="yachtCountry" class="country" onchange="getYachtState(this.value)">
													<img src="<?=base_url()?>/assets/images/country-code.png">
													<option>Country</option>
													<?php foreach ($this->yachtCountry as $key => $value) {
														
													?>
															<option value="<?=$value->countryId?>"><?=$value->countryName?></option>
													<?php } ?>
													
													
												</select>
												<span class="subline">Country<br>Area</span>
											</div>
											<div class="state-icon">
												<select class="state" name="yachtState" id="yachtState" onchange="getYachtDepartureCity('yachtCountry','yachtState','1','yachtDays','yachtType','routeType')">
													<option>State</option>
													
												</select>
												<span class="subline">Sub<br>Area</span>
											</div>
										</div>
										<div class="inner-block second">
											<select class="motor" name="yachtType" id="yachtType" onchange="getYachtDepartureCity('yachtCountry','yachtState','1','yachtDays','yachtType','routeType')">
												<option value="0">SAIL</option>
												<option value="1">MOTOR</option>
												<option value="2">SUPER YACHT</option>
												
											</select>
											<select name="routeType" class="trip" id="routeType" onchange="getYachtDepartureCity('yachtCountry','yachtState','1','yachtDays','yachtType','routeType')">
												<option value="0">One Way</option>
												<option value="1">Return</option>		
											</select>
										</div>

										<div class="inner-block third">
											<select name="yachtDays" id="yachtDays" class="duration" onchange="">
												<?php foreach ($this->daysArrayInit as $key => $value){ ?>
												<option data-value="<?=$value['id']?>" value="<?=$value['name']?>"><?=$value['name']?></option>
												<?php } ?>
											</select>
											<div id="duration"><span>1 Day</span> <span>(9:00 to 19:00 Hours)</span></div>
										</div>
										<div class="inner-block fifth">
											<div class="form-group">
												<div class='input-group date' id='datetimepicker1'>
													<input type='text' name="departureDate" id="dpd" class="date-picker departure" placeholder="DD/MM/YYYY"/>
													<div id="departure"><span>MM</span><span>DD</span><span>Day</span></div>
												</div>
											</div>
										</div>
										
										<div class="inner-block fourth">
											<div class="form-group">
												<div class='input-group date' id='datetimepicker1'>
													<input type='text' name="arrivalDate" id="dparrival"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
													<div id="arrival"><span>MM</span><span>DD</span><span>Day</span></div>
												</div>
											</div>
										</div>
										
										<div class="inner-block sixth">
											<select name="departureCity" class="departure-port" id="departureCity" onchange="getYachtArrivalCity('yachtCountry','yachtState','1','yachtDays','departureCity','yachtType','routeType')"">
												<option>Departure Port</option>
											</select>
											<select name="arrivalCity" class="arrival-port" id="arrivalCity">
												<option>Arrival Port</option>
											</select>
										</div>
										<div class="inner-block seventh">
											<div class="guest">
												<p>
													<img class="fa-plus add" src="<?=base_url()?>/assets/images/plus.png">
													<span>Guest(S)</span>
													<input id="qty1" name="guest" type="text" value="1" class="qty"/>
													<img class="fa-minus minus" src="<?=base_url()?>/assets/images/minus.png">
												</p>
											</div>
										</div>
										<div class="inner-block eighth">
											<div class="eight-inner">
												<img src="<?=base_url()?>/assets/images/search.png">
												<button class="book-submit" type="submit" >Search</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane" id="tab_default_2">
							2
						</div>
						<div class="tab-pane" id="tab_default_3">
							3
						</div>
						<div class="tab-pane" id="tab_default_4">
							4
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	<section class="video">
		<div class="container-fluid">
			<div class="row">
				<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
				  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
				<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
				<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
				</video>
				<div id="polina">
					<button><img class="img-responsive" src="<?=base_url()?>/assets/images/pause.png" /></button>
				</div>
			</div>
		</div>
	</section>
	<section class="our-services">
		<div class="container-fluid services-bg">
			<div class="row">
				<div class="content-inner">
					<h3 class="section-title">Our Services</h3>
					<img class="img-responsive" src="<?=base_url()?>/assets/images/quote.png" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid service-block">
			<div class="row">
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="#"><img class="img-responsive" src="<?=base_url()?>/assets/images/service1.jpg" />
						<span>Helicopter / Private Jet</span></a>
					</div>
				</div>
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="#"><img class="img-responsive" src="<?=base_url()?>/assets/images/service2.jpg" />
						<span>Super Yacht</span></a>
					</div>
				</div>
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="chauffeur-service.html"><img class="img-responsive" src="<?=base_url()?>/assets/images/service3.jpg" />
						<span>Chauffer Services</span></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="#"><img class="img-responsive" src="<?=base_url()?>/assets/images/service4.jpg" />
						<span>Luxury Car</span></a>
					</div>
				</div>
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="#"><img class="img-responsive" src="<?=base_url()?>/assets/images/service5.jpg" />
						<span>Luxury Yacht</span></a>
					</div>
				</div>
				<div class="col-md-4 service">
					<div class="serv-inner">
						<a href="#"><img class="img-responsive" src="<?=base_url()?>/assets/images/service6.jpg" />
						<span>Luxury Villa</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--<section class="map-section">
		<div class="container-fluid">
			<div class="row">
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68436.06048923!2d-74.04761800088724!3d40.70755539893427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1506333999345" width="600" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>-->
	<section class="how-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12 content-inner">
					<h3 class="section-title">How It Works</h3>
					<h4>Our Starter Guide</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 work-block">
					<div class="icon">
						<img class="img-responsive" src="<?=base_url()?>/assets/images/choose.png" />
						<p class="title">Choose</p>
						<p class="content">From a luxury yacht, a private jet, a dream car, a finest home or all of the above! Pick your location from a world-wide chlice of destination and your option will display instantly.</p>
					</div>
				</div>
				<div class="col-md-4 work-block">
					<div class="icon">
						<img class="img-responsive" src="<?=base_url()?>/assets/images/select.png" />
						<p class="title">Select</p>
						<p class="content">From a available range of luxury experiences, add in extra services to tailor your exerience to better fir your demand.</p>
					</div>
				</div>
				<div class="col-md-4 work-block">
					<div class="icon">
						<img class="img-responsive" src="<?=base_url()?>/assets/images/confirm.png" />
						<p class="title">Confirm</p>
						<p class="content">create your account and pay security online to receive your e-contract. A personal concierge will be assigned to your booking, available at anytime for your convenience.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="abt-contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 common">
					<img class="img-responsive" src="<?=base_url()?>/assets/images/yacht-1.jpg">
					<div class="content">
						<h1>About Immidia</h1>
						<h3>Our Starter Guide</h3>
					</div>
				</div>
				<div class="col-md-6 common">
					<img class="img-responsive" src="<?=base_url()?>/assets/images/yacht-2.jpg">
					<div class="content">
						<h1>Contact</h1>
						<h3>Our Starter Guide</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid testimonials-container section-container section-container-image-bg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 testimonials section-description">
						<h3 class="section-title">Testimonials</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 testimonial-list">
						<div role="tabpanel">
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="tab1">
									<div class="testimonial-image">
										<img src="<?=base_url()?>/assets/images/testimonial-1.jpg" alt="t1">
									</div>
									<div class="testimonial-auther">
										<p>Katrina Carianoff</p>
									</div>
									<div class="testimonial-text">
										<p>
											"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
											Lorem ipsum dolor sit amet, consectetur..."
										</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab2">
									<div class="testimonial-image">
										<img src="<?=base_url()?>/assets/images/testimonial-2.jpg" alt="t2">
									</div>
									<div class="testimonial-auther">
										<p>John Doe</p>
									</div>
									<div class="testimonial-text">
										<p>
											"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
											ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
											lobortis nisl ut aliquip ex ea commodo consequat..."
										</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab3">
									<div class="testimonial-image">
										<img src="<?=base_url()?>/assets/images/testimonial-3.jpg" alt="t3">
									</div>
									<div class="testimonial-auther">
										<p>Katrina Carianoff</p>
									</div>
									<div class="testimonial-text">
										<p>
											"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
											Lorem ipsum dolor sit amet, consectetur..."
										</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab4">
									<div class="testimonial-image">
										<img src="<?=base_url()?>/assets/images/testimonial-4.jpg" alt="t4">
									</div>
									<div class="testimonial-auther">
										<p>John Doe</p>
									</div>
									<div class="testimonial-text">
										<p>
											"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
											ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
											lobortis nisl ut aliquip ex ea commodo consequat..."
										</p>
									</div>
								</div>
							</div>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
								</li>
								<li role="presentation">
									<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
								</li>
								<li role="presentation">
									<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
								</li>
								<li role="presentation">
									<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $this->load->view('footer/footer') ?>
</body>
</html>