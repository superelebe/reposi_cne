Potato

@foreach($capacitaciones as $capacitacion)
	<div>
		<div>{{$capacitacion->title}}</div>
		<div>Comienza: {{$capacitacion->start}}</div>
		<div>Finaliza: {{$capacitacion->end}}</div>
		<div><a href="{{$capacitacion->url}}">Ver Mas</a></div>
	</div>
@endforeach

