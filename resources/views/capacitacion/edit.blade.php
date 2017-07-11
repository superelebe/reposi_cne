@extends('layouts.app')
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists", });</script>
@section('content')


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
            <form method = 'POST' action = "{!! url('curso')!!}/{!!$cursos->id!!}/update" enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "title" type="text" class="form-control" value="{!!$cursos->title!!}"> 
                </div>
                <div class="form-group">
                    <label for="start">start</label>
                    <input id="start" name = "start" type="text" class="form-control" value="{!!$cursos->start!!}"> 
                </div>
                <div class="form-group">
                    <label for="end">end</label>
                    <input id="end" name = "end" type="text" class="form-control" value="{!!$cursos->end!!}"> 
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar</label>
                    <input id="lugar" name = "lugar" type="text" class="form-control" value={{$cursos->lugar}}>
                </div>
                <div class="form-group">
                    <label for="horarios">Horario</label>
                    <input id="horarios" name = "horarios" type="text" class="form-control" value={{$cursos->horarios}}>
                </div>
                <div class="form-group">
                    <label for="end">Inversion</label>
                    <input id="end" name = "inversion" type="text" class="form-control" value={{$cursos->inversion}}>
                </div>
                <div class="form-group">
                    <label for="imagen">imagen</label>
                    <img src="{!! asset($cursos->pdf)!!}" alt="">
                    <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$cursos->pdf!!}"> 
                </div>
                <div class="form-group">
                    <label for="color">color</label>
                    <input id="color" name = "color" type="text" class="form-control" value="{!!$cursos->color!!}"> 
                </div>
                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control" >{!!$cursos->descripcion!!}</textarea>
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>

@endsection