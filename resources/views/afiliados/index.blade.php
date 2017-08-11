@extends('layouts.app')
@section('content')
	
	<div class="fondo_afiliados">
		<div class="ocho80 padding_400">
			<div class="row row-centered">
				<div class="col-12 selects fondo_verde_obs padding_10">
		    			<form name="form1" method="post" action="">
		    				<select name="idarea" onchange="obtenerSubArea(this.value)" style="width:190px; height:24px; float:left; margin-right:10px">
								<option value="0">Seleccione una área</option>
								<option value="1">A- Economía, Inversión y Finanzas</option>
								<option value="2">B- Administración y Gestión</option>
								<option value="3">C- Planeación y Diseño</option>
								<option value="4">D- Administración de Obras</option>
								<option value="5">E- Servicios Tecnológicos Profesionales</option>
							</select>
								<div id="muestrasubarea" style="float:left; margin-right:10px"></div>
								<div id="muestraciudad" style="float:left; margin-right:10px"></div>
								<div id="muestracertsino" style="float:left; margin-right:10px"></div>
								<div id="muestrasubmit" style="float:left; margin-right:10px"></div>
		    			</form>
				</div>
				<div class='margen_50 table-responsive' id="paginacion">
		    		   <table class='table'>
					        <thead>
					        	<th>LOGOTIPO</th>
					            <th>EMPRESA</th>
					            <th>CIUDAD</th>
					            <th>SERVICIOS</th>
					            <th>CERTIFICACIONES</th>
					            <th>DETALLES</th>
					        </thead>
					        <tbody>
					            @foreach($afiliados as $afiliado) 
					            <tr>
					            	<td>{{$afiliado->imagen}}</td>
					                <td>{{$afiliado->empresa}}</td>
					                <td>{{$afiliado->ciudad->nombre}}</td>
					                <td>{{$afiliado->servicios->nombre }}</td>
					                <td>{{$afiliado->certificados }}</td>
					                <td><a href="/detalle_afiliado/{{$afiliado->id}}">Ver detalle</a></td>
					            </tr>
					            @endforeach 
					        </tbody>
					    </table>
		    			{!! $afiliados->render() !!}
		    	</div>	
			</div>
		</div>
	</div>

@endsection