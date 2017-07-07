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
    <link href="{{ asset('css/principal.css') }}" rel="stylesheet">
 

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
</head>
<body><!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////// H E A D E R ///////////////////////////////////////////////////// -->

<div id="header">
    <div class="ocho80 limpiar">
        <div id="menu">
            <ul>
                <li><a href="{{ url('/cnec') }}">¿QUÉ ES LA CNEC?</a></li>
                <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
                <li><a href="{{ url('/afiliados') }}">AFILIADOS</a></li>
                <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
                <li><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>
                @if (Auth::guard('web')->check())
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        SALIR
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>>SALIR</a></li>
                @else
                    <li><a href="{{ url('/register') }}">AFÍLIATE</a></li>
                @endif
                <li><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>

            </ul>
        </div>
        <div id="logos">
            <a href="#"><img src="{{ asset('img/logo-concamin.gif') }}" alt="logos" /></a>
            <a href="#"><img src="{{ asset('img/logo-fidic.gif') }}"  alt="logos" /></a>
            <a href="#"><img src="{{ asset('img/logo-fepac.gif') }}" alt="logos" /></a>
            <a href="#"><img src="{{ asset('img/logo-acec.gif') }}" alt="logos" /></a>
            <a href="#"><img src="{{ asset('img/logo-acec2.gif') }}" alt="logos" /></a>
        </div>
    </div>
</div>

<div id="rotador" class="limpiar">
    <div class="ocho80">
        <a href='{{url('/')}}'><img src="{{ asset('img/logo-cnec-cuadro.png') }}"  alt="logo cnec" /></a>
        <div id="slides"><!---SlideShow Ini-->
            <img src="{{ asset('img/rot-header-1.png') }}" alt="img1"   />
            <img src="{{ asset('img/rot-header-2.png') }}" alt="img2" />
            <img src="{{ asset('img/rot-header-3.png') }}" alt="img3" />
        </div>
    </div>
</div><!--termina div rotador-->


    <div id="app">



        @yield('content')
        <!-- <div class="hola">HOOOLA</div>  -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////F O O T E R////////////////////////////////////////////////////////////// -->

<div id="interes" class="limpiar">
    <div class="ocho80">
        <h3>ENLACES DE INTERÉS</h3>
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
            <a target="_blank" title="Ir a la Página de la Secretaría de Trabajo y Previsión Social" href="http://www.stps.gob.mx/bp/index.html">       
                <h5>STPS <br />México</h5>
            </a>
        </div>
        
         <div class="enlace">
            <a target="_blank" title="Ir a la Página de la Secretaría de la Función Pública" href="http://www.funcionpublica.gob.mx/">      
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
            <a target="_blank" title="Ir a la Página del Instituto Mexicano de Seguridad Social" href="http://www.imss.gob.mx/Pages/default.aspx">      
                <h5>IMSS <br /> México</h5>
            </a>
        </div>
        
    </div>
</div>


<div id="menu2" class="clearfix">
    <div class="ocho80 limpiar">
        <ul>
            <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
            <li><a href="{{ url('/afiliados') }}">AFILIADOS</a></li>
            <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
            <li><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>
            <li><a href="{{ url('/') }}">AFILIATE</a></li>
        </ul>
    </div>
</div>

<div id="footer" class="limpiar">
    <div class="ocho80">
        <div id="direccion">
            <ul>
                <li>Blvd. Mariano Escobedo</li>
                <li>No. 4502</li>
                <li>Local 32. Col. San Isidro</li>
                <li>León Gto. México</li>
                <li>informes@cnecgto.org</li>
            </ul>
        </div>
        <div id="telefonos">
            <span class="tel">TEL: +52 01 (477) 711 21 68</span>
            <span class="fax">FAX: +52 01 (477) 711 04 63</span>
            <span class="contactanos">CONTÁCTANOS</span><a href="contacto.php" title="Escribir un correo a la CNEC"><img src="{{ asset('img/correo-img.gif') }}" alt="img correo" class="sobre" /></a>
        </div>
        <div id="logofooter">
            <a href="index.php" title="Ir al Inicio"><img src="{{ asset('img/cnec-logo-footer.png') }}" alt="cnec logo" /></a>
        </div>
        
        <div id="derechos" class="clearfix">
            <p>www.cnecgto.org :: Todos los derechos reservados :: 2012 :: <span> Sitio Web desarollado por <a href="http://www.elebegraph.com">eLeBegraph</a></span></p>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->








    </div>

    <!-- Styles -->

    
    <!-- Scripts -->

</body>
</html>
