@extends('layouts.app')
@section('content')

<section class="content">
        <h1>
            Vacantes  
        </h1>

        <div class='row row-centered'>
                @foreach($vacante as $vacantes) 
                <div class='col-xs-12 col-md-4'>
                    <div>
                        <div>
                            <img src="{!!url($vacantes->imagen)!!}" alt="">
                        </div>
                    </div>
                    <div>{{$vacantes->titulo}}</div>
                    <div>{!!str_limit($vacantes->descripcion, $limit = 150, $end = '...')!!}</div>
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