@extends('layouts.app')
@section('content')
	<section class="content">
	    <h1>
	        Afiliados
	    </h1>

	  {{--   <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
				        <thead>
				            <th>EMPRESA</th>
				            <th>CIUDAD</th>
				            <th>SERVICIOS</th>
				            <th>CERTIFICACIONES</th>
				            <th>DETALLES</th>
				        </thead>
				        <tbody>
				            @foreach($afiliados as $afiliado) 
				            <tr>
				                <td>{{$afiliado->empresa}}</td>
				                <td>{{$afiliado->ciudad_id}}</td>
				                <td>{{$afiliado->servicio_id }}</td>
				                <td>{{$afiliado->certificados }}</td>
				                <td><a href="/detalle_afiliado/{{$afiliado->id}}">Ver detalle</a></td>
				            </tr>
				            @endforeach 
				        </tbody>
				    </table>
	    {!! $afiliados->render() !!} --}}

	    <br>
	 

	    <div id="empresas">
	    	<div class="ocho80">
	    		<div id="selects">
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
	    		<div id="paginacion"> </div>
	    		   <table cellpadding="10">
				        <thead>
				            <th>EMPRESA</th>
				            <th>CIUDAD</th>
				            <th>SERVICIOS</th>
				            <th>CERTIFICACIONES</th>
				            <th>DETALLES</th>
				        </thead>
				        <tbody>
				            @foreach($afiliados as $afiliado) 
				            <tr>
				                <td>{{$afiliado->empresa}}</td>
				                <td>{{$afiliado->ciudad_id}}</td>
				                <td>{{$afiliado->servicio_id }}</td>
				                <td>{{$afiliado->certificados }}</td>
				                <td><a href="/detalle_afiliado/{{$afiliado->id}}">Ver detalle</a></td>
				            </tr>
				            @endforeach 
				        </tbody>
				    </table>
	    {!! $afiliados->render() !!}
	    	</div>
	    </div>




	</section>
@endsection