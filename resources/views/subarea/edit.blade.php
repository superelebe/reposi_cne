<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("curso")!!}'>
                <button class = 'btn btn-danger'>Ver Todos los cursos</button>
            </form>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
               Editar Curso
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = "{!! url('curso')!!}/{!!$dia->id!!}/update" enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="titulo">Titulo Noticia</label>
                    <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$dia->titulo!!}">
                </div>
                <div class="form-group">
                    <label for="empresa">Subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$dia->subtitulo!!}">
                </div>
                <div class="form-group">
                    <label for="empresa">Cuerpo</label>
                    <textarea id="subtitulo" name = "cuerpo" type="text" class="form-control" >{!!$dia->cuerpo!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="imagen"Imagen</label>
                    <img src="{{asset($dia->imagen)}}" alt="">
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>