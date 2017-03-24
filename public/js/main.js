$( function() {

  } );

	$(document).ready(function() {
		


	$("#start").datepicker({ dateFormat: 'yy-mm-dd', minDate: new Date });
        $("#end").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        })
		
	});	