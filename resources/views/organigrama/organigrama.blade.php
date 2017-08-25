@extends('layouts.app')
@section('content')

<section class="contenedor">
    <div class="fondo_organigrama">
        <div class="ocho80">
            <div class="row row_centered">
                <div class="col-12">
                    <div class="organizar_puestos alineado_centro margen_50">
                        <div id="organigrama_cnec" class="ocho80">
                            <section class="row row-centered padding_organigrama ">
                                <div class='col-sm-12'>
                                    <div class="centrado organigrama">
                                        <div class='presi'>
                                            <img src="{{$elpresi->imagen}}" alt="">
                                            <div>{{$elpresi->nombre}}</div> 
                                            <div class="pleca_titulo_organi">{{$elpresi->puesto->titulo}}</div>
                                        </div>
                                        @foreach ($puestos as $lalala)
                                            <div class="potato">
                                                <div class='row'>
                                                    <div class="col-5">
                                                        <div><img class='imagen_al_100' src="{{$lalala->imagen}}" alt=""></div>
                                                    </div>
                                                    <div class='col-6'>
                                                        <div class="col-sm-12 alineado_izq">{{$lalala->nombre}}</div>
                                                        <div class="pleca_titulo_organi">{{$lalala->puesto->titulo}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>  
                        </div>
                    </div>

                    <div class="organizar_puestos alineado_centro margen_50">
                        <div class='titulo_cnec_med titulo_cnec_mediano texto_organigrama'>
                            Vicepresidencias 2017-2018
                        </div>
                        <div class='border_linea_verde margen_10'>
                            
                        </div>
                        <div class="row row-centered">
                            @foreach($vices as $vice)
                                    <div class='col-12 col-sm-6 margen_10'>
                                        <div class="row">
                                            <div class="col-3">
                                                <img class='imagen_al_100' src='{{asset("$vice->imagen")}}'>
                                            </div>
                                            <div class="col-8 alineado_izq">
                                                <p class='alineado_izq'>{{$vice->titulo}}</p>
                                                <div class='pleca_titulo_organi'>{{ $vice->nombre }}</div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach 
                        </div>
                    </div>
                    <div class="organizar_puestos alineado_centro margen_50">
                        <div class='titulo_cnec_med titulo_cnec_mediano texto_organigrama '>
                            Representantes 2017-2018
                        </div>
                        <div class='border_linea_verde margen_10'>
                            
                        </div>
                        <div class="row row-centered">
                            @foreach($representantes as $representante)
                                    <div class='col-12  col-sm-6 margen_10'>
                                        <div class="row">
                                            <div class="col-3">
                                                <img class='imagen_al_100' src='{{asset("$representante->imagen")}}'>
                                            </div>
                                            <div class="col-8">
                                                <p class='alineado_izq'>{{$representante->titulo}}</p>
                                                <div class='pleca_titulo_organi'>{{ $representante->nombre }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            @endforeach
                        </div>
                    </div>
                    <div class="organizar_puestos alineado_centro margen_50">
                        <div class='titulo_cnec_med titulo_cnec_mediano texto_organigrama '>
                            DELEGACIÓN GUANAJUATO 2017-2018
                        </div>
                        <div class='border_linea_verde margen_10'>
                            
                        </div>
                        <div class="row row-centered">
                            @foreach($losdemas as $demas)
                                    <div class='col-12  col-sm-6 margen_10'>
                                        <div class="row">
                                            <div class="col-3">
                                                <img class='imagen_al_100' src='{{asset("$demas->imagen")}}'>
                                            </div>
                                            <div class="col-8">
                                                <p class='alineado_izq'>{{$demas->titulo}}</p>
                                                <div class='pleca_titulo_organi'>{{ $demas->nombre }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>

</section>
@endsection