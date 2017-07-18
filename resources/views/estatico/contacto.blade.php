
@extends('layouts.app')
@section('content')


<div id="contacto">
    <div class="top">
        <div class="ocho80">
        <div id="datosc">
            <p><img src="img/icon-tel.png" alt="iconos contacto"/><span>01 (477) 711 2168 y 711 0433</span><br /></p>
            <p><img src="img/icon-mail.png" alt="iconos contacto"/><span>informes@cnecgto.org</span><br /></p>
            <p><img src="img/icon-casa.png" alt="iconos contacto"/><span>Delegación Guanajuato<br />
Blvd. Mariano Escobedo No. 4502, local 32<br />
Col. San Isidro, León Guanajuato, México</span></p>
            </div>
            <iframe id="map" width="420" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps/ms?msa=0&amp;msid=218263960438665249356.0004c018cb5e888624791&amp;ie=UTF8&amp;t=m&amp;ll=21.104079,-101.643845&amp;spn=0.002602,0.004495&amp;z=17&amp;output=embed"></iframe>
        </div>
    </div>
    
    <div class="bottom">
        <div class="ocho80">
            <form method="post" action="{{route('enviar_correo_contacto')}}" id="form_contacto">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <label for="nombre">Escriba su nombre y apellidos:</label><br />
                <input type="text" name="nombre" id="nombre" /><br />
                
                <label for="email">Dirección de correo electrónico:</label>
                <br />
                <input type="text" name="correo" id="email" /><br />
                
                <label for="asunto">Asunto del Mensaje:</label><br />
                <input type="text" name="asunto" id="asunto" /><br />
                <label for="asunto">Teléfono:</label> <br />
                <input type="text" name="telefono" id="telefono" /><br />
                
                <label for="mensaje">Escriba su mensaje:</label>
                <textarea name="mensaje" id="mensaje" rows="2"></textarea>
                <br />
                <span>ES INDISPENSABLE QUE TODOS LOS CAMPOS ESTEN CONTESTADOS PARA SU CORRECTO REGISTRO</span><br />
                <input type="submit" id="enviar" value="ENVIAR" />
            </form>
        </div>
    </div>
    
</div>
<!--termina div del servicios-->
<!--termina div del servicios-->
@endsection
@extends('layouts.js')