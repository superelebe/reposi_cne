@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Show banner
    </h1>
    <br>
    <form method = 'get' action = '{!!url("banner")!!}'>
        <button class = 'btn btn-primary'>banner Index</button>
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
                <td>{!!$banner->titulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>imagen : </i></b>
                </td>
                <td>{!!$banner->imagen!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>thumb : </i></b>
                </td>
                <td>{!!$banner->thumb!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>link : </i></b>
                </td>
                <td>{!!$banner->link!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection