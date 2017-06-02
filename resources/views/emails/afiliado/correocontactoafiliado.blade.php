@component('mail::message')
# Hola, tienes un **correo nuevo**

@component('mail::panel')
	{{$afiliado->email}}
	{{$afiliado->nombre}}
	{{$afiliado->mensaje}}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
