@extends('layouts.app')
@section('content')
	<section>
		{{-- <div>
			<div>
				Empresa
				{{$afiliado->empresa}}
			</div>
			<div>
				Telefono
				{{$afiliado->telefono}}
			</div>
			<div>
				Direccion
				{{$afiliado->direccion}}
			</div>
			<div>
				{{$afiliado->email}}
			</div>
		</div> --}}
		<div id="empresas">
		<div class="ocho80">
			<div id="selects">
{{-- 				<a href="afiliados.php">Regresar a búsqueda </a> --}}
				<a href="{{ url('/afiliados') }}">Regresar a búsqueda</a>
			</div>
			<div id="pagination"></div>
				<table style="margin:45px 0 -25px;" width="882">
					<thead>
						<tr>
							<td>EMPRESA</td>
							<td>CONTACTO</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div id="nombre">{{$afiliado->empresa}}</div>
								<div id="subarea">{{$afiliado->servicio_id }}</div>
								<div id="certificacion">{{$afiliado->certificados }}</div>
								<div id="tel">{{$afiliado->telefono}}</div>
								<hr size="1" noshade="noshade">
								<div class="wrapper">
									<div class="div_sobrecito"></div>
									<div id="email">
										<a style="display:block;padding:5px 15px 5px 35px; position:absolute; font-size:16px; margin:0 30px" href="mailto:grupocsh@prodigy.net.mx">grupocsh@prodigy.net.mx</a>
										<br>
										<a style="background-color:#FFF;" href=""></a>
									</div>
								</div>
								<div id="direccion">
								{{$afiliado->direccion}}
								</div>
							</td>
							<td bgcolor="#455560">
								<form class="forma3" name="formafiliados" method="post" action="enviar.php">
									<input name="emailemp" value="grupocsh@prodigy.net.mx" type="hidden">
									<label for="nombre">Escriba su nombre y apellidos:</label>
									<br>
									<input name="nombre" type="text">
									<br>
									<label for="email">Dirección de correo electrónico:</label>
									<br>
									<input name="email" type="text">
									<br>
									<label for="asunto">Asunto del Mensaje:</label>
									<br>
									<input name="asunto" type="text">
									<br>
									<label for="mensaje">Escriba su mensaje:</label>
									<br>
									<textarea name="mensaje" cols="16" rows="6"></textarea>
									<br>
									<input id="enviar" value="ENVIAR" type="submit">
								</form>
							</td>
						</tr>
					</tbody>
				</table>
		</div>
	</div>
	</section>

@endsection