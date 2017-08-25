@extends('layouts.app')
@section('content')

<style>
#map_wrapper {
    height: 400px;
    padding-top: 40px;
}

#map-canvas {
    width: 100%;
    height: 100%;
}
#map {
        height: 500px;
      }

#info{
    width: 500px;
    height: 500px;
}      
</style>

<div class='fondo_uno'>
    <div class="ocho80">
        <div class="margen_40">
            <div class="row">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-6 col-sm-6">
                </div>
            </div>
        </div>
        <div class='fondo1'>
            <div class="row row-centered">
                <div class="col-sm-4  col-xs-12 justificado">
                    <div class='margen_especial_cnec'>
                        La <span>CNEC</span> es un órgano multidisciplinario, formado por empresas sólidas que prestan servicios con calidad e integridad; líder de opinión y centro de información de la Consultoría mexicana, con presencia nacional e internacional, que desarrolla y promueve oportunidades de trabajo.
                    </div>
                    <div class='margen_60'>
                        <div class='titulo_cnec_med titulo_cnec_mediano alineado_izq margen_10'>MISIÓN</div>
                        <div>
                            Representar a la consultoría mexicana; ser su voz, presencia y opinión; promover oportunidades de negocios para sus afiliados y fortalecer su competitividad y desarrollo en un ámbito de responsabilidad social empresarial.
                        </div>
                    </div>
                    <div class='margen_60'>
                        <div class='titulo_cnec_med titulo_cnec_mediano alineado_izq margen_10'>
                            VISIÓN
                        </div>
                        <div>
                            Ser reconocidos como un organismo que explora, desarrolla y promueve oportunidades de trabajo para la consultoría, con un sistema nacional participativo y responsable, institucional y actualizado, que promueve la mejora continua en la atención a sus socios.

                        </div>
                    </div>
                </div>
                <div class='col-sm-7 col-xs-12'>
                    <div class='hexagono_cnec'>
                        <img src="{{asset('img/hexagono.png')}}" alt="">
                    </div>
                    <div class='margen_top_350 areas_especialidades'>
                        <div class='titulo_cnec_med titulo_cnec_mediano justificado'>
                            ÁREAS DE <br> ESPECIALIDAD
                        </div>
                        <div class='border_verde'>
                        </div>
                        <a href="{{url('areas_especialidad')}}">
                            <div class='ver_areas_especiali'>
                                VER TODAS LAS  ÁREAS
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <section>
            <div class='row row-centered'>
                <div class='col-md-12 col-centered margen_40'>
                    <div>
                        <div class='iconos_cnec'>
                            <img src="{{asset('img/target_1.png')}}" alt="">
                        </div>
                        <div class='titulo_lineas_cnec'>
                            <div class='alineado_izq alineado_izq titulo_cnec_med titulo_cnec_mediano color_azul'>
                                NUESTROS <br>OBJETIVOS
                            </div>
                            <div class="franja_objetivos_cnec_bottom alineado_izq margin_abajo_10"><img class='imagen_al_100' src="{{asset('img/linea_nuestros_objetivos.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-md-8 col-sm-8 col-xs-2 col-centered pading_izq_80'>
                            <div class="row alineado_izq listado_que_es_cnec margen_40_todo">
                                <div class="col-md-6">
                                    Representar los intereses de la consultoría nacional.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Detectar oportunidades de trabajo para sus afiliados.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Impulsar la creación de organismos para el desarrollo de esta actividad.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Coadyuvar en el desarrollo tecnológico y la Infraestructura del país.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">Ser el órgano encargado de operar el registro del sector consultoría en el Sistema de Información Empresarial Mexicano SIEM.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Ser órgano de consulta del estado.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-12 col-centered margen_40'>
                    <div>
                        <div class='titulo_lineas_cnec'>
                            <div class="alineado_izq alineado_izq titulo_cnec_med titulo_cnec_mediano color_azul_clarito">
                                ÁREAS DE <br><span>OPORTUNIDAD:</span>
                            </div>
                            <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_verde_1.png')}}" alt="">
                            </div>  
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-8 col-sm-8 col-xs-2 col-centered pading_izq_80">
                            <div class="row alineado_izq listado_que_es_cnec margen_40_todo">
                                <div class="col-md-6">
                                    Acceso a profesionistas capacitados.
                                    <div class='rectangulito fondo_azul'></div>
                                </div>
                                <div class="col-md-6">
                                    Capacitación Profesional.
                                    <div class='rectangulito fondo_azul'></div>
                                </div>
                                <div class="col-md-6">
                                    Asesoría especializada, sectorizada y/o integral.
                                    <div class='rectangulito fondo_azul'></div>
                                </div>
                                <div class="col-md-6">
                                    Apoyo en el Fortalecimiento y Desarrollo Institucional de dependencias.
                                    <div class='rectangulito fondo_azul'></div>
                                </div>
                                <div class="col-md-6">
                                    Propuestas para el desarrollo sustentable del Estado y sus Municipios.
                                    <div class='rectangulito fondo_azul'></div>
                                </div>    
                            </div>
                        </div>

                    </div>

                </div>
                <div class='col-md-12 col-centered margen_40'>
                    <div>
                        <div  class='titulo_lineas_cnec'>
                            <div class='alineado_izq titulo_cnec_med titulo_cnec_mediano color_azul_verde'>
                                ÁREAS PRINCIPALES <br><span>DE PARTICIPACIÓN:</span>
                            </div>
                            <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_verde_1.png')}}" alt="">
                            </div>    
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-8 col-sm-8 col-xs-2 col-centered pading_izq_80">
                            <div class="row alineado_izq listado_que_es_cnec margen_40_todo">
                                <div class="col-md-6">
                                    Secretaria de Obra Pública.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Instituto de Ecología
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Comisión Estatal del Agua.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Instituto Estatal de Capacitación.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Procuraduría de Protección al Ambiente (PROPAEG).
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                                <div class="col-md-6">
                                    Comisión de Vivienda.
                                    <div class='rectangulito fondo_verde'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </section>
    </div> 
</div>
<div class='fondo_2'>
    <div id="organigrama_cnec" class="ocho80">
        <section class="row row-centered ">
            <div class='col-md-12 border_linea_verde alineado_centrado'>
                <div class='titulo_cnec_med titulo_cnec_mediano texto_organigrama'>
                    <span>ORGANIGRAMA</span> <br>CONSEJO DIRECTIVO 2017-2018: 
                </div>
            </div> 
            <div class='col-md-12 background_organi'>
                <div class='alineado_derecha'>
                    <a href="{{url('organigrama_cnec')}}">
                        <img src="{{asset('img/ver_organigrama.png')}}" alt="">
                    </a>
                </div>
                <div class="organigrama margin_arriba_70">
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
<div class='fondo_3'>
    <div class="ocho80">
        <section class="row row-centered padding_organigrama_cnec">
            <div class="col-md-12 alineado_izq">
                <div class="row">
                    <div class="col-sm-5 col-xs-6">
                        
                    </div>
                    <div class="col-sm-5 col-xs-6 texto_estrellas">
                        <p>Desde el año 2002 cuando se instituyó el Premio Nacional de Ética y Valores en la Industria por la CONCAMIN</p>
                        <p class='galardonado borde_verde_delgado'><span>CNEC</span> ha sido galardonada en 12 ocasiones y 7 veces consecutivas.</p>
                    </div>
                </div>
            </div>
            <div class='col-md-12 alineado_izq'>
                <div class='titulo_cnec_med titulo_cnec_mediano color_azul_clarito borde_verde_delgado margen_arriba_200'>
                    REPRESENTANTES <br> MUNICIPALES <br><span>DIRECTORIO DE<br> CONSEJO DIRECTIVO</span> 
                </div>
            </div>
            <div class='col-md-12'>
                <div class="centrado organigrama paddign_80">
                    <div id="map"></div>
                </div> 
            </div>        
        </section>  
    </div>
</div>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ5jTIJRbn_eTJranyQQQ7n9ve30Z09hk'></script>
    <script>
      // This example creates a custom overlay called USGSOverlay, containing
      // a U.S. Geological Survey (USGS) image of the relevant area on the map.

      // Set the custom overlay object's prototype to a new instance
      // of OverlayView. In effect, this will subclass the overlay class therefore
      // it's simpler to load the API synchronously, using
      // google.maps.event.addDomListener().
      // Note that we set the prototype to an instance, rather than the
      // parent class itself, because we do not wish to modify the parent class.
 var locations = [
      ['<div id="mapaInfo" class="alineado_izq">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 class="nombreInfo">Arq.Antonio Mercado Munoz</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Representante del Municipio de Guanajuato</b>' +
      '<div class="datos_info">Direccion</div> '+
      ' <p>Santa Gertrudis #55</br>'+
      'Paseo de la presa</br> '+
      'Guanajuato, Guanajuato</p>'+
      '<div class="datos_info">Telefono:</div>'+
      ' <p>(01) 473 141  45084 / 473 734 14 75 </p> '+
      '<div class="datos_info">Mail:</div> '+
      ' <p>aammaruitectogto@gmail.com</p>'+
      '</div>'+
      '</div>', 21.010798, -101.303048, 3],

      ['<div id="mapaInfo" class="alineado_izq">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 class="nombreInfo">Ing. Brenda Ariadna Miranda Bribiesca</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Representante Zona Metropolitana Irapuato-Salamanca</b>' +
      '<div class="datos_info">Direccion</div> '+
      ' <p>Villahermosa #484</br>'+
      'Jardines de la Hacienda</br> '+
      'Irapuato, Guanajuato</p>'+
      '<div class="datos_info">Telefono:</div>'+
      ' <p>(01) 462 622  3132</p> '+
      '<div class="datos_info">Mail:</div> '+
      ' <p>miradabribiesca@yahoo.com</p>'+
      '</div>'+
      '</div>', 20.666320, -101.464933, 2],
      ['<div id="mapaInfo" class="alineado_izq">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 class="nombreInfo">Lic. Maria del Pilar Ayala  Mendoza</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Representante Zona Metropolitana Abasolo</b>' +
      '<div class="datos_info">Direccion</div> '+
      ' <p>16 de Septiembre #303</br>'+
      'Centro</br> '+
      'Abasolo, Guanajuato</p>'+
      '<div class="datos_info">Telefono:</div>'+
      ' <p>(01) 462 187  3517</p> '+
      '<div class="datos_info">Mail:</div> '+
      ' <p>concatoconocer@cnecgtoo.org</p>'+
      '</div>'+
      '</div>', 20.458932, -101.591739, 1],
      ['<div id="mapaInfo" class="alineado_izq">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 class="nombreInfo">Lic. Efren Busquets Silva</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Representante Zona Metropolitana Celaya</b>' +
      '<div class="datos_info">Direccion</div> '+
      ' <p>Fresno #705</br>'+
      'Col. San Antonio</br> '+
      'Celaya, Guanajuato</p>'+
      '<div class="datos_info">Telefono:</div>'+
      ' <p>(01) 462 611 7729 / 461 611 8000</p> '+
      '<div class="datos_info">Mail:</div> '+
      ' <p>busee@prodigy.net.mx</p>'+
      '</div>'+
      '</div>', 20.456098, -100.838759, 0]
    ];
var map;
var image = '{{asset("img/puntito_verde.png")}}';
      var overlay;
      USGSOverlay.prototype = new google.maps.OverlayView();
var estilos = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
      // Initialize the map and the custom overlay.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(21.017035, -101.122391),
          styles: estilos,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var bounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(19.913954, -103.506987),
            new google.maps.LatLng(21.823585, -100.923257));

        // The photograph is courtesy of the U.S. Geological Survey.
        var srcImage = '{{asset("img/gtomapa.png")}}';

        // The custom USGSOverlay object contains the USGS image,
        // the bounds of the image, and a reference to the map.
        overlay = new USGSOverlay(bounds, srcImage, map);
            var infowindow = new google.maps.InfoWindow();

        var marker, i;



        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            icon: image,
            map: map
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      }

      /** @constructor */
      function USGSOverlay(bounds, image, map) {

        // Initialize all properties.
        this.bounds_ = bounds;
        this.image_ = image;
        this.map_ = map;

        // Define a property to hold the image's div. We'll
        // actually create this div upon receipt of the onAdd()
        // method so we'll leave it null for now.
        this.div_ = null;

        // Explicitly call setMap on this overlay.
        this.setMap(map);
      }

      /**
       * onAdd is called when the map's panes are ready and the overlay has been
       * added to the map.
       */
      USGSOverlay.prototype.onAdd = function() {

        var div = document.createElement('div');
        div.style.borderStyle = 'none';
        div.style.borderWidth = '0px';
        div.style.position = 'absolute';

        // Create the img element and attach it to the div.
        var img = document.createElement('img');
        img.src = this.image_;
        img.style.width = '100%';
        img.style.height = '100%';
        img.style.position = 'absolute';
        div.appendChild(img);

        this.div_ = div;

        // Add the element to the "overlayLayer" pane.
        var panes = this.getPanes();
        panes.overlayLayer.appendChild(div);
      };

      USGSOverlay.prototype.draw = function() {

        // We use the south-west and north-east
        // coordinates of the overlay to peg it to the correct position and size.
        // To do this, we need to retrieve the projection from the overlay.
        var overlayProjection = this.getProjection();

        // Retrieve the south-west and north-east coordinates of this overlay
        // in LatLngs and convert them to pixel coordinates.
        // We'll use these coordinates to resize the div.
        var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
        var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());

        // Resize the image's div to fit the indicated dimensions.
        var div = this.div_;
        div.style.left = sw.x + 'px';
        div.style.top = ne.y + 'px';
        div.style.width = (ne.x - sw.x) + 'px';
        div.style.height = (sw.y - ne.y) + 'px';
      };

      // The onRemove() method will be called automatically from the API if
      // we ever set the overlay's map property to 'null'.
      USGSOverlay.prototype.onRemove = function() {
        this.div_.parentNode.removeChild(this.div_);
        this.div_ = null;
      };

      google.maps.event.addDomListener(window, 'load', initMap);
    
    </script>



@endsection
@extends('layouts.js')