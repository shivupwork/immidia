<!DOCTYPE html>
<html>
	<head>
		<title>Product For Sale</title>
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
			$(document).ready(function(){
			
			$('#callus span').click(function(){
    var $this = $(this);
    $this.toggleClass('#callus span');
    if($this.hasClass('#callus span')){
        $this.text('99999 99999');         
    } else {
        $this.text('CALL US');
    }
});
			
			
			
		});
			
        </script>
	</head>
	
	
	<body class="product-for-sale">
            <header>
		
		<?php $this->load->view('header/header'); ?>
		<div class="container-fluid book page-title page-title1">
			<div class="row">
				<h1>Products For Sale</h1>
			</div>
		</div>
	</header>
	<section class="ride-detail">
		<div class="container-fluid ">
				<div class="container searcharea">
					<div class="row">
						<div class="col-md-12">
						    <img src="<?php echo base_url(); ?>assets/images/product-sale/i1.png" class="searchi">
							<input class="fsearch" type="text" placeholder="SEARCH LOCATION"/>
							<input class="fsubmit" type="submit" name="FIND" value="FIND" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-3">
								<select class="">
									<option>PROPERTY TYPE</option>
									<option>Property Type</option>
									<option>Property Type</option>
								</select>
							</div>
							<div class="col-md-3">	
								<input class="keyword" type="text" placeholder="KEYWORD"/>
							</div>
							<div class="col-md-3">
								<select class="">
									<option>MIN. PRICE</option>
									<option>Country 2</option>
									<option>Country 3</option>
									<option>Country 4</option>
									<option>Country 5</option>
								</select>
							</div>
							<div class="col-md-3">
								<select class="">
									<option>MAX. PRICE</option>
									<option>Country 2</option>
									<option>Country 3</option>
									<option>Country 4</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
					<input class="reset" type="submit" name="RESET" value="RESET" />
					</div>
			</div>
		</div>
		<div class="container-fluid ">
			<div class="container searchresult">
				<div class="row">
					<div class="col-md-7">
					<h3>PRODUCT FOR SALE</h3>
					</div>
					<div class="col-md-5">
					SORT BY : <select class="sortby">
									<option>High to Low</option>
									<option>Low to High</option>
								
								</select>
								<h3 class="total">32,217 RESULTS</h3>
					</div>
					</div>
				<div class="row lg">
					<div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i3.png">VILLA <span>(25203)</span></p></div>
					<div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i4.png">YACHT <span>(9494)</span></p></div>
					<div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i5.png">CAR <span>(2429)</span></p></div>
					<div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i6.png">JET <span>(444)</span></p></div>
				</div>
				<div class="row">
					<div class="col-md-3 pull-right">
					<select class="showall">
									<option>SHOW ALL</option>
									<option>Country 2</option>
									<option>Country 3</option>
									<option>Country 4</option>
								</select></div>
				</div>
			</div>
		</div>
		<div class="container-fluid ">
			<div class="container searchresult">
				<div class="row">
					<div class="col-md-6">
						<div class="listing-box">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
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
			
							 <div class="listing-detail">
								<h4>ARTHRO</h4>
								<p class="listprice">$ 2,250.00</p>
								<div class="info-section clearfix">
									<div class="info first">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
										<p class="title">GUESTS</p>
										<p class="count">11</p>
									</div>
									<div class="info second">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
										<p class="title">GUESTS SLEEPING</p>
										<p class="count">0</p>
									</div>
									<div class="info sixth">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
										<p class="title">CABINS</p>
										<p class="count">1</p>
									</div>
									<div class="info fourth">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
										<p class="title">SPEED</p>
										<p class="count">22</p>
									</div>
									<div class="info fifth">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
										<p class="title">LENGTH</p>
										<p class="count">14.60</p>
									</div>
								</div>

					<div class="center">
						<button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
						<button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
						<a href="<?php echo base_url('product-for-sale-detail');?>"><button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button> 
						
					</div>
					</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="listing-box">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
									</div>
								</div>
								<!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel1" data-slide="next">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
									<span class="sr-only">Next</span>
								</a>
							</div>
					<div class="listing-detail">
					<h4>ARTHRO</h4>
					<p class="listprice">$ 2,250.00</p>
					<div class="info-section clearfix">
						<div class="info first">
							<img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
							<p class="title">GUESTS</p>
							<p class="count">11</p>
						</div>
						<div class="info second">
							<img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
							<p class="title">GUESTS SLEEPING</p>
							<p class="count">0</p>
						</div>
						<div class="info sixth">
							<img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
							<p class="title">CABINS</p>
							<p class="count">1</p>
						</div>
						<div class="info fourth">
							<img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
							<p class="title">SPEED</p>
							<p class="count">22</p>
						</div>
						<div class="info fifth">
							<img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
							<p class="title">LENGTH</p>
							<p class="count">14.60</p>
						</div>
					</div>

					<div class="center">
						<button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
						<button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
                                                <a href="<?php echo base_url('product-for-sale-detail');?>"><button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button> </a>
						
					</div>
					</div>
					</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="container-fluid ">
			<div class="container searchresult">
				<div class="row">
					<div class="col-md-9">
						<div class="vlisting-box">
							<div class="row">
								<div class="col-md-5">
									<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png" class="img-responsive">
								</div>
								<div class="col-md-7">
									<div class="listing-detail">
										<h4>ARTHRO</h4>
										<p class="listprice">$ 2,250.00</p>
										<div class="info-section clearfix">
											<div class="info first">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
												<p class="title">GUESTS</p>
												<p class="count">11</p>
											</div>
											<div class="info second">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
												<p class="title">GUESTS SLEEPING</p>
												<p class="count">0</p>
											</div>
											<div class="info sixth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
												<p class="title">CABINS</p>
												<p class="count">1</p>
											</div>
											<div class="info fourth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
												<p class="title">SPEED</p>
												<p class="count">22</p>
											</div>
											<div class="info fifth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
												<p class="title">LENGTH</p>
												<p class="count">14.60</p>
											</div>
										</div>
										<div class="center">
											<button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
											<button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
                                                                                        <a href="<?php echo base_url('product-for-sale-detail');?>"><button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button></a> 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vlisting-box">
							<div class="row">
								<div class="col-md-5">
									<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png" class="img-responsive">
								</div>
								<div class="col-md-7">
									<div class="listing-detail">
										<h4>ARTHRO</h4>
										<p class="listprice">$ 2,250.00</p>
										<div class="info-section clearfix">
											<div class="info first">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
												<p class="title">GUESTS</p>
												<p class="count">11</p>
											</div>
											<div class="info second">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
												<p class="title">GUESTS SLEEPING</p>
												<p class="count">0</p>
											</div>
											<div class="info sixth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
												<p class="title">CABINS</p>
												<p class="count">1</p>
											</div>
											<div class="info fourth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
												<p class="title">SPEED</p>
												<p class="count">22</p>
											</div>
											<div class="info fifth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
												<p class="title">LENGTH</p>
												<p class="count">14.60</p>
											</div>
										</div>
										<div class="center">
											<button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
											<button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
                                                                                        <a href="<?php echo base_url('product-for-sale-detail');?>"><button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vlisting-box">
							<div class="row">
								<div class="col-md-5">
									<img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png" class="img-responsive">
								</div>
								<div class="col-md-7">
									<div class="listing-detail">
										<h4>ARTHRO</h4>
										<p class="listprice">$ 2,250.00</p>
										<div class="info-section clearfix">
											<div class="info first">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
												<p class="title">GUESTS</p>
												<p class="count">11</p>
											</div>
											<div class="info second">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
												<p class="title">GUESTS SLEEPING</p>
												<p class="count">0</p>
											</div>
											<div class="info sixth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
												<p class="title">CABINS</p>
												<p class="count">1</p>
											</div>
											<div class="info fourth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
												<p class="title">SPEED</p>
												<p class="count">22</p>
											</div>
											<div class="info fifth">
												<img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
												<p class="title">LENGTH</p>
												<p class="count">14.60</p>
											</div>
										</div>
										<div class="center">
											<button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
											<button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
											<a href="<?php echo base_url('product-for-sale-detail');?>"><button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li class="active">1</li>
								<li>2</li>
								<li>3</li>
								<li>4</li>
						        <li>5</li>
								<li>6</li>
								<li>7</li>
								<li>8</li>
								<li>9</li>
								<li>10</li>
								
							</ul>
						<button class="next">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</div>
					
					</div>
					
					<div class="col-md-3">
						<div class="sidebar">
							<h3>POPULAR SEARCHES</h3>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
							<p>LOREM IPSUM DOLOR SIT AMET</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>