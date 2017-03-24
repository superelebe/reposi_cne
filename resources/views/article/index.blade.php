@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("article")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nueva Noticia</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>titulo</th>
            <th>subtitulo</th>
            <th>cuerpo</th>
            <th>imagen</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($articles as $article) 
            <tr>
                <td>{!!$article->titulo!!}</td>
                <td>{!!$article->subtitulo!!}</td>
                <td><img src="{!!url($article->imagen)!!}" alt=""></td>
                <td>{{substr(strip_tags($article->cuerpo),0,80)}}{{strlen(strip_tags($article->cuerpo)) > 80 ? "...":""}}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/article/{!!$article->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href="{{ route('article.edit', $article->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/article/{!!$article->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/article/{!!$article->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $articles->render() !!}

</section>
@endsection