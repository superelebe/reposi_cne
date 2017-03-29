@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>

    <div>
            @foreach($noticia as $noticias) 
            <div>
                <div>
                    <div>
                        <img src="{!!url($noticias->imagen)!!}" alt="">
                    </div>
                </div>
                <div>{{$noticias->titulo}}</div>
                <div>{{$noticias->subtitulo}}</div>
                <div>{{$noticias->created_at->format('d F Y')}}</div>
                <div>{{substr(strip_tags($noticias->cuerpo),0,100)}}{{strlen(strip_tags($noticias->cuerpo)) > 100 ? "...":""}}</div>
                <div><a href="/noticia/{{$noticias->id}}">Ver mas</a></div>
            </div>
            @endforeach 
    </div>
    {{ $noticia->links() }}

</section>
@endsection