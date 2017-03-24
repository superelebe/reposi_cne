@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        {{$article->titulo}}
    </h1>
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

            <tr>
                <td>
                    <b><i>Imagen : </i></b>
                </td>
                <td><img src="{!!url($article->imagen)!!}" alt=""></td>
            </tr>
        </tbody>
    </table>
</section>
@endsection