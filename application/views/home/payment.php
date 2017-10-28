<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <?php $this->load->view('header/head'); ?>
		<script>
          $(document).ready(function(){
            $( ".date-picker" ).datepicker({format: "yyyy/mm/dd" ,todayHighlight: true,autoclose: true,});
            $( ".date-picker" ).datepicker("hide");
         });
		</script>
		
<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
	</head>
	
	<body id="payment">
            
	<header>
		
		<?php $this->load->view('header/header'); ?>
		<div class="container-fluid book page-title ls">
			<div class="row">
				<h1>Payment</h1>
			</div>
		</div>
	</header>
	<section>
		<div class="container-fluid">
						<div class="row">
				<div id="myCarousel5" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="<?php echo base_url(); ?>/assets/images/payment/s1.png">
					</div>

					<div class="item">
					  <img src="<?php echo base_url(); ?>/assets/images/payment/s1.png">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>/assets/images/payment/s1.png">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel5" data-slide="next">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		
		</div>
		<div class="black-color">
			<div class="container">
				<div class="row">
					<div class="your-choice clearfix">
						<h3>YOUR CHOICE</h3>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Yacht</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Arthuro III</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 2250{inc.vat}</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Cap D'Ail</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">port-Vauban</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group fborder">
							<div class="col-md-12 col-xs-12"><p class="title">Food And Beverage</p></div>
								<div class="col-md-10 col-xs-10">
									<p class="fitem">
										<span class="iname">Tomato And Mozzarella</span>
										<span class="iqut">4</span>
										<span class="iprice">€ 76</span>
										<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
									</p>
									<p class="fitem">
										<span class="iname">Chichen Sandwich</span>
										<span class="iqut">2</span>
										<span class="iprice">€ 16</span>
										<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
									</p>
									<p class="fitem">
										<span class="iname">Minuty Cuvee prestige - 75cl</span>
										<span class="iqut">1</span>
										<span class="iprice">€ 32</span>
										<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 387.50</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Drop Off Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 193.75</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Formula</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Regular</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 775</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Extra Time ?</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 0</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title"><b>Total</b></p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><b>€ 3787.00</b></p></div>
							</div>
						</div>			
						
						<div class="col-md-12 clearfix ">
							<div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2">
                        <label for="inlineCheckbox2" class="title"> I ACCEPT THE CONTRACT TERMS & CONDITIONS </label>
						<p class="rlink"><a href="contract.html" target="_black" >Click</a> To Read The Cotract</p>
                    </div>
						</div>
						<div class="col-md-12 center clearfix">
						<button class="payment">MAKE Payment</button>
						</div>
					
					
					
					</div> 
					
				</div>
			</div>
		</div>
		
		
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>
