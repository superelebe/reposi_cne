@extends('layouts.app')

@section('content')


<div class="contenedor">
    <div class="row row-centered">
        <div class="col-md-12 col-centered img_centrada">
            <img src="{{asset('img/banner-404.png')}}" alt="">
        </div>
    </div>
    <div class="row row-centered">
        <div class="col-md-4 col-centered titulo_seccion">
            <div class="panel panel-default">
                <div class="panel-heading">404</div>
            </div>
            <div >
            	Sitio expirado
            </div>
        </div>
        <div class="col-md-4 col-centered titulo_seccion" >
        	<a href="{!! URL::previous() !!}">Regresar</a>
        </div>
    </div>

</div>
@endsection