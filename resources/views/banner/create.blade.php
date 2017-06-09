@extends('layouts.app')
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("banner")!!}'>
                <button class = 'btn btn-danger'>Ver Todos los banners</button>
            </form>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
                Crear Banner
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("banner")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                    <div class="form-group">
                        <label for="titulo">titulo</label>
                        <input id="titulo" name = "titulo" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="imagen">imagen</label>
                        <input id="imagen" name = "imagen" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="link">link</label>
                        <input id="link" name = "link" type="text" class="form-control">
                    </div>
                    <div class="sub-main_crear">
                      <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                    </div>
            </form>
        </div>

    </section>  
</section>


@endsection