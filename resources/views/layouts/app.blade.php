<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<script type="text/javascript" src="{{asset('app.js')}}" ></script>s
<script type="text/javascript" src="{{asset('js/jquery.tools.min.js')}}" ></script><!--estos son temporales--> 
<script type="text/javascript" src="{{asset('js/jquery.jshowoff.min.js')}}" ></script><!--estos son temporales--> 
<script src="{{asset('js/jqFancyTransitions.1.8.js')}}" type="text/javascript"></script>
<script language="javascript" src="{{asset('js/jquery.tweet.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jqFancyTransitions.1.8.js')}}" type="text/javascript"></script>
<script>

$(document).ready( function(){
        
       $('#slides').jqFancyTransitions({ width:530, height:300, delay:3000, titleOpacity:0, position:'top', direction:'fountain' });
        
});
</script>

<script  type="text/javascript">
$(document).ready( function(){
        
        $('#rotador-index').jshowoff({ speed:7000, links: true,
                    cssClass: 'thumbFeatures',
                    //effect: 'slideLeft'
        });
        
    $(".tweet").tweet({ // aca es donde se le indica donde poner los tweets, le pondremos un div vacio con clase .tweets
            username:"CNEC_GTO", // el usuario
            avatar_size: 32, // Ponle 0 si no quieres avatares
            page: 1,
            count: 6, // Numero de tweets
            loading_text: "Cargando..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              ul.find('li:first').animate( {marginTop: '-4em'}, 500,function() {
                $(this).detach().appendTo(ul).removeAttr('style');
              });
              ticker();
            }, 5000);
          };
          ticker();
        });
    
      
     if ($.browser.msie){
        if ($.browser.version>=7){  
        
        $("span[rel]").overlay({
                
                mask: {
                color:'#455560',
                loadSpeed: 200,
                opacity: 0.9
                },
     
              closeOnClick: true
        });
    }; 
                 
    } else {
     //alert('Non IE8');
   // positions for each overlay
    var cargarfondos= function()
    {
        var cromatica = [
            ['#B5BFC7'],
            ['#808C97' ],
            ['#455560' ],
            ['#769D2E' ]
        ];
        
        // setup triggers
        $("span[rel]").each(function(i) {
     
            $(this).overlay
            ({
                
                mask:
                {
                color:cromatica[i],
                loadSpeed: 200,
                opacity: 0.9
                },
     
              closeOnClick: true
     
            });
 
        });
    }();
    
    }
    /*
    */
    
    var cargafooter = function(){
        $('#footconten').hide().load('footer.html', function(){
            $(this).fadeIn(300);});
        }();
    
        var cargaheader = function(){
        $('#headconten').hide().load('header.html', function(){
            $(this).fadeIn(300);});
        }();
    
        
});
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
                <li><a href="{{ url('/cnec') }}">¿QU&Eacute; ES LA CNEC?</a></li>
                <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
                <li><a href="{{ url('/afiliados') }}">AFILIADOS</a></li>
                <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
                <li><a href="{{ url('/capacitacion') }}">CAPACITACIÓN</a></li>
                <li><a href="{{ url('/register') }}">AF&Iacute;LIATE</a></li>
                <li><a href="{{ url('/capacitaciones') }}">CAPACITACIÓN</a></li>
                <li><a href="{{ route('register') }}">AF&Iacute;LIATE</a></li>

            </ul>
        </div>
        <div id="logos">
            <a href="#"><img src="img/logo-concamin.gif" alt="logos" /></a>
            <a href="#"><img src="img/logo-fidic.gif" alt="logos" /></a>
            <a href="#"><img src="img/logo-fepac.gif" alt="logos" /></a>
            <a href="#"><img src="img/logo-acec.gif" alt="logos" /></a>
            <a href="#"><img src="img/logo-acec2.gif" alt="logos" /></a>
        </div>
    </div>
</div>

<div id="rotador" class="limpiar">
    <div class="ocho80">
        <a href="index.php"><img src="img/logo-cnec-cuadro.png" alt="logo cnec" /></a>
        <div id="slides"><!-----------------------------SlideShow Ini-->
            <img src='img/rot-header-1.png' alt="img1"   />
            <img src='img/rot-header-2.png' alt="img2" />
            <img src='img/rot-header-3.png' alt="img3" />
        </div>
    </div>
</div><!--termina div rotador-->


    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout asdasd
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

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
            <span class="contactanos">CONTÁCTANOS</span><a href="contacto.php" title="Escribir un correo a la CNEC"><img src="img/correo-img.gif" alt="img correo" class="sobre" /></a>
        </div>
        <div id="logofooter">
            <a href="index.php" title="Ir al Inicio"><img src="img/cnec-logo-footer.png" alt="cnec logo" /></a>
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/principal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset-limpiar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rotator.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.tweet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/overlay.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">

    
    <!-- Scripts -->

</body>
</html>
