<!DOCTYPE html>
<html>
	<head>
		<title>Car Booking</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
          <?php $this->load->view('header/head'); ?>
		<script>
         $(function() {
            $( ".date-picker" ).datepicker({ format: "MM d DD", todayHighlight: true,autoclose: true,});
            $( ".date-picker" ).datepicker("hide");
         });
		</script>
	</head>
	
	
	<body>
            <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title ls">
			<div class="row">
				<h1>Car Booking</h1>
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
								<div class="col-md-4 col-xs-4"><p class="title">CAR</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Mercedes S350</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 550{inc.vat}</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery Location</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Cap D'Ail</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Location</p></div>
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
							
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery Fees</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 150</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Drop Off Fees</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 150</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Sub Total</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><b>€ 850</b></p></div>
							</div>
						</div>			
					</div> 
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
				<div class="limousine-services car-booking">
					<h3>INSURANCE POLICY</h3>
					<p class="subtitle">Deductible ( 6,000.00 € On Hold) </p>
					<p class="subtitle">Will be collected by the service provider at the time of delivery </p>
					
					<div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1" checked>
                        <label for="inlineCheckbox1"> Driver 1 </label>
                    </div>
					<div class="driver1">
					<h4 class="btitle">AGE BETWEEN 25 AND 70 YEARS<h4>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name"/>
					</div>
					
					<div class="form-group">
						<label>DATE OF BIRTH</label>
						<div class="date" id="datetimepicker4">
							<input type="text"  value="" class="date-picker" placeholder="DD/MM/YYYY">
						</div>
					</div>
					
					<div class="form-group">
						<label>DRIVING LICENSE ISSUE DATE</label>
						<div class="date" id="datetimepicker5">
							<input type="text"  value="" class="date-picker" placeholder="DD/MM/YYYY">
						</div>
					</div>
					</div>
					<div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" name="driver2" value="option2" onchange="valueChanged()">
                        <label for="inlineCheckbox2"> Driver 2 </label>
                    </div>
					<script type="text/javascript">
function valueChanged()
{
    if($('#inlineCheckbox2').is(":checked"))   
        $(".driver2").show();
    else
        $(".driver2").hide();
}
</script>
					<div class="driver2" style="display: none;">
					<h4 class="btitle">AGE BETWEEN 25 AND 70 YEARS<h4>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name"/>
					</div>
					
					<div class="form-group">
						<label>DATE OF BIRTH</label>
						<div class="date" id="datetimepicker4">
							<input type="text"  value="" class="date-picker" placeholder="DD/MM/YYYY">
						</div>
					</div>
					
					<div class="form-group">
						<label>DRIVING LICENSE ISSUE DATE</label>
						<div class="date" id="datetimepicker5">
							<input type="text"  value="" class="date-picker" placeholder="DD/MM/YYYY">
						</div>
					</div>
					</div>
					
					
					<div class="bnbutton">
						<button class="bbutton"><a href="car-search.html" ><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</a></button>
						<button class="nbutton"><a href="car-payment.html" >NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
					</div>
				</div>
				
				
			
			</div>
		
		</div>
		
	</section>
	<?php $this->load->view('footer/footer') ?>
<script type="text/javascript">
	//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	</script>

</body>

</html>