@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Show event
    </h1>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$event->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>start : </i></b>
                </td>
                <td>{!!$event->start!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>end : </i></b>
                </td>
                <td>{!!$event->end!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>imagen : </i></b>
                </td>
                <td> <img src="{!!$event->imagen!!}" alt=""></td>
            </tr>
            <tr>
                <td>
                    <b><i>color : </i></b>
                </td>
                <td>{!!$event->color!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>subtitulo : </i></b>
                </td>
                <td>{!!$event->subtitulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>descripcion : </i></b>
                </td>
                <td>{!!$event->descripcion!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection