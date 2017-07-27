@component('mail::message')
# Hola, tienes un **correo nuevo afiliarse**

@component('mail::panel')
	Correo: {{$data['email']}} <br>
	Empresa: {{$data['empresa']}}<br>
	Telefono: {{$data['telefono']}}<br>
	Representante: {{$data['representante']}}<br>
	Direccion: {{$data['direccion']}}<br>
	RFC: {{$data['rfc']}}<br>
	Ciudad: {{$data['ciudad']}}<br>
	Servicios: {{$data['servicios']}}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent