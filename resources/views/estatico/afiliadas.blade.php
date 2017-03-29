@extends('layouts.app')
@section('content')


<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-6.png" />
            <h1>DIRECTORIO DE EMPRESAS AFILIADAS Y CERTIFICADAS</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>Ejemplar que se publica anualmente con información de todas las empresas afiliadas a la CNEC y con una sección especial que contiene empresas certificadas a través del proceso de evaluación de evidencias sobre su experiencia profesional, capital intelectual, capacidad instalada y cumplimiento de obligaciones fiscales.

Se presenta impreso y en versión electrónica, y puede ser consultado por Especialidad y/o ubicación geográfica. Contiene además datos complementarios como nombre del titular y/o representante legal,</p>
            <p>domicilio de la empresa, email, teléfonos, pagina web en su caso, así como descripción de sus trabajos más representativos.

Este valioso documento facilita la selección de empresas de consultoría con experiencia probada en su especialidad o especialidades, con capacidad, seriedad profesional y pertenecientes a la consultoría organizada de México.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->

@endsection
@extends('layouts.js')