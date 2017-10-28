<!DOCTYPE html>
<html>
	<head>
		<title>Yacht Booking</title>
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
		<script>
		function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
		</script>
	</head>
	
	
	<body>
            <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title">
			<div class="row">
				<h1>Yacht Booking</h1>
			</div>
		</div>
	</header>
	<section class="yacht-booking">
		<div class="container-fluid">
			<div class="row">
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'Booking')"><i class="fa fa-desktop" aria-hidden="true"></i><span>Booking</span></button>
					<button class="tablinks" onclick="openCity(event, 'Profile')"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></button>
					<button class="tablinks" onclick="openCity(event, 'Help')"><i class="fa fa-question-circle" aria-hidden="true"></i><span>Help</span></button>
				</div>
				<div id="Booking" class="tabcontent " style="display: block;">
					<div class="yyi">
						<div class="summary-title">
							<h5>YOUR YACHT INFORMATION</h5><!--<a href="#">Modify</a>-->
						</div>
						<div class="table-responsive summary-result">
							<table class="table">
							<tr>
								<th>Booking Reference No</th>
								<th>Booking Date From</th>
								<th>Booking Date To</th>
								<th>Booking Reference No</th>
								<th>Line Of Business</th>
								<th>Rent</th>
								<th>Total</th>
							</tr>
							<tr>
								<td><span>1234567890</span></td>  						
								<td><span>2017-10-11</span></td>						
								<td><span>2017-10-11</span></td>
								<td><span>1234567890</span></td>							
								<td><span>Yacht</span></td>
								<td><span>€ 852</span></td>	
								<td><span><b>€ 852</b></span></td>
							</tr>
							</table>
						</div>
						<button class="more"><a href="yacht-booking-info.html" target="_blank" ><i class="fa fa-plus" aria-hidden="true"></i> MORE INFO</a></button>
					</div>
				</div>
				<div id="Profile" class="tabcontent" style="display: none;">
					<h3>YOUR PROFILE</h3>
					<p>Profile is YOUR PROFILE.</p> 
				</div>
				<div id="Help" class="tabcontent" style="display: none;">
					<h3>HELP</h3>
					<p>HELP is your help.</p>
				</div>
			</div>
		</div>
	
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>