@component('mail::message')
# Hola, tienes un **correo nuevo** de

@component('mail::panel')
	{{$data['correo']}}<br>
	{{$data['nombre']}}<br>
	{{$data['telefono']}}<br>
	{{$data['asunto']}}<br>
	{{$data['mensaje']}}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent