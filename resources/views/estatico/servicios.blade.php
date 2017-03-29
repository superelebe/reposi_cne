
@extends('layouts.app')
@section('content')
<div id="servicios">
	<div class="ocho80">
    	<div id="contenedorserv" class="limpiar">
			<div class="tiraservicio limpiar">
				<div class="icoservicio"> </div>
				<div class="icoservicio">
		        	<img src="img/serv-1.png" alt="servicios cnec" />
	                <h5>REPORTES DE <span>LICITACIONES</span> PÚBLICAS (SIVA)</h5>
	                <span class="vermas azulmedio"><a href="{{ url('/licitaciones') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-2.png" alt="servicios cnec" />
	                <h5>MONITOREO <span>LEGISLATIVO</span></h5>
	                <span class="vermas azulclaro"><a href="{{ url('/monitoreo') }}">VER MÁS</a></span>
		        </div>
			</div>
		    
		    <div class="tiraservicio limpiar">
				<div class="icoservicio">
		        	<img src="img/serv-3.png" alt="servicios cnec" />
	                <h5>METODOLOGÍA PARA EL <span>CÁLCULO DE FACTORES</span> ECONÓMICOS <small>(ARANCELES)</small></h5>
	                <span class="vermas azuloscuro"><a href="{{ url('/calculo') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-4.png" alt="servicios cnec" />
	                <h5>GUÍA PARA LA <br /><span>SELECCIÓN DE</span><br /> CONSULTORES</h5>
	                <span class="vermas azulmedio"><a href="{{ url('/consultores') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-5.png" alt="servicios cnec" />
	                <h5>CAPACITACIÓN, <span>ACTUALIZACIÓN Y</span> ADIESTRAMIENTO</h5>
	                <span class="vermas azulclaro"><a href="{{ url('/adiestramiento') }}">VER MÁS</a></span>
		        </div>
			</div>
		    
		    <div class="tiraservicio limpiar">
				<div class="icoservicio">
		        	<img src="img/serv-6.png" alt="servicios cnec" />
	                <h5>DIRECTORIO DE <span>EMPRESAS AFILIADAS Y</span> CERTIFICADAS</h5>
	                <span class="vermas azuloscuro"><a href="{{ url('/afiliadas') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-7.png" alt="servicios cnec" />
	                <h5>PRECIÓS PREFERENCIALES <br /><span>EN CURSOS, TALLERES O</span> CAPACITACIONES.</h5>
	                <span class="vermas azulmedio"><a href="{{ url('/capacitacion') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-8.png" alt="servicios cnec" />
	                <h5>PUBLICACIONES <br /><span>CNEC –FIDOC</span></h5>
	                <span class="vermas azulclaro"><a href="{{ url('/publicaciones') }}">VER MÁS</a></span>
		        </div>
			</div>
		    
		    <div class="tiraservicio limpiar" style="margin-bottom:0;">
				<div class="icoservicio">
		        	<img src="img/serv-9.png" alt="servicios cnec" />
	                <h5>PARTICIPACIÓN EN <span>COMISIONES MIXTAS</span></h5>
	                <span class="vermas azuloscuro"><a href="{{ url('/comisiones') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-10.png" alt="servicios cnec" />
	                <h5>REVISTAS CONSULTORAS <span>"INDUSTRIA DEL</span> CONOCIMIENTO"</h5>
	                <span class="vermas azulmedio"><a href="{{ url('/conocimiento') }}">VER MÁS</a></span>
		        </div>
				<div class="icoservicio">
		        	<img src="img/serv-11.png" alt="servicios cnec" />
	                <h5>SERVICIOS DEL<br /><span> SIEM</span></h5>
	                <span class="vermas azulclaro"><a href="{{ url('/siem') }}">VER MÁS</a></span>
		        </div>
			</div>
           
        </div><!--ontenedor servicios-->
    </div>
</div>
<!--termina div del servicios-->
@endsection
@extends('layouts.js')