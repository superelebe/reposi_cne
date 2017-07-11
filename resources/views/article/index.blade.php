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
                <form  method = 'get' action = '{{url("article")}}/create'>
                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nueva noticia</span></button>
                </form>
                
            </div>

            <div id="paginacion">{{ $articles->links() }} </div>
              <div class="col-md-12 col-centered">
                <div class="table-responsive">
                    <table class='table table-striped' cellpadding="10">
                        <thead>
                            <tr>
                                <td>TITULO</td>
                                <td>SUBTITULO</td>
                                <td>IMAGEN</td>
                                <td>BORRAR</td>
                                <td>EDITAR</td>
                                <td>INFO</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($articles as $article) 
                            <tr>
                                <td>{{$article->titulo}}</td>
                                <td>{{$article->subtitulo}}</td>
                                <td>{{substr(strip_tags($article->cuerpo),0,50)}}{{strlen(strip_tags($article->cuerpo)) > 50 ? "...":""}}</td>
                                <td><img class='largo_imagenes' src="{{url($article->imagen)}}" alt=""></td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/article/{{$article->id}}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                </td>
                                <td>
                                    <a href="{{ route('article.edit', $article->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/article/{{$article->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                </td>
                                <td>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/article/{{$article->id}}'><i class = 'material-icons'>info</i></a>
                                </td>

                            </tr>
                            @endforeach 
                        </tbody>
                    </table>    
                </div>    
            </div>
            {{ $articles->links() }}
        </div>

    </div>
</section>


@endsection