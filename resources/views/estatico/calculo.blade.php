
@extends('layouts.app')
@section('content')
<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-3.png" style="margin-left:75px;" />
            <h1>METODOLOGÍA PARA EL CÁLCULO DE FACTORES ECONÓMICOS <small style="font-size:30px">(ARANCELES)</small></h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>Documento elaborado cada año por la CNEC, que contiene la metodología para el cálculo de tabuladores de puestos y factores de prestaciones, indirectos y utilidad, necesarios para costear las propuestas de servicios de consultoría.</p>
            <p>Éste, es necesario para que las Dependencias que contratan consultoría se apeguen a la evaluación de las propuestas, que según lo señalado en el artículo 31, fracción XVIII de la Ley de Obra Pública y Servicios relacionados con las mismas, respecto a "… los tabuladores de las cámaras industriales y colegios de profesionales que deberán servir de referencia para determinar los sueldos y honorarios profesionales del personal técnico".</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->
@endsection
@extends('layouts.js')