@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Mostrar Noticia
    </h1>
    <br>
    <form method = 'get' action = '{!!url("article")!!}'>
        <button class = 'btn btn-primary'>Noticia index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>titulo : </i></b>
                </td>
                <td>{!!$article->titulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>subtitulo : </i></b>
                </td>
                <td>{!!$article->subtitulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cuerpo : </i></b>
                </td>
                <td>{!!$article->cuerpo!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection