@extends('layouts.app')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("calendario")!!}'>
                <button class = 'btn btn-danger'>Ver todos los Eventos</button>
            </form>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
                Crear Evento
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("calendario")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "titulo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="start">Comienzo</label>
                    <input id="start" name = "start" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">Final</label>
                    <input id="end" name = "end" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea  id="descripcion" name = "descripcion" type="text" class="form-control"></textarea>
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>

@endsection
@extends('layouts.js')