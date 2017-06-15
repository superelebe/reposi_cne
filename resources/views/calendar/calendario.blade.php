@extends('layouts.app')
@section('content')

	<div class='contenedor'>
	    <div class="row row-centered">
	        <div class="col-md-12 col-centered img_centrada"><img src="{{asset('img/banner-cal.png')}}" alt=""></div>
	    </div>
		<div class="row row-centered">
			<div class="col-xs-12 col-md-7 col-centered">
				<div id="calendario">
					
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-centered">
				<div class="eventos_calendario">
					<div class="titulo_eventos_calendario">
						<h3>EVENTOS</h3>
					</div>
					<div class="fechas_calendario">
						<ul>
							@foreach($eventos as $k)
								<li class="evento">
									<span>
										{{$potato =  date("d - m - Y", strtotime($k['start']))}}
									</span>  
									{{$k['title']}}
									<a href="{{$k['url']}}" target="_blank"></a>
								</li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>		
	</div>


	<script>

	var miurl = '{{url('/')}}';
	$(document).ready(function() {
		
		$('#calendario').fullCalendar({
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			timeFormat: {
				agendaDay: 'h(:mm)t{ - h(:mm)t}',
				'': 'h(:mm)t{-h(:mm)t }'
			},
			monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ], 
			monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			dayNames: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
			buttonText: {
				today: 'hoy',
				month: 'mes',
				week: 'semana',
				day: 'día'
			},
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: miurl + '/cargadorFecha'
		});
		
	});
	$.getJSON(miurl + "/cargadorFecha", function(data) {
	console.log(data);
    //data is the JSON string
});
	</script>
</script>
@endsection