<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset-limpiar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rotator.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.tweet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/overlay.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="{{ asset('css/principal.css') }}" rel="stylesheet" rel="stylesheet">
<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}"  > -->
    <!-- Optional theme -->
    <link rel="stylesheet" href= "{{ asset('bootstrap-3.3.7/css/bootstrap-theme.min.css') }}" >
    
    <link rel="stylesheet" href= "{{ asset('css/bootstrap-theme-cnec.css') }}" >


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

     <script src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>

 

    <script type="text/javascript" src="{{asset('js/jquery.tools.min.js')}}" ></script><!--estos son temporales--> 
    <script type="text/javascript" src="{{asset('js/jquery.jshowoff.min.js')}}" ></script><!--estos son temporales-->
    <script src="{{asset('js/jquery.tweet.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jqFancyTransitions.1.8.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>


    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33619954-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>  
</head>
<body><!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////// H E A D E R ///////////////////////////////////////////////////// -->





<!-- __ _ __ __ _ _ _ _ _ _ _  __ _ _  _/ / / / / / / / / / / / /     MENU PRINCIPAL  / / / / / / / / / / / / /__ _ __ __ _ _ _ _ _ _ _  __ _ _  _ -->



 <div class="navbar-wrapper">
      <div class="containermenu">

        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
          <div class="containermenu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('img/CNEC-logo-blanco.png') }}" alt="Camara Nacional de Empresas de Consultoria"></a>
              <img src="{{ asset('img/CNEC-logo-header.png') }}" alt="CNEC LOGOS ASOCIACIONES" class="solo_escritorio navbar-logos">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li {{ Request::is('/') ? 'class=active' : '' }} ><a  href="{{url('/')}}">HOME</a></li>
                <li {{ Request::is('organigrama_cnec') ? 'class=active' : '' }}><a href="{{ url('/organigrama_cnec') }}">ORGANIGRAMA</a></li>
                <li {{ Request::is('cnec') ? 'class=active' : '' }}><a  href="{{ url('/cnec') }}">¿QUÉ ES LA CNEC?</a></li>
                <li {{ Request::is('certificados') ? 'class=active' : '' }} ><a href="{{ url('/certificados') }}">CERTIFICACIÓN</a></li>
                <li {{ Request::is('afiliados') ? 'class=active' : '' }}><a  href="{{ url('/afiliados') }}">AFILIADOS</a></li>
                <li {{ Request::is('eventos') ? 'class=active' : '' }}><a  href="{{ url('/eventos') }}">CALENDARIO</a></li>
                <li {{ Request::is('capacitacion') ? 'class=active' : '' }}><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>
                <li {{ Request::is('todas_las_vacantes') ? 'class=active' : '' }}><a href="{{ url('/todas_las_vacantes') }}">BOLSA DE TRABAJO</a></li>
                <li {{ Request::is('servicios') ? 'class=active' : '' }}><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
                <li {{ Request::is('convenios') ? 'class=active' : '' }}><a href="{{ url('/convenios') }}">CONVENIOS</a></li>
                @if (Auth::guard('web')->check())
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   SALIR
               </a>

               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>>SALIR</a></li>
            @else
            <li  {{ Request::is('afiliarse') ? 'class=active' : '' }}><a href="{{ url('/afiliarse') }}">AFÍLIATE</a></li>
            @endif
            <li {{ Request::is('contacto') ? 'class=active' : '' }}><a href="{{ url('/contacto') }}">CONTACTO</a></li>

                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>





<!-- 
<div class='bloque_menu'>
    <div class='barra_navegador'>
        
    </div>
    <div class='ocho80 menu_fixeado'>
        <div id="menu">
            <ul>
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a href="{{ url('/organigrama_cnec') }}">ORGANIGRAMA</a></li>
                <li><a href="{{ url('/cnec') }}">¿QUÉ ES LA CNEC?</a></li>
                <li><a href="{{ url('/certificados') }}">CERTIFICACIÓN</a></li>
                <li><a href="{{ url('/afiliados') }}">AFILIADOS</a></li>
                <li><a href="{{ url('/eventos') }}">CALENDARIO</a></li>
                <li><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>
                <li><a href="{{ url('/todas_las_vacantes') }}">BOLSA DE TRABAJO</a></li>
                <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
                <li><a href="{{ url('/convenios') }}">CONVENIOS</a></li>
                @if (Auth::guard('web')->check())
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   SALIR
               </a>

               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>>SALIR</a></li>
            @else
            <li><a href="{{ url('/afiliarse') }}">AFÍLIATE</a></li>
            @endif
            <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>

            </ul>
        </div>  
        <div id="header">
            <div class='header_movil'>
                
            
                <div class="row row-centered">
                    <div class="col-12 col-centered">
                        <div id="logos">
                            <div class='img_logos'>
                                <img src="{{ asset('img/logo-concamin.gif') }}" alt="logos" />
                            </div>
                            <div class='img_logos logo_header'>
                                <img src="{{ asset('img/logo-fidic.gif') }}"  alt="logos" />
                            </div>
                            <div class='img_logos'>
                                <img src="{{ asset('img/logo-fepac.gif') }}" alt="logos" />
                            </div>
                            <div class='img_logos'>
                                <img src="{{ asset('img/logo-acec.gif') }}" alt="logos" />
                            </div>
                            <div class='img_logos'>
                                <img src="{{ asset('img/logo-acec2.gif') }}" alt="logos" />
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>         
    </div>

</div>

 -->






<!-- ////// E  N  D   /////////__ _ __ __ _ _ _ _ _ _ _  __ _ _  _/ / / / / / / / / / / / /     MENU PRINCIPAL  / / / / / / / / / / / / /__ _ __ __ _ _ _ _ _ _ _  __ _ _  _ -->

<div id="rotador" class="limpiar margen_menu_top">
    <div class="ocho80">
        <div class="row row-centered">
            <div class="col-sm-5 col-centered logo_top">
                <a href='{{url('/')}}'><img src="{{ asset('img/CNEC-logo.png') }}"  alt="logo cnec" /></a>
            </div>
            <div class="col-sm-7 col-centered">
                <div id="slides"><!---SlideShow Ini-->
                    <img src="{{ asset('img/rot-header-1.png') }}" alt="img1"   />
                    <img src="{{ asset('img/rot-header-2.png') }}" alt="img2" />
                    <img src="{{ asset('img/rot-header-3.png') }}" alt="img3" />
                </div>
            </div>
        </div>
    </div>
</div><!--termina div rotador-->


    <div id="app">



        @yield('content')
        <!-- <div class="hola">HOOOLA</div>  -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////F O O T E R////////////////////////////////////////////////////////////// -->

<div class='fondo_4'>
    <div id="interes" class="limpiar">
        <div class="ocho80">
            <div class="row row-centered">
                <div class='col-12'>
                    <h3>ENLACES DE INTERÉS</h3>
                </div>
                <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la CNEC México" href="http://cnec.org.mx">
                        <h5>CNEC <br />México</h5>
                    </a>
                </div>
                
                <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la SOP Estado de Guanajuato" href="http://obrapublica.guanajuato.gob.mx">
                        <h5>SOP<br />Guanajuato</h5>
                    </a>
                </div>
                
                <div class="enlace">
                    <a target="_blank" title="Ir al enlace" href="http://www.economia.gob.mx/"> 
                        <h5>Secretaría<br />de Economía</h5>
                    </a>    
                </div>
                
                 <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la Secretaría de Desarrollo Económico Sustentable del Estado de Guanajuato" href="http://sde.guanajuato.gob.mx/">       
                        <h5>SDES<br />Guanajuato</h5>
                    </a>
                </div>
                
                 <div class="enlace" style="margin-left:0px;">
                    <a target="_blank" title="Ir a la Página de la Secretaría de Trabajo y Previsión Social" href="https://www.gob.mx/stps">       
                        <h5>STPS <br />México</h5>
                    </a>
                </div>
                
                 <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la Secretaría de la Función Pública" href="https://www.gob.mx/sfp">      
                        <h5>Función<br />Pública</h5>
                    </a>
                </div>
                
                 <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la Dirección General de Obra Pública de la ciudad de León Guanajuato" href="http://www.leon.gob.mx/obrapublica/">       
                        <h5>Obra Pública<br />de León Gto.</h5>
                    </a>
                </div>
                
                 <div class="enlace">
                    <a target="_blank" title="Ir a la Página de la Presidencia Municipal de León" href="http://www.leon.gob.mx/">       
                        <h5>Presidencia<br /> de León</h5>
                    </a>
                </div>
                
                 <div class="enlace">
                    <a target="_blank" title="Ir a la Página del Instituto Mexicano de Seguridad Social" href="http://www.imss.gob.mx/">      
                        <h5>IMSS <br /> México</h5>
                    </a>
                </div>     
            </div>
        </div>
    </div>


    <div id="menu2">
        <div class="ocho80">
            <div class="content_flex">
                <div class="item_flex">
                    <a class='link_menu2' href="{{ url('/servicios') }}">SERVICIOS</a>
                </div>
                <div class="item_flex">
                    <a class='link_menu2' href="{{ url('/afiliados') }}">AFILIADOS</a>
                </div>
                <div class="item_flex">
                    <a class='link_menu2' href="{{ url('/contacto') }}">CONTACTO</a>
                </div>
                <div class="item_flex">
                    <a class='link_menu2' href="{{ url('/capacitacion') }}">CAPACITACIÓN</a>
                </div>
                <div class="item_flex">
                    <a class='link_menu2' href="{{ url('/servicios') }}">SERVICIOS</a>
                </div>         
            </div>      
        </div>
    </div>

    <div id="footer" class="limpiar">
        <div class="ocho80">
            <div class="row row-centered">
                <div class="col-md-3">
                    <div id="direccion">
                        <ul>
                            <li>Blvd. Mariano Escobedo</li>
                            <li>No. 4502</li>
                            <li>Local 32. Col. San Isidro</li>
                            <li>León Gto. México</li>
                            <li>informes@cnecgto.org</li>
                        </ul>
                    </div>  
                </div>
                <div class="col-md-6 alineado_centro">
                    <div id="telefonos">
                        <span class="tel">TEL: +52 01 (477) 711 21 68</span><br>
                        <span class="fax">FAX: +52 01 (477) 711 04 33</span><br>
                        <span class="contactanos">CONTÁCTANOS</span><a href="contacto.php" title="Escribir un correo a la CNEC"><img src="{{ asset('img/correo-img.gif') }}" alt="img correo" class="sobre" /></a>
                    </div>   
                </div>
                <div class='col-md-3 col-7 col-centered'>
                    <div id="logofooter">
                        <a href="index.php" title="Ir al Inicio"><img src="{{ asset('img/cnec-logo-footer.gif') }}" alt="cnec logo" /></a>
                    </div>    
                </div>
            </div>
            
            <div id="derechos" class="clearfix">
                <p>www.cnecgto.org :: Todos los derechos reservados :: 2012 :: <span> Sitio Web desarollado por <a href="http://www.elebegraph.com">eLeBegraph</a></span></p>
            </div>
        </div>
    </div>    
</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->








    </div>

    <!-- Styles -->

    
    <!-- Scripts -->

</body>


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
   <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
      <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js -->"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
     <!-- Latest compiled and minified JavaScript -->


</html>
