@extends('layouts.app')
@section('content')
<div class="fondo_capacitacion">
	<div class="ocho80">
        <div class="row row-centered">
            <div class='col-sm-5 margen_350'>
                <div class="row">
                    <div class="col-sm-12">
                        <a href=""><img src="{{asset('img/pdficon-dg1.jpg')}}" alt=""></a>
                    </div>
                    <div class="col-sm-12">
                        <a href=""><img src="{{asset('img/pdficon-dg2.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class='padding_100'>
                    <div class='row row-centered'>
                            <div class="col-sm-8 col-centered">
                                <div class='img_principal_curso'>
                                    <img class='imagen_al_100' src="{{asset($elprimero->imagen)}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-4 col-centered">
                                <div class="alineado_izq">
                                    <div class='fecha_inicio margen_10 color_blanco'>
                                        {{$elprimero->start->format('d / m / y')}}
                                    </div>
                                    <div class='titulo_curso_inicio margen_10'> 
                                        {{$elprimero->title}}
                                    </div>
                                    <div class='margen_10'>
                                        {{substr(strip_tags($elprimero->descripcion),0,100)}}{{strlen(strip_tags($elprimero->descripcion)) > 100 ? "...":""}}
                                    </div>
                                    <div class='fondo_verde_obs vermas_blanco alineado_centro'><a href="{{$elprimero->url}}">Ver Mas</a></div>                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row row-centered">
                    @foreach($collection as $potato)
                        <div class="col-xs-6 col-sm-4 margen_30">
                            <div class='img_sec_curso'>
                                <img class='imagen_al_100' src="{{asset($potato->imagen)}}" alt="">
                            </div>
                            <div class='alineado_izq'>
                                <div class='fecha_inicio margen_10'>
                                    {{$potato->start->format('d / m / y')}}
                                </div>
                                <div class='titulo_curso_inicio margen_10'>
                                    {{$potato->title}}
                                </div>
                                <div class='margen_10'>
                                    {{substr(strip_tags($potato->descripcion),0,100)}}{{strlen(strip_tags($potato->descripcion)) > 100 ? "...":""}}
                                </div>
                                <a class='margen_10' href="{{$elprimero->url}}">
                                <div class='fondo_verde_obs vermas_blanco alineado_centro'>
                                    <div>Ver Mas</div>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
<!--         <div id="capaconten" class="limpiar clearfix">p
    <div id="pendondgray">
        <span><a href="descargas/formato_Inscripcion_cursos_software.xlsx"><img src="img/pdficon-dg.jpg" alt="pdf" /><p>Formato de Inscripción para cursos de software</p></a></span>
        <span><a href="descargas/formato_Inscripcion_cursos_generales.xlsx"><img src="img/pdficon-dg.jpg" alt="pdf" /><p>Formato de Inscripción para cursos generales</p></a></span>
    </div>
</div>
<div class="curso-columna-1">
    <div class="row row-centered">

    </div>

</div> -->
    </div>
</div>

@endsection
