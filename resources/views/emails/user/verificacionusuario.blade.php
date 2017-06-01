@component('mail::message')
# Gracias {{ $user->empresa }} por registrarse a la CNEC Guanajuato

Gracias por suscribirte a nuestro **plan de afiliados**.

@component('mail::panel')
	El correo con el que se registro es:
	{{url(‘/verifyemail/’.$email_token)}}

@endcomponent()

De momento estamos revisando la informacion enviada para darlo
de alta en nuestro sistema.

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
