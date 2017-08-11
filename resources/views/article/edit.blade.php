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
                    <form method = 'get' action = '{!!url("article")!!}'>
                        <button class = 'btn btn-danger'>Ver Todas las Noticias</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
               Editar Noticia
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = "{!! url('article')!!}/{!!$article->id!!}/update" enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="titulo">Titulo Noticia</label>
                    <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$article->titulo!!}">
                </div>
                <div class="form-group">
                    <label for="empresa">Subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$article->subtitulo!!}">
                </div>
                <div class="form-group">
                    <label for="empresa">Cuerpo</label>
                    <textarea id="subtitulo" name = "cuerpo" type="text" class="form-control" >{!!$article->cuerpo!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="imagen"Imagen</label>
                    <img src="{{asset($article->imagen)}}" alt="">
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>


@endsection