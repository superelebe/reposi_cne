@extends('layouts.app')
@section('content')


	<div id="calendar">
		
	</div>

@extends('layouts.js')
<script>
$(document).ready(function(){
		var something = {!! $items !!};
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			selectable: true, // allow "more" link when too many events
			selectHelper: true,
			select: function(start){
				start = moment(start.format());
			},
			navLinkDayClick: function(date, jsEvent) {
		        alert('day', date.format()); // date is a moment
		        console.log('coords', jsEvent.pageX, jsEvent.pageY);
		    },
			events: something
		});


});	
</script>




@endsection
