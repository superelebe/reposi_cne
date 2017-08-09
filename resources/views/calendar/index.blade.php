@extends('layouts.app')
@section('content')

    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cursos.png')}}" alt="">
            </div>
        </div>
    </div>



<section class="content">

    <div class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="col-xs-12 col-centered">
                <div class="row">
                    <div class="col-xs-6 col-centered">
                        <form  method = 'get' action = '{{url("/admincnec/dashboard")}}'>
                            <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN DASHBOARD</span></button>
                        </form>
                    </div>
                    <div class="col-xs-6 col-centered">
                        <form class = 'col s3' method = 'get' action = '{!!url("calendario")!!}/create'>
                            <div class="sub-main">
                              <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Evento</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="paginacion">{!! $dias->render() !!} </div>
              <div class="col-md-12 col-centered">
                <div class="table-responsive">
                    <table class='table table-striped' cellpadding="10">
                        <thead>
                            <tr>
                                <td>TITULO</td>
                                <td>INICIO</td>
                                <td>FINALIZA</td>
                                <td>DESCRIPCIÓN</td>
                                <td>SUELDO</td>
                                <td>IMAGEN</td>
                                <td>BORRAR</td>
                                <td>EDITAR</td>
                                <td>INFO</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($dias as $evento) 
                            <tr>
                                <td>{!!$evento->title!!}</td>
                                <td>{!!$evento->start->format('d - m - Y')!!}</td>
                                <td>{!!$evento->end->format('d - m - Y')!!}</td>
                                <td>{{substr(strip_tags($evento->descripcion),0,50)}}{{strlen(strip_tags($evento->descripcion)) > 50 ? "...":""}}</td>
                                <td>{!!$evento->sueldo!!}</td>
                                <td> <img class='largo_imagenes' src="{!!$evento->imagen!!}" alt=""> </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$evento->id!!}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                </td>
                                <td>
                                    <a href="{{ route('calendario.edit', $evento->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/calendario/{!!$evento->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                </td>
                                <td>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/calendario/{!!$evento->id!!}'><i class = 'material-icons'>info</i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>    
                </div>    
            </div>
            {!! $dias->links() !!}
        </div>

    </div>
</section>
@endsection