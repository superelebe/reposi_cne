@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div>
                    @foreach($banners as $banner)
                        <div>
                            <img src="{{$banner->imagen}}" alt="">
                        </div>
                    @endforeach
                </div>
                <div>
                    <div>
                        @foreach($noticias as $noticia)
                            <div>
                                <img src="{{$noticia->imagen}}" alt="">
                                <div>{{ $noticia->titulo}}</div>
                                <div>{{ $noticia->created_at->diffForHumans()}}</div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <a href="{{route('mostrar')}}">Ver mas noticias</a>
                    </div>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection
@extends('layouts.js')