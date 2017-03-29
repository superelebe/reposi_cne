
@extends('layouts.app')
@section('content')
<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-4.png" />
            <h1>GUÍA PARA LA SELECCIÓN DE CONSULTORES</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>Documento que orienta a las Dependencias Públicas para seleccionar las propuestas de las empresas de consultoría, con base en la metodología de puntos y porcentajes. De tal manera, que se valore, en primer lugar, la calidad del proyecto propuesto y se evite una decisión por el bajo precio, que provoque a la postre altos costos por retrasos, retrabajos o mala calidad del proyecto.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->
@endsection
@extends('layouts.js')