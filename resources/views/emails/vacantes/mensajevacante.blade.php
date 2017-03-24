@component('mail::message')
# Hola **{{ $data['nombre'] }}** gracias por postularte a la vacante  **{{ $data['vacante'] }}** CNEC Guanajuato

@component('mail::panel')
	Le enviaremos cualquier informacion relacionada a la vacante a 
	este correo:
	{{ $data['correo'] }}
@endcomponent()

Estaremos analizando su perfil.

Te informaremos cuando tu cuenta sea dada de alta.

Si tienes dudas, llamenos al **(477) 711 21 68** o 
escribanos al correo _informes@cnecgto.org_

Con gusto le atenderemos.

@component('mail::button', ['url' => '/'])
Ir a cnec gto
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
