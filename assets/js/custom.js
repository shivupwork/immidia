
	
	//var base_url = 'http://immidia.ae/';
	var base_url = 'http://localhost/immidia/trunk/';

	function getYachtState(countryId){
		$('#loader').removeAttr('style');
		 $.ajax({
	        url: base_url+'/get_yacht_state/'+countryId,
	        type: "get",
	        success: function(data){
	        			$('#yachtState').html('');
	       				$('#loader').attr('style','display:none');
	      				 $('#yachtState').html('<option value="0">State</option>')
	           			$.each(JSON.parse(data), function( index, value ) {
						 	
						 $('#yachtState').append('<option value="'+value['stateId']+'">'+value['stateName']+'</option>')
						});
	           			
	        }
	      });
	}


	function getYachtDepartureCity(country,state,days,daysId,yachtType,routeType){
		$('#loader').removeAttr('style');
	
		 $.ajax({
	        url: base_url+'/get_yacht_departure_city/'+$('#'+country).val()+'/'+$('#'+state).val()+'/'+days+'/'+$('#'+daysId+' option:selected').attr('data-value')+'/'+$('#'+yachtType).val()+'/'+$('#'+routeType).val(),
	        type: "get",
	        success: function(data){
	        	$('#loader').attr('style','display:none');
	        	$('#departureCity').html('');
				$('#departureCity').html('<option value="0">Departure Port</option>');
				$.each(JSON.parse(data), function( index, value ) {
						 	
				$('#departureCity').append('<option value="'+value['cityId']+'">'+value['cityName']+'</option>')
				});
	      			
	           			
	        }
	      });
	}

	function getYachtArrivalCity(country,state,days,daysId,departureCity,yachtType,routeType) {
		$('#loader').removeAttr('style');
		 $.ajax({
	        url: base_url+'/get_yacht_arrival_city/'+$('#'+country).val()+'/'+$('#'+state).val()+'/'+days+'/'+$('#'+daysId+' option:selected').attr('data-value')+'/'+$('#'+departureCity).val()+'/'+$('#'+yachtType).val()+'/'+$('#'+routeType).val(),
	        type: "get",
	        success: function(data){
	        	$('#loader').attr('style','display:none');
	        	$('#arrivalCity').html('');
				$('#arrivalCity').html('<option value="0">Arrival Port</option>');
				$.each(JSON.parse(data), function( index, value ) {
					console.log(value);		 	
				$('#arrivalCity').append('<option value="'+value['id']+'">'+value['cityName']+'</option>')
				});
	      			
	           			
	        }
	      });
	}


