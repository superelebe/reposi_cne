@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>

    <div>
            @foreach($vacante as $vacantes) 
            <div>
                <div>
                    <div>
                        <img src="{!!url($vacantes->imagen)!!}" alt="">
                    </div>
                </div>
                <div>{{$vacantes->titulo}}</div>
                <div>{{substr(strip_tags($vacantes->descripcion),0,100)}}{{strlen(strip_tags($vacantes->descripcion)) > 100 ? "...":""}}</div>
                <div>Sueldo: {{$vacantes->sueldo}}</div>
                <div>Empresa: {{$vacantes->empresa}}</div>
                <div>Vigencia: {{$vacantes->end}}</div>
                <div><a href="/bolsa_trabajo_cnec/{{$vacantes->id}}">Ver mas</a></div>
            </div>
            @endforeach 
    </div>
    {{ $vacante->links() }}

</section>
@endsection