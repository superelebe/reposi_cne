Potato

@foreach($capacitaciones as $capacitacion)
	<div>
		<div>{{$capacitacion->titulo}}</div>
		<div>Comienza: {{$capacitacion->start->format('d F Y')}}</div>
		<div>Finaliza: {{$capacitacion->end->format('d F Y')}}</div>
		<div><a href="{{$capacitacion->url}}">Ver Mas</a></div>
	</div>
@endforeach

    {!! $capacitaciones->render() !!}