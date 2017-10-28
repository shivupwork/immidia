<!DOCTYPE html>
<html>
	<head>
		<title>Charter Fleet Guide</title>
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
	

	<body>
          <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title jet-bg">
			<div class="row">
				<h1>Charter Fleet Guide</h1>
			</div>
		</div>
	</header>
	<section class="jet-list">
		<div class="container">
			<div class="row">
				<h2 class="jets-title">Large Airliner <i class="fa fa-plane" aria-hidden="true"></i><span>46</span></h2>
				<div class="col-md-4 lpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/1.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">McDonnell Douglas DC9-50</h3>
						<h5 class="jet-passengers">139 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/2.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">A340-600</h3>
						<h5 class="jet-passengers">420 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4 rpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/3.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">A340-500</h3>
						<h5 class="jet-passengers">400 Passengers</h5>
					</div>
				</div>
			<button class="more-jet"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</button>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<h2 class="jets-title">Long Range JETS <i class="fa fa-plane" aria-hidden="true"></i><span>46</span></h2>
				<div class="col-md-4 lpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/1.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Challenger 890</h3>
						<h5 class="jet-passengers">16 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/2.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Legacy 500</h3>
						<h5 class="jet-passengers">12 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4 rpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/3.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Hawker 4000</h3>
						<h5 class="jet-passengers">9 Passengers</h5>
					</div>
				</div>
			<button class="more-jet"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</button>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<h2 class="jets-title">Medium jets <i class="fa fa-plane" aria-hidden="true"></i><span>29</span></h2>
				<div class="col-md-4 lpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/1.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">legacy 450</h3>
						<h5 class="jet-passengers">8 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/2.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">BAE125-400</h3>
						<h5 class="jet-passengers">7 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4 rpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/3.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Sabreliner 60 / 65</h3>
						<h5 class="jet-passengers">7 Passengers</h5>
					</div>
				</div>
			<button class="more-jet"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</button>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<h2 class="jets-title">Small Jets <i class="fa fa-plane" aria-hidden="true"></i><span>31</span></h2>
				<div class="col-md-4 lpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/1.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Cessna 510 mustang</h3>
						<h5 class="jet-passengers">4 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/2.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">Nextant 400xt/xti</h3>
						<h5 class="jet-passengers">7 Passengers</h5>
					</div>
				</div>
				<div class="col-md-4 rpad0">
					<div class="jet-item">
						<div class="jet-image">
							<img src="<?php echo base_url() ?>/assets/images/jet/3.png" class="img-responsive" />
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<h3 class="jet-title">SJ30</h3>
						<h5 class="jet-passengers">6 Passengers</h5>
					</div>
				</div>
			<button class="more-jet"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</button>
			</div>
		</div>
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>