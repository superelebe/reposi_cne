
@extends('layouts.app')
@section('content')

<div class="contenedor">
    <div class="fondo_contacto">
        <div class="ocho80 padding_400_50">
            <div class="ancho_al_100">
                <div class="fondo_verde">
                    <div class="">
                        <div class="">
                            <div id="mapa_cnec">
                                
                            </div>
                        </div>
                        <div class="padding_delega">
                            <div class="">
                                <div class="ancho_al_40 col-centered alineado_izq">
                                    <div class="datos_contacto_del">    
                                        <p class='deleg_gto'>Delegación Guanajuato</p>
                                        <p class='line_20'>
                                        Blvd. Mariano Escobedo No. 4502, local 32<br />
                                        Col. San Isidro, León Guanajuato, México</span>
                                        </p>  
                                        <div>
                                           informes@cnecgto.org
                                        </div>
                                    </div>
                                </div>
                                <div class="ancho_al_40 col-centered">
                                    <div>
                                        <div class='num_tel_1'>
                                            01 (477)
                                        </div>
                                        <div class='num_tel_2'>
                                            711 2168 y <br>
                                            711 0433
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-centered fondo_formulario_contact">
                        <div class="col-12 col-sm-7 alineado_izq">
                            <form class='padding_formulario' method="post" action="{{route('enviar_correo_contacto')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="form-control-label label_contacto" for="nombre">Nombre:</label>
                                    <input class="form-control"  type="text" name="nombre" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="form-control-label label_contacto" for="email">Correo electrónico:</label>
                                        <input class="form-control"  type="text" name="correo" />    
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-control-label label_contacto" for="asunto">Teléfono:</label>
                                        <input class="form-control"  type="text" name="telefono" />    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label label_contacto" for="asunto">Asunto:</label>
                                    <input class="form-control"  type="text" name="asunto" />
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label label_contacto" for="mensaje">Mensaje:</label>
                                    <textarea class="form-control"  name="mensaje" ></textarea>
                                </div>
                                <div class="row">
                                    <div class='col-6'>
                                        <div class='nota_formulario'>
                                            ES INDISPENSABLE QUE TODOS LOS CAMPOS ESTEN CONTESTADOS PARA SU CORRECTO REGISTRO
                                            
                                        </div>
                                        
                                    </div>
                                    <div class='col-6 alineado_derecha'>
                                        <input type="submit" id="enviar" value="ENVIAR" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('mapa_cnec'), {
          center: {lat: 21.1039887, lng: -101.6437081},
          scrollwheel: false,
          zoom: 16,
        });
        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 21.1039887, lng: -101.6437081},
          map: map,
          icon: image
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdBOLTPYDCPiKl-3UjPd2wvHZStL0-A90&callback=initMap"
    async defer></script>

<!--termina div del servicios-->
<!--termina div del servicios-->
@endsection
@extends('layouts.js')