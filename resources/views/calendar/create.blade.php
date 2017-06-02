@extends('layouts.app')
@section('content')

<section class="container">
    <section class="row row-centered">
        <div class="col-md-6 col-centered">
            <h1>
                Crear Calendario
            </h1>
            <form method = 'get' action = '{!!url("calendario")!!}'>
                <button class = 'btn btn-danger'>Calendario Index</button>
            </form>
        </div>
        <div class="col-md-6 col-centered">
            <form method = 'POST' action = '{!!url("calendario")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "titulo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitulo">subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="start">start</label>
                    <input id="start" name = "start" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">end</label>
                    <input id="end" name = "end" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imagen">imagen</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control"></textarea>
                </div>
                <button class = 'btn btn-primary' type ='submit'>Crear</button>
            </form>
        </div>

    </section>  
</section>

@endsection
@extends('layouts.js')