@extends('layouts.app')
@section('content')

	<div id="servicios-cnec">
		<div class="ocho80">
	    	<div id="titulo">
	        	<img src="../img/iconosservicios/icono-2.png" />
	            <h1>MONITOREO LEGISLATIVO</h1>
	        </div>
	        
	        <div id="contenido" class="limpiar">
	        	<p>Se desprende del monitoreo del Pleno de la Cámara de Diputados y del Senado de la República, con lo cual se entregan reportes semanales de los periodos ordinarios (septiembre a diciembre y febrero a abril), así como de la Comisión Permanente (diciembre a enero y mayo a agosto). Cabe subrayar, que en caso de existir, se incluyen los periodos extraordinarios.</p>
	            <p>En función de la agenda legislativa y la prioridad de temas, se integran reportes del monitoreo de comisiones/comités de ambas cámaras, entre ellos de Hacienda, Presupuesto, Economía, Medio Ambiente, Vivienda, Comunicaciones y otras. Asimismo, se da seguimiento a las comparecencias de funcionarios públicos que sean citados al Pleno de alguna de las dos Cámaras o como parte de las actividades de alguna comisión.</p>
	            <a href="{{ url('/servicios') }}"></a>
	        </div>
	    </div>
	</div>
	<!--termina div del servicios-->


	<div id="footconten" class="limpiar"></div>
	<!--termina div footer-->

	</body>
	</html>
@endsection
@extends('layouts.js')