@extends('layouts.app')
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="col-md-8 col-xs-12 col-centered">
                <form method = 'get' action = '{!!route("home")!!}'>
                    <button class = 'btn btn-danger'>Regresar</button>
                </form>
            </div>
            <div class='titulo_seccion'>
                Editar Perfil
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!! url("usuarios")!!}/{!!$usuario->
        id!!}/update' enctype="multipart/form-data" > 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>        
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input id="empresa" name = "empresa" type="text" class="form-control" value="{!!$usuario->
            empresa!!}">
        </div>
        <div class="form-group">
            <label for="representante">Representante</label>
            <input id="representante" name = "representante" type="text" class="form-control" value="{!!$usuario->
            representante!!}"> 
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input id="direccion" name = "direccion" type="text" class="form-control" value="{!!$usuario->
            direccion!!}">
        </div>
        <div class="form-group">
            <label for="imagenes">Imagenes</label>
            <img src="{!! url($usuario->
                        imagenes)!!}" alt="">
            <input id="imagenes" name = "imagenes" type="file" class="form-control" value="{!!$usuario->
            imagenes!!}"> 
        </div>
        <div class="form-group">
            <label for="rfc">RFC</label>
            <input id="rfc" name = "rfc" type="text" class="form-control" value="{!!$usuario->
            rfc!!}"> 
        </div>

        <div class="form-group">
            <label for="ciudad_id">Ciudad</label>
            <select name="ciudad_id" class="form-control">
                <option value="{!!$usuario->ciudad_id!!}" selected style="display:none">{{$usuario->ciudad->nombre}}</option>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="servicio_id">Servicio</label>
            <select name="servicio_id" class="form-control" id='cat'>
                <option value="{{ $usuario->servicios->id}}" selected >{{$usuario->servicios->nombre}}</option>
                @foreach($servicios as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subarea_id">Sub Area</label>
            <select name="subarea_id" class="form-control" id='subarea'>
                <option value="{{ $usuario->subarea->id}}" selected >{{$usuario->subarea->nombre}}</option>
            </select>
        </div>
        <div class='subservicios'>
            
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name = "email" type="email" class="form-control" value="{{$usuario->email}}"> 
        </div>

        <div class="form-group">
            <label for="certificados">Certificados</label>
            <input id="certificados" name = "certificados" type="text" class="form-control" value="{{$usuario->certificados}}">
        </div>
        <div class="form-group">
            <label for="cvs">Curriculum Vitae</label>
            <input id="cvs" name = "cvs"  type="file" class="form-control" value="{{$usuario->cvs}}"> 
        </div>
        <button class='button-two_crear' type ='submit'> <span class="texto_blanco">Actualizar</span> </button>
    </form>
        </div>
    </section>
</section>
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