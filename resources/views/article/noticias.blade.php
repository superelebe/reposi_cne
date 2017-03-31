@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>

    <div id="notilist" class="limpiar clearfix"> 
        <div class="ocho80">
            <div id="notilistconten">
                <table cellspacing="0" cellpadding="3" width="777" border="0">
                    <tbody>
                        <tr>
                            <td>
                                @foreach($noticia as $noticias) 
                                    <div class="noticia">
                                        <h3>{{$noticias->titulo}}</h3>
                                        <span>{{$noticias->created_at->format('d F Y')}}</span>
                                        <div class="con_img_noti">
                                            <img src="{!!($noticias->imagen)!!}" alt="">
                                        </div>
                                        <p>{{substr(strip_tags($noticias->cuerpo),0,100)}}{{strlen(strip_tags($noticias->cuerpo)) > 100 ? "...":""}}</p>
                                        <a href="/noticia/{{$noticias->id}}">Ver mas</a>
                                    </div>
                                @endforeach 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $noticia->links() }}

</section>
@endsection