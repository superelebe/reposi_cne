@extends('layouts.app')
@section('content')


    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cal.png')}}" alt="">
            </div>
        </div>
    </div>

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
                <td>{!!$calendario->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>start : </i></b>
                </td>
                <td>{!!$calendario->start->format('d \- F \- Y')!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>end : </i></b>
                </td>
                <td>{!!$calendario->end->format('d \- F \- Y')!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>imagen : </i></b>
                </td>
                <td> <img src="{!!$calendario->imagen!!}" alt=""></td>
            </tr>
            <tr>
                <td>
                    <b><i>color : </i></b>
                </td>
                <td>{!!$calendario->color!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>subtitulo : </i></b>
                </td>
                <td>{!!$calendario->subtitulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>descripcion : </i></b>
                </td>
                <td>{!!$calendario->descripcion!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection