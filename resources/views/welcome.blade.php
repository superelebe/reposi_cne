@extends('layouts.app')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=1972989829593261";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class='inicio_1'>
  <div class="ocho80">
  <div id="rotador-index">
                    @foreach($otro_banner as $banner)
                          <div title="{{$banner->titulo}}">
                              <a href="{{$banner->link}}"><img src="{{$banner->imagen}}" alt=""></a>
                          </div>
                      @endforeach
        <div title="Semana de Cultura Laboral"> <a href="http://www.cnecgto.org/2014/pdf/Semana_de_Cultura_Laboral_CNEC.pdf"><img src="img/rot-banner-17.jpg" /></a> </div>
        
        <div title="Desarrollo de habilidades para supervisores y resindetes de obras"><a href="http://www.cnecgto.org/2016/curso/desarrollodehabilidades/" target="_blank"><img src="img/rot-banner-desarrollo.jpg" /></a></div> 

        <div title="Formación de consultores"><a href="http://www.cnecgto.org/2016/curso/formaciondeconsultores/" target="_blank"><img src="img/rot-banner-formacion.jpg" /></a></div>

    <!--     <div title="Finanzas para no financieros "><a href="http://www.cnecgto.org/2016/curso/finanzasparanofinancieros/" target="_blank"><img src="img/rot-banner-01.jpg" /></a></div> 
     -->
        <div title="Certificación documental 2015"><img src="img/rot-banner-02.jpg" /></div>  

        <div title="XXXII Asamblea General Mensual"><img src="img/rot-banner-03.jpg" /></div>  

    <!--     <div title="Clausura-Transferencia-de-Conocimientos"><img src="img/rot-banner-04.jpg" /></div>  -->
        
        <div title="Aviso de Privacidad"><a href="http://www.cnecgto.org/avisoprivacidad"><img src="img/rot-banner-05.jpg" /></a></div> 
        
  </div>
    <div class='row row-centered'>
      <div class='col-sm-5 col-centered alineado_izq margen_30'>
        <div>
          <div class='iconos_cnec alineado_centro'>
            <i class="fa fa-lightbulb-o icono_azul_inicio" aria-hidden="true"></i>
          </div>
          <div  class='titulo_lineas_inicio'>
            <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio color_azul'>
              Y TÚ,<br>
              ¿ERES <br>
              CONSULTOR?
            </div>
          </div>
          <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_azul_verde.png')}}" alt="">
          </div>
        </div>
        <div>
          <div>
            <img class="imagen_al_100" src="{{asset('img/eres_consultor.png')}}" alt="">
          </div>
          <ul class='bullet_verde'>
            <li>Un consultor o una empresa consultora, son aliados y consejeros de alta confiabilidad para los ...</li>
          </ul>
        </div>
        <div class='fondo_azul vermas_blanco alineado_centro'>
          VER MÁS
        </div>
      </div>

      <div class='col-sm-5 col-centered alineado_izq'>
        <div class='margen_30'>
          <div>
            <div class='iconos_cnec alineado_centro'>
              <i class="fa fa-search icono_azul_lupa" aria-hidden="true"></i>
            </div>
            <div  class='titulo_lineas_inicio'>
              <div class='alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio color_azul'>
                ¿DÓNDE<br>
                ESTÁN LOS <br>
                CONSULTORES?
              </div>
            </div>
            <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_azul_verde.png')}}" alt="">
            </div>
          </div>
          <div>
            <div>
              <img class='imagen_al_100' src="{{asset('img/donde_estan.png')}}" alt="">
            </div>
            <ul class='bullet_verde'>
              <li>Un consultor o una empresa consultora, son aliados y consejeros de alta confiabilidad para los ...</li>
            </ul>
          </div>
          <div class='fondo_azul vermas_blanco alineado_centro'>
            VER MÁS
          </div>  
        </div>
      </div>


      <div class='col-sm-5 col-centered alineado_izq'>
        <div class="row row-centered">
          <div class="col-md-12 margen_30">
            <div>
              <div class='iconos_cnec alineado_centro'>
                <i class="fa fa-line-chart icono_azul_lupa" aria-hidden="true"></i>
              </div>
              <div  class='titulo_lineas_inicio'>
                <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio color_azul'>
                  BENEFICIOS DE <br>FORMAR PARTE <br>DE LA CNEC
                </div>
              </div>
              <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_azul_verde.png')}}" alt="">
              </div>
            </div>
            <div>
              <div>
                <img class='imagen_al_100' src="{{asset('img/beneficios_cnec.png')}}" alt="">
              </div>
              <ul class='bullet_verde'>
                <li>Un consultor o una empresa consultora, son aliados y consejeros de alta confiabilidad para los ...</li>
              </ul>
            </div>
            <div class='fondo_azul vermas_blanco alineado_centro'>
              VER MÁS
            </div>  
          </div>
          <div class="col-md-12 margen_30">
            <div>
              <div class='iconos_cnec'>
                <img src="{{asset('img/target_1.png')}}" alt="">
              </div>
              <div  class='titulo_lineas_inicio'>
                <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio color_azul'>
                  ÁREAS DE ESPECIALIDAD
                  </div>
              </div>
              <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_azul_verde.png')}}" alt="">
              </div>
            </div>
            <div>
              <ul class='bullet_verde alineado_izq'>
                <li>Economía, Inversión y Finanzas</li>
                <li>Administración y Gestión</li>
                <li>Planeación y Diseño</li>
                <li>Administración de Obras</li>
                <li>Servicios Tecnológicos Profesionales</li>
              </ul>
            </div>
            <div class='fondo_azul vermas_blanco alineado_centro'>
              VER MÁS
            </div>          
          </div>
        </div>
      </div>
      
      <div class='col-sm-5 col-centered alineado_izq margen_30'>
        <div>
          <div class='iconos_cnec alineado_centro'>
            <i class="fa fa-user-circle icono_azul_lupa" aria-hidden="true"></i>
          </div>
          <div  class='titulo_lineas_cnec'>
            <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio color_azul'>
              MENSAJE <br>
              DEL PRESIDENTE <br>
              DE LA CNEC
              </div>
          </div>
          <div class="franja_cnec_bottom alineado_izq margin_abajo_10"><img src="{{asset('img/linea_azul_verde.png')}}" alt="">
          </div>
        </div>
        <div>
          <img class='imagen_al_100' src="{{asset('img/foto_presidente.png')}}" alt="">
        </div>
        <div class='fondo_azul alineado_centro paddign_40 nombre_presidente'>
          Arq. Francisco Javier <br> Schwichtenberg Aguado
        </div>
        <div class='margen_10'>
            "La Consultoría es la óptima utilización de conocimientos técnicos de excelencia sustentados en experiencia, la integridad moral y un alto sentido de responsabilidad, para lograr la máxima eficiencia en la definición conceptual, el financiamiento, el...
        </div>
        <div class='fondo_azul vermas_blanco alineado_centro'>
          VER MÁS
        </div> 
      </div>
      
    </div> 
  </div>

</div>

<section class='inicio_2'>
  <div class="ocho80">
    <div class="row row-centered margen_50">
      <div class='col-md-12'>
        <div class='row row-centered'>
            <div class='col-sm-6'>
              <div class='iconos_cnec'>
                <i class="fa fa-calendar-check-o icono_inicio texto_verde" aria-hidden="true"></i>
              </div>
              <div  class='titulo_lineas_inicio'>
                <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio texto_verde'>
                  CALENDARIO
                </div>
              </div>   
            </div>

            <div class='col-sm-6 '>
              <div class='alineado_derecha pestana_vermas'>
                <a href="{{url('eventos')}}"><img src="{{asset('img/ver_mas_cursos.png')}}" alt=""></a>
              </div>
            </div>
        </div>

        <div class="franja_inicio_bottom alineado_izq margin_abajo_10">
          <img src="{{asset('img/linea_verde_gd.png')}}" alt="">
        </div>
      </div>
      
      <div class="col-sm-12 paddign_40">
        <div class="row row-centered">
            @foreach($fechas as $fecha)
              <div class="col-sm-5 col-centered alineado_izq">
                <div class='overflow_hidden'>
                  <img src="{{asset($fecha['imagen'])}}" alt="">
                </div>
                <div class="fecha_inicio margen_10">
                  <span>{{date("d - m - Y", strtotime($fecha['start']))}}</span> 
                  <a href="{{$fecha['url']}}" target="_blank" title="Ver más información"></a>
                </div>
                <div class='titulo_curso_inicio '>
                  {{$fecha['title']}}
                </div>
                <div class='margen_10'>
                  {{substr(strip_tags($fecha['descripcion']),0,100)}}{{strlen(strip_tags($fecha['descripcion'])) > 100 ? "...":""}}
                </div>
                <div class='fondo_azul vermas_blanco alineado_centro'>
                  <a href="{{$fecha['url']}}" target="_blank" title="Ver más información">VER MAS</a>
                </div> 
              </div>
            @endforeach
        </div> 
      </div>

    </div>
  </div>
</section>


<section class='inicio_3'>
  <div class="ocho80">
    <div class="row row-centered margen_50">
      <div class='col-md-12'>
        <div class='row row-centered'>
            <div class='col-sm-6'>
              <div class='iconos_cnec'>
                <i class="fa fa-newspaper-o icono_inicio texto_azul" aria-hidden="true"></i>
              </div>
              <div  class='titulo_lineas_inicio'>
                <div class='alineado_izq alineado_izq titulo_cnec_mediano titulo_cnec_med_inicio texto_azul'>
                  NOTICIAS
                </div>
              </div>   
            </div>

            <div class='col-sm-6 '>
              <div class='alineado_derecha pestana_vermas'>
                <a href="{{route('noticias')}}"><img src="{{asset('img/ver_mas_noticias.png')}}" alt=""></a>
              </div>
            </div>
        </div>

        <div class="franja_inicio_bottom alineado_izq margin_abajo_10">
          <img src="{{asset('img/linea_verde_gd.png')}}" alt="">
        </div>
      </div>
      
      <div class="col-sm-11 col-centered paddign_40">

            @foreach($noticias as $noticia)
            <div class='margen_20'>
              <div class="row row-centered">
                <div class="col-sm-7 alineado_izq">
                  <div class='overflow_hidden'>
                    <img src="{{asset($noticia->imagen)}}" alt="">
                  </div>

                </div>
                <div class="col-sm-5 alineado_izq">
                  <div class="fecha_inicio margen_10">
                    <span>{{date("d - m - Y", strtotime($noticia->start))}}</span> 
                    <a href="{{$noticia->url}}" target="_blank" title="Ver más información"></a>
                  </div>
                  <div class='titulo_curso_inicio '>
                    {{$noticia->titulo}}
                  </div>
                  <div class='margen_10'>
                    {{substr(strip_tags($noticia->cuerpo),0,150)}}{{strlen(strip_tags($noticia->cuerpo)) > 150 ? "...":""}}
                  </div>
                  <div class='fondo_azul vermas_blanco alineado_centro'>
                    <a href="noticia/{{$noticia->id}}" target="_blank" title="Ver más información">LEER MÁS</a>
                  </div>
                </div>
              </div>  
            </div>
            @endforeach

      </div>

    </div>
    <div class="redes_sociales">
      <div class="row row-centered">
        <div class="col-sm-10 col-centered">
          <div class="row">
            <div class="col-sm-6 col-centered">
              <div class="col-sm-12 col-centered alineado_izq borde_social">
                <div class='iconos_cnec'>
                  <i class="fa fa-facebook icono_inicio_sociales texto_azul" aria-hidden="true"></i>
                </div>
                <div class="titulo_lineas_cnec">
                  FACEBOOK
                </div>
              </div>
              <div class="margen_50">
                <div class="fb-page" data-href="https://www.facebook.com/CNECGTO/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CNECGTO/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CNECGTO/">CNEC Delegación Guanajuato</a></blockquote></div> 
              </div>
               
            </div>
            <div class="col-sm-6 col-centered">
              <div class="col-sm-col-sm-12 col-centered alineado_izq borde_social">
                <div class='iconos_cnec'>
                  <i class="fa fa-twitter icono_inicio_sociales texto_azul" aria-hidden="true"></i>
                </div>
                <div class="titulo_lineas_cnec">
                  TWITTER
                </div>
              </div>
              <div class="margen_50"> 
                <a class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/CNEC_GTO">CNEC_GTO</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>  
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section>
  <div class="ocho80">
    <div class="row row-centered">
      <div class="col-sm-10 col-centered">
        <div class="row">
          <div class="col-sm-12 margen_10">
            <a href="{{url('/todas_las_vacantes')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_bolsa_trabajo.png')}}" alt=""></a>
          </div>
          <div class="col-sm-6 margen_10">
            <a href="{{url('')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_iniciar_sesion.png')}}" alt=""></a>
          </div>
          <div class="col-sm-6 margen_10">
            <a href="{{url('')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_registro_afiliados.png')}}" alt=""></a>
          </div>
          <div class="col-sm-6 margen_10">
            <a href="{{url('')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_ley_federal.png')}}" alt=""></a>
          </div>
          <div class="col-sm-6 margen_10">
            <a href="{{url('')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_ley_trabajo.png')}}" alt=""></a>
          </div>
          <div class="col-sm-12 margen_10">
            <a href="{{url('')}}"><img class='largo_imagenes_cursos' src="{{asset('img/banner_convenios.png')}}" alt=""></a>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>

<!-- <div id="rotador-index">
                  @foreach($otro_banner as $banner)
                        <div title="{{$banner->titulo}}">
                            <a href="{{$banner->link}}"><img src="{{$banner->imagen}}" alt=""></a>
                        </div>
                    @endforeach
    <div title="Semana de Cultura Laboral"> <a href="http://www.cnecgto.org/2014/pdf/Semana_de_Cultura_Laboral_CNEC.pdf"><img src="img/rot-banner-17.jpg" /></a> </div>
    
    <div title="Desarrollo de habilidades para supervisores y resindetes de obras"><a href="http://www.cnecgto.org/2016/curso/desarrollodehabilidades/" target="_blank"><img src="img/rot-banner-desarrollo.jpg" /></a></div> 

    <div title="Formación de consultores"><a href="http://www.cnecgto.org/2016/curso/formaciondeconsultores/" target="_blank"><img src="img/rot-banner-formacion.jpg" /></a></div>

<div title="Finanzas para no financieros "><a href="http://www.cnecgto.org/2016/curso/finanzasparanofinancieros/" target="_blank"><img src="img/rot-banner-01.jpg" /></a></div>
    <div title="Certificación documental 2015"><img src="img/rot-banner-02.jpg" /></div>  

    <div title="XXXII Asamblea General Mensual"><img src="img/rot-banner-03.jpg" /></div>  

<div title="Clausura-Transferencia-de-Conocimientos"><img src="img/rot-banner-04.jpg" /></div>
    
    <div title="Aviso de Privacidad"><a href="http://www.cnecgto.org/avisoprivacidad"><img src="img/rot-banner-05.jpg" /></a></div> 
    
</div> --><!--termina div rotador-index-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


@endsection
@extends('layouts.js')