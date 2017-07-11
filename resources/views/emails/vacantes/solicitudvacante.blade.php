@component('mail::message')
# Nueva solicitud para la vacante **{{ $data['vacante'] }}** de la empresa _{{$data['empresa']}}_

@component('mail::panel')
	Perfil candidato:<br><br>
	Nombre: {{ $data['nombre'] }}<br>
	correo: {{ $data['correo']}}<br>
	Telefono: {{$data['telefono']}}<br><br>

	Comentarios: {{$data['comentarios']}}
@endcomponent()

Gracias,<br>
{{ config('app.name') }}
@endcomponent
