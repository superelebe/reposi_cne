@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-7.png" style="margin-left:150px;" />
            <h1 style="padding-left:100px;">PRECIÓS PREFERENCIALES EN CURSOS, TALLERES O CAPACITACIONES.</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>Acceso a eventos organizados por la CNEC a precios de socio activo, para funcionarios públicos y colaboradores, a Congresos, Seminarios, Foros, Jornadas de Consultoría, Cursos, Talleres y otros, lo que incluye aquellos que se realizan en coordinación o por sugerencia de la Dependencia para alinear temas, criterios o análisis de casos.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->

@endsection
@extends('layouts.js')