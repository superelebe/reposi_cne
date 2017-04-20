@extends('layouts.app')
@section('content')
	<section class="content">
	    <h1>
	        Afiliados
	    </h1>

	    <br>
	    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
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

	</section>
@endsection