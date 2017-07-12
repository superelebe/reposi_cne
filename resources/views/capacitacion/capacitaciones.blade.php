@extends('layouts.app')
@section('content')
<div class="fondo_capacitacion">
	<div class="ocho80">
        <div class="row row-centered">
            <div class="col-sm-12">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row row-centered">
                    @foreach($capacitaciones as $capacitacion)
                        <div class="col-md-3">
                                <div><img src="{{asset('$capacitacion->imagen')}}" alt=""></div>
                                <div> <h2>{{$capacitacion->title}}</h2></div>
                                <div>
                                    Inicio: {{$capacitacion->start->format('d / m / y')}}
                                </div>
                                <div>Finaliza: {{$capacitacion->end->format('d / m / y')}}</div>
                                <div class='margin-top-20'><a href="{{$capacitacion->url}}">Ver Mas</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
<!--         <div id="capaconten" class="limpiar clearfix">
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
