@extends('layouts.app')
@section('content')

<div id="servicios-cnec">
	<div class="ocho80">
    	<div id="titulo">
        	<img src="../img/iconosservicios/icono-8.png" />
            <h1>PUBLICACIONES <br /> CNEC –FIDOC</h1>
        </div>
        
        <div id="contenido" class="limpiar">
        	<p>La CNEC, genera publicaciones diversas sobre la actividad consultora que ofrece a las Dependencias, a precios preferenciales de socio activo; al igual que publicaciones editadas por la Federación Internacional de Ingenieros Consultores (FIDIC) que son de interés sobresaliente para la consultoría en general, entre ellos el BIMS y el GPIMS, que plantea la metodología para implantar un</p>
            <p>Sistema de Gestión de la Integridad en Dependencias del Sector Público, ambas guías fueron concebidas por la consultoría de México y tomadas por esta Federación Internacional que agrupa más de 80 países y que se ha dedicado desde hace más de 60 años a desarrollar e impulsar la ingeniería en el mundo.</p>
            <a href="{{ url('/servicios') }}"></a>
        </div>
    </div>
</div>
<!--termina div del servicios-->
@endsection
@extends('layouts.js')