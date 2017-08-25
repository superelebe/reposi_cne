@extends('layouts.app')
@section('content')
<div class="fondo_convenio">
	<div class="cinco50 padding_convenios">
        <div class="row row-centered">
            <div class="col-sm-12 paddign_80">
                <div class="row row-centered">


                @if (Auth::guard('web')->check())
                    @foreach($convenios as $convenio)
                        <div class="col-6 col-sm-4 margen_30">
                            <div class='alineado_izq'>
                                <div class='subtitulo_seccion'>
                                    {{$convenio->nombre}}
                                </div>
                                <div class='titulo_curso_inicio margen_10'>
                                    {{$convenio->direccion}}
                                </div>
                                <div class='titulo_curso_inicio margen_10'>
                                    CONVENIO {{$convenio->convenio}}
                                </div>
                                <div class='vigencia_convenio margen_10'>
                                    VIGENCIA: {{$convenio->vigencia}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($tresconvenios as $tresconvenio)
                        <div class="col-12 col-sm-4 margen_30">
                            <div class='alineado_izq'>
                                <div class='subtitulo_seccion'>
                                    {{$tresconvenio->nombre}}
                                </div>
                                <div class='titulo_curso_inicio margen_10'>
                                    {{$tresconvenio->direccion}}
                                </div>
                                <div class='titulo_curso_inicio margen_10'>
                                    CONVENIO {{$tresconvenio->convenio}}
                                </div>
                                <div class='vigencia_convenio margen_10'>
                                    VIGENCIA: {{$tresconvenio->vigencia}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class='col-12 col-centered margen_30'>
                        <div class='texto_convenio_1'>
                            Si eres afiliado, ingresa a tu sesión
                        </div>
                        <div class='texto_convenio_2'>
                            Para conocer los convenios que <br>
                            CNEC DELEGACIÓN GUANAJUATO,
                        </div>
                        <div class='texto_convenio_3'>
                            tiene para Usted.
                        </div>
                        <div>
                            <a href="{{asset('/afiliarse')}}">
                                <div class='afiliate_convenio'>
                                    AFILIATE
                                </div>
                            </a>
                        </div>
                    </div>
                @endif



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
