@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hola Manuel :)
                </div>
                <div>
  
                </div>
                <div>
                    <div>
                        @foreach($noticias as $noticia)
                            <div>
                                <img src="{{$noticia->imagen}}" alt="">
                                <div>{{ $noticia->titulo}}</div>
                                <div>{{ $noticia->created_at->diffForHumans()}}</div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <a href="{{url('noticias')}}">Ver mas noticias</a>
                    </div>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>




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
    
</div><!--termina div rotador-index-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////// P R E S I D E N T E ///////////////////////////////////////////////////// -->

        <div id="presidente" >
            <div class="ocho80">
                <div id="mensajes" class="limpiar">
                    <div class="consultores bordeazulclaro">
                        <h2>Y TÚ,<br /> ¿ERES CONSULTOR?</h2>
                        <p>Un consultor o una empresa consultora, son  aliados y consejeros de alta confiabilidad para los ...</p>
                        <span class="vermas azulclaro" rel="#mies1"><a href="#">Ver Más</a></span>
                        <img src="img/tumb-consulting-1.jpg" alt="¿Eres consultor?"/>
                    </div>
                    <div class="consultores bordeazulmedio">
                        <h2>¿DÓNDE<br /> ESTÁN LOS CONSULTORES?</h2>
                        <p>En el caso de México, los consultores se agrupan en la Cámara Nacional de Empresas de Consultoría...</p>
                        <span class="vermas azulmedio" rel="#mies2"><a href="#">Ver Más</a></span>
                         <img src="img/tumb-consulting-2.jpg" alt="¿Donde estan los consultores?" />
                    </div>
                    <div class="consultores bordeazuloscuro">
                        <h2>BENEFICIOS DE FORMAR PARTE DE LA CNEC</h2>
                        <ul>
                            <li>Apoyo en el Fortalecimiento y Desarrollo Institucional de dependencias...</li>

                        </ul>
                        <span class="vermas azuloscuro" rel="#mies3"><a href="#">Ver Más</a></span>
                         <img src="img/tumb-consulting-3.jpg" alt="Beneficios de ser parte de la CNEC" />
                    </div>
                    <div id="mensaje_director" class="bordeverdemedio">
                        <div>
                            <span>MENSAJE DEL PRESIDENTE DE LA CAMARA</span>
                            <p>ING. ADOLFO LIRA CARRILLO </p>
                            <img src="img/tumb-consulting-5.jpg" alt="Foto del Presidente de la CNEC"/>
                        </div>
                        <p>"La Consultoría es la óptima utilización de conocimientos técnicos de excelencia sustentados en experiencia, la integridad moral y un alto sentido de responsabilidad, para lograr la máxima eficiencia en la definición conceptual, el financiamiento, el...</p>
                        <span class="vermas verdemedio" rel="#mies4"><a href="#">Ver Más</a></span>
                    </div>
                </div>
            </div>
        </div><!--termina div rotador-index-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
















<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////// S O C I A L ///////////////////////////////////////////////////// -->
<div id="social" class="limpiar">
  <div class="ocho80">
      <div class="columna3">
          
            <div id="areas">
              <h3 class="verdemedio">ÁREAS DE ESPECIALIDAD</h3>
                <ul>
                  <li>Economía, Inversión y Finanzas</li>
                  <li>Administración y Gestión</li>
                  <li>Planeación y  Diseño</li>
                  <li>Administración de Obras</li>
                    <li>Servicios Tecnológicos Profesionales</li>
                </ul>
                <span class="vermas verdemedio"><a href="areas.html">Ver Más</a></span>
            </div>
      <div id="twitter">
              <h2>TWITTER <span style=" margin-left:10px; position:absolute;"><a  href="https://twitter.com/CNEC_GTO" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @CNEC_GTO</a></span></h2>       
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <div class="tweet"></div>   
            </div>
        </div>
        
      <div class="columna3">
    <div id="calendario">
              <h3 class="verdeclaro">CALENDARIO</h3>
                <ul>
                  
                  <li class="fecha"> <span>09 - Mayo - 2016</span> Curso Lean Construction</li>  

                  <li class="fecha"> <span>05 y 06 - Mayo - 2016</span> Ortografía y Redacción</li>  


                <li class="fecha"> <span>15 y 16 - Abril - 2016</span>Desarrollo de habilidades para supervisores y residentes de obras<a href="http://www.cnecgto.org/2014/curso/desarrollohabilidades/" target="_blank" title="Ver más información"></a></li>  

                <li class="fecha"> <span>12 y 13 - Abril - 2016</span>Taller Formación de Consultores<a href="http://www.cnecgto.org/2016/curso/formaciondeconsultores/" target="_blank" title="Ver más información"></a></li>  

                <li class="fecha"> <span> 07 - Abril - 2016</span>  Curso Actualización DENUE</li>  


                <li class="fecha"> <span>04 y 05 - Abril - 2016</span> Curso Ingreso al Uso de Drones</li>  


                <li class="fecha"> <span>04 y 05 - Abril - 2016</span> Curso Ingreso al Uso de Drones</li>  

                  <li class="fecha"> <span>30 - Marzo - 2016</span>Platica Creación de Proyectos exitosos para obtener Recursos de Gobierno</li>                   

                  
                  
                </ul>
                <span class="vermas verdeclaro"><a href="calendario.html">Ver Más</a></span>
            </div>
          <div id="facebook">
      <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCNECGTO&amp;width=292&amp;height=200&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;appId=245687622216193" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:292px; height:200px;" allowTransparency="true"></iframe>
            </div>
        </div>
        
        <div class="columna3">
          <div id="noticias">
                
                  <h2>NOTICIAS</h2>
                    
                    <?
            $s = 'Select idarticulos, titulo, texto, foto01 From articulos Order by fecha Desc LIMIT 2';
            $q = mysql_query($s) or die (mysql_error());
              while ($r = mysql_fetch_array($q)){
            ?>
                    <div class="articulo">
                      <h4><?= $r['titulo'] ?></h4>
                        <img src="img/noticias/<?= $r['idarticulos'] ?>/<?= $r['foto01'] ?>" alt="<?= $r['titulo'] ?>"  class="noticia" width="244" height="66"/>
                        <p><?= substr($r['texto'],0,100); ?>...</p>
                         <a href="noticias/noticia.php?id=<?= $r['idarticulos'] ?>" title="Ver m&aacute;s de la noticia"><img src="img/cruzmas.gif" alt="mas" class="imgmas" /></a>
                    </div>
                    <?
            }
            ?>
                    
            <div><a href="noticias.php" title="Enterate de lo que pasa en la CNEC"><img style="width:250px;height:49px; margin:-15px 0  0 55px; z-index:9999;"src="img/btn-vermasn.png" alt="Más Noticias" /></a></div>  
          </div>
        </div>


    </div>
</div>
<!--termina div social-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->





















<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////B A N N E R S   C O N T ////////////////////////////////////////////////////// -->

    <div class="contenedor" style="width: 880px; margin: 0 auto; padding-top: 10px;">
        <!-- div Ley fed. del trabajo -->
        <a href="http://www.cnecgto.org/leydecondominio.html" style=" float: left; margin-left: 5px;"><img src="img/banner_LFC.jpg" alt="ley de condominio"/></a>
        <!-- div Ley fed. del condominio -->
        <a href="http://www.cnecgto.org/leydetrabajo.html" style=" float: left; margin-left: 5px;"><img src="img/BANNER_LFT.jpg" alt="ley de trabajo" /></a>
        <div class="clear" style=" clear: both;"></div>
    </div>
    <!-- div convenios-->
    <div id="convenios" class="clearfix">
        <a href="convenios.html"><img src="img/convenios.png" style=" margin-top: -15px;" /></a>
    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////C O N T E N I D O   I-F R A M E/////////////////////////////////////////// -->
<!-- first overlay. id attribute matches our selector -->
<div class="simple_overlay" id="mies1">
  <div class="details">
    <h3>Y  TÚ,  ¿ERES  CONSULTOR?</h3>
    <p>Un consultor o una empresa consultora, son  aliados y consejeros de alta confiabilidad de los empresarios e inversionistas, ya que están comprometidos con la optimización de las inversiones y el éxito de todo tipo de proyecto. </p>
    <p>La consultoría tiene que ver con un servicio que consistente en la transferencia de conocimientos, metodologías y aplicaciones, su objetivo principal es la colaboración eficaz con sus clientes para la realización de objetivos, operaciones y nuevos proyectos.
    </p>
  </div>
    <!-- large image -->
  <img src="img/details-consulting-1.jpg" />
</div>


<div class="simple_overlay" id="mies2">
  <div class="details" style="color:#FFF; top0px;">
    <h3 style="color:#FFF; font-size:30px;">¿DÓNDE ESTÁN LOS CONSULTORES?</h3>
    <p>En el caso de México, los consultores se agrupan en la Cámara Nacional de Empresas de Consultoría, lo hacen por campos de especialización, naturaleza de los servicios que ofrecen, tamaño, currículum de trabajos ejecutados, capital social y demás datos de interés para sus
clientes.</p>
    
  </div>
    <!-- large image -->
  <img src="img/details-consulting-2.jpg" />
</div>

<div class="simple_overlay" id="mies3">
  <div class="details" style="color:#FFF">
    <h3  style="color:#FFF; font-size:30px;">BENEFICIOS DE FORMAR PARTE DE LA CNEC</h3>
    <ul>
        <li> Propuestas para el desarrollo sustentable del Estado y sus Municipios.</li>
        <li>Apoyo en el Fortalecimiento y Desarrollo Institucional de dependencias.
        <li>Acceso a profesionistas capacitados. </li>
        <li>Asesoría especializada, sectorizada y/o integral.</li>
        <li>Capacitación Profesional.</li>


</li>
    </ul>
  </div>
    <!-- large image -->
  <img src="img/details-consulting-3.jpg" />
</div>

<div class="simple_overlay" id="mies4">
  <div class="detailspresidente">
  <h5>"La Consultoría es la óptima utilización de conocimientos técnicos de excelencia sustentados en experiencia, la integridad moral y un alto sentido de responsabilidad, para lograr la máxima eficiencia en la definición conceptual, el financiamiento, el diseño, la ejecución y la operación de cualquier proyecto de inversión."</h5>
  <h5>Distinguido consultor:</h5>
  <p>A nombre del Consejo Directivo de la Delegación Guanajuato de la Cámara Nacional de Empresas de Consultoría y el mío propio, le extiendo un cordial saludo y aprovecho para invitarlo para afiliarse a la CNEC donde encontrará, de una forma más rápida y sencilla, las soluciones y apoyos que requiere su industria para crecer y desarrollarse, igualmente puede aprovechar los beneficios de la Certificación CNEC bajo la norma  ISO/C17040-2000 o su equivalente NMX-EC17040-IMNC 2007, reconocidas Nacional e Internacionalmente.</p>
  <p>Esta Cámara es el producto del trabajo y la dedicación de muchos hombres y mujeres que han realizado el mayor de sus esfuerzos, para hacer que este organismo que representa la Industria del conocimiento, haya estado presente en las políticas, acciones, estrategias y proyectos del estado Guanajuato y sus municipios. Con el apoyo de los consultores, el desempeño de los tres niveles de gobierno, a lo largo de los años anteriores, ha sido más  productivo.</p>
  <p>Muchas de las empresas registradas en nuestra Cámara tienen como actividades principales aquellas relacionadas con proyectos de ingeniería, supervisión y gerencia de proyectos. Igualmente contamos con otras  empresas relacionadas con la consultoría de otras áreas del conocimiento como son la Economía, Inversión y Finanzas, Administración y Gestión, así como Servicios Tecnológicos Profesionales, representando nichos de mercado que deberán  mostrar un crecimiento en este y en los próximos años. Recordemos que la Cámara tiene empresas de diversas especialidades y estamos listos para ayudarlas a aprovechar las oportunidades que vienen. </p>
  <p>La CNEC ha sido honrada por octava ocasión y séptima consecutiva con el premio Ética y Valores, otorgado por la confederación de Cámaras Industriales de la Republica Mexicana (CONCAMIN).</p>
  <p>Actualmente hemos modernizado nuestra imagen y nuestro portal de internet para poder brindar un mejor servicio a nuestros afiliados. A la par se han instalado comisiones de trabajo en los temas de infraestructura, competitividad, responsabilidad social empresarial, desarrollo empresarial, normatividad, capacitación y desarrollo tecnológico, con el objetivo de identificar aspectos relevantes que debe de impulsar la Cámara.</p>
  <p>Agradezco como siempre el interés y participación de la empresa que usted representa, invitándolo a participar de manera directa en la CNEC, Delegación Guanajuato, y sumarse a los esfuerzos tendientes al fortalecimiento de la consultoría  y con esto lograr hacer de Guanajuato un estado mejor, más grande, más culto, más exigente, pero sobre todo más justo, y que nos dé mejores oportunidades y más posibilidades de desarrollo. </p>
  
  <p style="text-align:center; margin-top:5px;">
  <strong>Atentamente</strong> <br />
  Ing. Adolfo Lira Carrillo <br />
  <strong>Presidente</strong><br/>
  Cámara Nacional de Empresas de Consultoría - Delegación Guanajuato</p>
  </div>
    <!-- large image -->
    <img src="img/details-consulting-4.jpg" />
 </div>
 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
@endsection
@extends('layouts.js')