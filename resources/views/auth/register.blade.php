 @extends('layouts.app')

@section('content')
<div id="afiliate">
    <div class='ocho80'>
        <div id="pendon">
                <!-- <span><a href="descargas/Formato_de_Registro_CNEC_2013.xls" title="Da clíck para descargar los formatos"><img src="img/pdf-icon.jpg" alt="pdf" /><br /><p>Formato de registro CNEC 2013 / Cátalogo de Especialidades</p></a></span> -->
            <span><a href="descargas/Documento-SIEM-2014.xlsx" title="Da clíck para descargar los formatos"><img src="img/pdf-icon.jpg" alt="pdf"><br><p>Formato de registro SIEM 2014</p></a></span>
        </div>
        <div id="formulario">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <h2>LLENA NUESTRA <br> <span class="colorazuloscuro">FICHA DE REGISTRO</span></h2>
                            <div class="panel-body">
                                <form id="form_afiliate" class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }} row">
                                        <label for="empresa" class="col-md-12 control-label">Empresa</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="empresa" value="{{ old('empresa') }}" required autofocus>

                                            @if ($errors->has('empresa'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('empresa') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('representante') ? ' has-error' : '' }} row">
                                        <label for="representante" class="col-md-12 control-label">Representante</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="representante" value="{{ old('representante') }}" required autofocus>

                                            @if ($errors->has('representante'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('representante') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }} row">
                                        <label for="direccion" class="col-md-12 control-label">Direccion</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                            @if ($errors->has('direccion'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('direccion') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }} row">
                                                <label for="telefono" class="col-md-12 control-label">Telefono</label>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                                    @if ($errors->has('telefono'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('telefono') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>   
                                        </div>
                                        <div class='col-md-6'>

                                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }} row">
                                                <label for="rfc" class="col-md-12 control-label">RFC</label>

                                                <div class="col-md-12">
                                                    <input id="rfc" type="text" class="form-control" name="rfc" value="{{ old('rfc') }}" required autofocus>

                                                    @if ($errors->has('rfc'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('rfc') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <?php $ciudad = App\Ciudad::all(); ?>
                                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
                                                <label for="rfc" class="col-md-4 control-label">ciudad</label>
                                                    <select name="ciudad" class="form-control">
                                                        <option value="" selected disabled style="display:none">Ciudad</option>
                                                        @foreach ($ciudad as $ciudad)
                                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <?php $serivios = App\Service::all(); ?>
                                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
                                                <label for="rfc" class="col-md-4 control-label">Servicios</label>
                                                    <select name="servicios" class="form-control" id='cat'>
                                                        <option value="" selected disabled style="display:none">Servicios</option>
                                                        @foreach ($serivios as $service)
                                                            <option value="{{ $service->id }}">{{ $service->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('subarea') ? ' has-error' : '' }}">
                                                <label for="subarea" class="col-md-4 control-label">Sub Area</label>
                                                    <select name="subarea" class="form-control" id='subarea'>
                                                        <option value="" selected disabled style="display:none">Subareas</option>
                                                    </select>
                                            </div>  
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                                <label for="email" class="col-md-12 control-label">Correo Electronico</label>

                                                <div class="col-md-12">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class='col-md-6'>
                                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                                <label for="password" class="col-md-12 control-label">Password</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div> 
                                        </div>
                                        <div class='col-md-6'>
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-12 control-label">Confirmar Password</label>

                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" id="enviar" class="btn btn-primary">
                                                Afiliarme
                                            </button>
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
</div>

<script>
    $('#cat').on('change',function(e){
        var potato = e.target.value;
        
        console.log(potato);
        $.get('ajaxSubarea/'+ potato+'', function(data){
            $('#subarea').empty();
            $.each(data, function(index, subareaObj){
                $('#subarea').append('<option value="'+ subareaObj.id+'">'+ subareaObj.nombre +'</option>');
            });
        });
    });

</script>

@endsection
