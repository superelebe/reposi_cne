@extends('layouts.app')
@section('content')
<div class="fondo_capacitacion">
	<div class="ocho80">
        <div class="row row-centered">
            <div class="col-sm-12">
                <div class='padding_700'>
                    <div class='row row-centered'>
                            <div class="col-sm-8 col-centered">
                                <div><img class='imagen_al_100' src="{{asset($elprimero->imagen)}}" alt=""></div>
                            </div>
                            <div class="col-sm-4 col-centered">
                                <div class="alineado_izq">
                                    <div>
                                        {{$elprimero->start->format('d / m / y')}}
                                    </div>
                                    <div> <h2>{{$elprimero->title}}</h2></div>
                                    <div class='margin-top-20'><a href="{{$elprimero->url}}">Ver Mas</a></div>                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row row-centered">
                    @foreach($collection as $potato)
                        <div class="col-md-4 margen_30">
                            <div>
                                <img class='imagen_al_100' src="{{asset($potato->imagen)}}" alt="">
                            </div>
                            <div class='alineado_izq'>
                                <div>
                                    {{$potato->title}}
                                </div>
                                <div>
                                    {{substr(strip_tags($potato->descripcion),0,100)}}{{strlen(strip_tags($potato->descripcion)) > 100 ? "...":""}}
                                </div>
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
