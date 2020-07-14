

$(document).ready(function(){
	// $("#create").click(function(){

		//current month
		var currentMonth=moment().get('month');
		var currentYear=moment().get('year');

		var y=currentYear;
		var m=currentMonth;

		$("#timesheetPeriod").text(moment(new Date(y,m)).format("YYYY MMMM"));

		// var y=$("#yr").val();
		// var m=$("#mth").val();
		var momentOrigin=moment(new Date(y, m, 1));
		var lastDay=momentOrigin.clone().endOf("month");	//calculates the last day of the given month


		var momentClone=momentOrigin.clone();

		//Add a division for each day (the division will contain date and radiobutton inputs)
		for (var x=1; x<=lastDay.get("date"); x++){
			var divID="day"+x;
			var divCreate='<div class="dayDiv"  id="'+divID+'"></div>';
			$("#selectionDiv").append(divCreate);
		//Create text box with date as value...and disable it
			var createTextBox='<input type="text" name="textday'+x+'" class="dateText" id="txtday'+x+'">';
			$("#"+divID).append(createTextBox);
			$("#txtday"+x).val(""+momentClone.format("dddd, MMMM Do"));
			$("#txtday"+x).prop('disabled', true);
		 	momentClone.add(1, "days");

			//Create radio buttons within the division
			for (var xx=0; xx<4; xx++){
				var rbID="day"+x+"_rb"+xx;
				var rbName="radioButton_Day"+x;
	            var rbValue=xx;
	            var rbChecked="";

	            //create hidden radio button for default value=0
	            if (xx==0){
	                rbChecked='checked="true"';
	            }
				//Note: button values will = xx
	//			var ddd='<input type="radio" class="'+rbName+'" name="'+rbName+'" id="'+rbID+'" data-waschecked="false" value='+xx+' checked="'+rbChecked+'"></input>';
	            var ddd='<input type="radio"  name="'+rbName+'" id="'+rbID+'" data-waschecked="false" value='+rbValue+' '+rbChecked+'" class="form-radio"></input>';
	            var dddLabel='<label for="'+rbID+'" class="radio-group"></label>';

				$("#"+divID).append(ddd);
	            $("#"+divID).append(dddLabel);
			}

		}


	// });

});
