@extends('layouts.app')
@section('content')


<section class="content">

    <div class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="empresa">
                    <div id="selects"></div>
                    <div id="paginacion">{!! $organigramas->render() !!} </div>
                    <form class = '' method = 'get' action = '{!!url("organigrama")!!}/create'>
                        
                          <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Organigrama</span></button>
                        
                    </form>


                        <div class="col-md-12 col-centered">
                            <div class="table-responsive">
                                <table class='table table-striped' cellpadding="10">
                                    <thead>
                                        <tr>
                                            <td>TITULO</td>
                                            <td>PUESTO</td>
                                            <td>IMAGEN</td>
                                            <td>BORRAR</td>
                                            <td>EDITAR</td>
                                            <td>INFO</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($organigramas as $organigrama) 
                                            <tr>
                                                    <td>{!!$organigrama->nombre!!}</td>
                                                    <td>{!!$organigrama->puesto->titulo!!}</td>
                                                    <td> <img class='largo_imagenes' src="{!!$organigrama->imagen!!}" alt=""> </td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/organigrama/{!!$organigrama->id!!}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('organigrama.edit', $organigrama->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/organigrama/{!!$organigrama->id!!}/edit'><i class = 'material-icons'>Editar</i></a>
                                                    </td>
                                                    <td>
                                                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/organigrama/{!!$organigrama->id!!}'><i class = 'material-icons'>Info</i></a>
                                                    </td>

                                            </tr>
                                         @endforeach 
                                    </tbody>
                                </table> 
                            </div>    
                        </div>
                    {{$organigramas->render()}}
            </div> 
        </div>

    </div>
</section>

@endsection