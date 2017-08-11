@extends('layouts.app')
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
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
                    <form method = 'get' action = '{!!url("calendario")!!}'>
                        <button class = 'btn btn-danger'>Ver todos los eventos</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
               Editar Calendario
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!! url("calendario")!!}/{!!$dia->id!!}/update' enctype="multipart/form-data" > 
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "titulo" type="text" class="form-control" value="{!!$dia->
                    titulo!!}"> 
                </div>
                <div class="form-group">
                    <label for="subtitulo">subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$dia->
                    subtitulo!!}"> 
                </div>
                <div class="form-group">
                    <label for="start">start</label>
                    <input id="start" name = "start" type="text" class="form-control" value="{!!$dia->
                    start!!}"> 
                </div>
                <div class="form-group">
                    <label for="end">end</label>
                    <input id="end" name = "end" type="text" class="form-control" value="{!!$dia->
                    end!!}"> 
                </div>
                <div class="form-group">
                    <label for="subtitulo">Horario</label>
                    <input id="subtitulo" name = "horarios" type="text" class="form-control" value="{!!$dia->
                    horarios!!}"> 
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea  id="descripcion" name = "descripcion" type="text" class="form-control">{!!$dia->descripcion!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">imagen</label>
                    <img src="{!! url($dia->
                                imagen)!!}" alt="">
                    <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$dia->
                    imagen!!}"> 
                </div>
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
    </section>  
</section>

@endsection