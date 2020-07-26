$(document).ready(function(){


	//Add functionality to toggle radiobuttons OFF
	$(":radio").click(function(){
		// var $radio=$(this);
		// console.log($radio.attr('name'));
		var totalHours=$(this).val();
		$("#totalHours").text(totalHours);

		var $radio = $(this);
		// if this was previously checked, uncheck it
		if ($radio.data('waschecked') == true)
		{
			$radio.prop('checked', false);
			$radio.data('waschecked', false);
            $radio.siblings(':radio:first').prop('checked', true);
		}
		else
			$radio.data('waschecked', true);

		// remove was checked from other radios
		$radio.siblings().data('waschecked', false);


		//get all Values
        var total=0;
        $(":radio:checked").each(function(){
            total += Number(this.value);
        });
        $("#totalHours").text(total);
    });




});
