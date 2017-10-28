<!DOCTYPE html>
<html>
	<head>
		<title>Food & Drinks</title>
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
		<div class="container-fluid book page-title ls">
			<div class="row">
				<h1>Food & Drinks</h1>
			</div>
		</div>
	</header>
	<section>
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
					</div> 
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
				<div class="food-drink">
					<h3>Food & DRINK</h3>
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1">(SALADS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse2">(SANDWICHES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse3">(MAIN COURSES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse4">(DESSERTS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse5">(BASKET LUNCHES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse5" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse6">(APPETIZERS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse7">(RED WINES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse7" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse8">(ROSE WINES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse8" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse9">(WHITE WINES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse9" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse10">(CHAMPAGNES) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse10" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse11">(BEERS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse11" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse12">(SOFT DRINKS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse12" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse13">(SPIRITS) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse13" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>
									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Tomato And Mozzarella</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 19</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Nicosle Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 21</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Cesar Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 20</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Octopus Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 25</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Prosciutto And Melon</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name">Provencal Ouinoa Salad</p></div> 
											<div class="col-md-4 col-xs-4"><p class="price">€ 23</p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="">
													<option>select</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					<div class="bnbutton">
					<button class="bbutton"><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</button>
					<button class="nbutton">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
				
				</div>
				</div>
				
				
			
			</div>
		
		</div>
		
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>