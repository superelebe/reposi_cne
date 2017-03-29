@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-9.png" />
            <h1>PARTICIPACIÓN EN COMISIONES MIXTAS</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>Con el objetivo de facilitar la participación de la consultoría organizada en los proyectos y programas de las Dependencias de Gobierno, la CNEC formaliza acuerdos estratégicos con éstas últimas y establece Comisiones Mixtas de trabajo, que se integran con los funcionarios públicos designados por la Dependencia en cuestión y representantes de la Cámara especializados en las áreas requeridas.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->


<div id="footconten" class="limpiar"></div>
<!--termina div footer-->

@endsection
@extends('layouts.js')