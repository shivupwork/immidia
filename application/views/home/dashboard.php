<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
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
				<h1>Dashboard</h1>
			</div>
		</div>
	</header>
	<section class="yacht-booking">
		<div class="container-fluid">
			<div class="row">
				<div class="tab">
					<button class="tablinks " onclick="openCity(event, 'Booking')"><i class="fa fa-desktop" aria-hidden="true"></i><span>Booking</span></button>
					<button class="tablinks active" onclick="openCity(event, 'Profile')"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></button>
					<button class="tablinks" onclick="openCity(event, 'Help')"><i class="fa fa-question-circle" aria-hidden="true"></i><span>Help</span></button>
				</div>
				<div id="Booking" class="tabcontent " style="display: none;">
				</div>
				<div id="Profile" class="tabcontent" style="display: block;">
					<div class="row profile">
						<div class="col-md-4">
						<div>
							<p class="fsname"><i class="fa fa-user" aria-hidden="true"></i>
							<span class="iname">john violin</span></p>
						</div>
						<div class="ptabs">
						<a class="active">Travellers <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						<a>Your Documents <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						<a>My Settings <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
						</div>
						<div class="col-md-8">
							<h3>YOUR PERSONAL INFORMATION</h3>
							<div class="pbox ypi">
								<div class="col-md-1"><i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<div class="col-md-11">
								<p class="name">john Violin<span>Edit</span></p>
								<p>Contact Number : <span>1111111111</span></p>
								<p>Email ID : <span>John@gmail.com</span></p>
								<p>Address : <span></span></p>
								</div>
								
								<div class="edit">
								
								</div>
							</div>
							<h3>YOUR TRAVELLER'S INFORMATION</h3>
							<div class="pbox">
								<div class="addc">
								<p>+<br/>
								Add Co-<br/>
								Traveller</p>
								
								</div>
							</div>
							<h3>YOUR TRAVELLER'S INFORMATION</h3>
							<div class="pbox">
							<p>Your name as on passport</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<select class="">
									<option>MR.</option>
									<option>MISS</option>
									<option></option>
								</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Middle Name">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
							</div>
							<button class="submit">Submit</button>
							</div>
						</div>
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
