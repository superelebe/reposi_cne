@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-11.png" style="margin-left:90px;" />
            <h1>SERVICIOS <br /> DEL SIEM</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>De acuerdo a la publicación del Diario Oficial de la Federación, entregamos a nuestros afiliados, una o dos veces por semana, reportes de Licitaciones Públicas relacionadas con Servicios de Consultoría, los cuales, además, contienen una evaluación y una calificación de las condiciones de cada una de las licitaciones (costo de bases, tiempo de presentación de propuestas, características de la licitación en cuanto a experiencia, capital contable, entre otras variantes), llevadas a cabo por especialistas</p>
            <p>de la Cámara, con el objetivo de facilitar la decisión de las empresas respecto a su participación o declinación.
Asimismo, estos reportes buscan orientar a las Dependencias respecto a la claridad, objetividad, congruencia y acceso a la consultoría de las condiciones con las que integran sus licitaciones y brindan la oportunidad de mejorarlas en beneficio de los proyectos, los consultores y la dependencia misma.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->
@endsection
@extends('layouts.js')