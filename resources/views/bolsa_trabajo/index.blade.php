@extends('layouts.app')
@section('content')



    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-vacante.png')}}" alt="">
            </div>
        </div>
    </div>



<section class="content">

    <div class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="col-xs-12 col-centered">        
                <form  method = 'get' action = '{!!url("bolsa_trabajo")!!}/create'>
                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Trabajo</span></button>
                </form>
                
            </div>

            <div id="paginacion">{!! $trabajos->render() !!} </div>
              <div class="col-md-12 col-centered">
                <div class="table-responsive">
                    <table class='table table-striped' cellpadding="10">
                        <thead>
                            <tr>
                                <td>TITULO</td>
                                <td>EMPRESA</td>
                                <td>DESCRIPCIÓN</td>
                                <td>SUELDO</td>
                                <td>IMAGEN</td>
                                <td>BORRAR</td>
                                <td>EDITAR</td>
                                <td>INFO</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($trabajos as $trabajo) 
                            <tr>
                                <td>{!!$trabajo->titulo!!}</td>
                                <td>{!!$trabajo->empresa!!}</td>
                                <td>{{substr(strip_tags($trabajo->descripcion),0,50)}}{{strlen(strip_tags($trabajo->descripcion)) > 50 ? "...":""}}</td>
                                <td>{!!$trabajo->sueldo!!}</td>
                                <td><img class='largo_imagenes' src="{!!url($trabajo->imagen)!!}" alt=""></td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$trabajo->id!!}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                </td>
                                <td>
                                    <a href="{{ route('bolsa_trabajo.edit', $trabajo->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                </td>
                                <td>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}'><i class = 'material-icons'>info</i></a>
                                </td>

                            </tr>
                            @endforeach 
                        </tbody>
                    </table>    
                </div>    
            </div>
            {!! $trabajos->link() !!}
        </div>

    </div>
</section>
@endsection