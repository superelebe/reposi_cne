@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-10.png" />
            <h1>REVISTAS CONSULTORAS "INDUSTRIA DEL CONOCIMIENTO"</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>La revista Consultoría, con más de cinco años en el mercado editorial mexicano, es el órgano de comunicación institucional por excelencia de la CNEC, así como la primera y más importante revista de la Industria del Conocimiento a nivel nacional.

Con un diseño moderno, elegante y actual, Consultoría publica cada mes, de forma objetiva y puntual, los temas de mayor interés para los consultores </p>
            <p>mexicanos, empresarios de cualquier nivel, así como funcionarios, catedráticos, entre otros.

Economía, Finanzas, Infraestructura, Responsabilidad Social, Pymes, Tecnología e Innovación, Leyes, Política y Geopolítica, Desarrollo Sustentable… son temas que cotidiana y profesionalmente se abordan en sus páginas.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->

@endsection
@extends('layouts.js')
