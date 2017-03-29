@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-5.png" />
            <h1>CAPACITACIÓN, ACTUALIZACIÓN Y ADIESTRAMIENTO</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>A través del Instituto Mexicano de Desarrollo Tecnológico (IMDT), organismo filial de la CNEC, fundado en 1988, ofrecemos cursos, talleres especiales, seminarios y diplomados en diversas disciplinas de la consultoría, con el propósito de actualizar al personal profesional de las empresas de nuestra industria. Igualmente, otorgamos estos servicios a funcionarios, mandos medios y terceros de</p>
            <p>Dependencias Públicas, quienes pueden coordinar con la CNEC eventos de capacitación o actualización de acuerdo con requerimientos específicos y, desde luego, éstos pueden llevarse a cabo en las instalaciones de la Cámara o en las Dependencias, según el caso, sin obviar la posibilidad de reimpartirlos en modalidad a distancia.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->


<div id="footconten" class="limpiar"></div>
<!--termina div footer-->
@endsection
@extends('layouts.js')