@component('mail::message')
# Hola, tienes un **correo nuevo** de

@component('mail::panel')
	{{$data['correo']}}
	{{$data['nombre']}}
	{{$data['telefono']}}
	{{$data['asunto']}}
	{{$data['mensaje']}}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent