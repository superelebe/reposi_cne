@extends('layouts.app')
@section('content')


<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="row">
                <div class="col-xs-6 col-centered">
                    <form  method = 'get' action = '{{url("/admincnec/dashboard")}}'>
                        <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN DASHBOARD</span></button>
                    </form>
                </div>
                <div class="col-xs-6 col-centered">
                    <form method = 'get' action = '{!!url("organigrama")!!}'>
                        <button class = 'btn btn-danger'>article Index</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
               Editar Organigrama
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!! url("organigrama")!!}/{!!$organigrama->id!!}/update' enctype="multipart/form-data"> 
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="titulo">titulo</label>
                    <input id="titulo" name = "nombre" type="text" class="form-control" value="{!!$organigrama->nombre!!}"> 
                </div>
                <div class="form-group">
                    <label for="subtitulo">Puesto</label>
                    <select name="puesto_id" id="">
                        <option value="{{$organigrama->puesto_id}}" selected >{{$organigrama->puesto->titulo}}</option>
                        @foreach( $puestos as $puesto ) 
                            <option value="{{$puesto->id}}">{{$puesto->titulo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="imagen">Fotografia</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>

    </section>  
</section>
@endsection