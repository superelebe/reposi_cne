@extends('layouts.app')
@section('content')

	<div class='container'>
		<div class="row row-centered">
			<div class="col-xs-12 col-md-6 col-centered">
				<div id="calendar">
					
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-centered">
				
			</div>
		</div>		
	</div>


	<script>

	var miurl = '{{url('/')}}';
	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: miurl + '/cargadorFecha'
		});
		
	});

	</script>
</script>
@endsection