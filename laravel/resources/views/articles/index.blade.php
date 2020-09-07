@extends('layouts.app')

@section('content')
    <div class="top-image">
        <div class="jumbotron jumbotron-fluid mb-0" style="background-image: url('{{asset('controller.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>IndieView</h1>
                        <p>インディーズゲームの景色を共有して魅力を紹介するサイト</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @foreach ($articles->chunk(2) as $chunk)
            <div class="row justify-content-left image-col">
                @foreach ($chunk as $article)
                    <div class="col-md-6">
                        <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                            <div class='image-wrapper'>
                                @if(app('env') == 'production')
                                    <img src="{{ $article->image }}">
                                @else
                                    <img src="{{ asset('storage/'.$article->image) }}">
                                @endif
                                    <div class="mask">
                                        <div class="caption-title">{{ $article->title }}</div>
                                    </div>
                                    <div class="caption-gamename">{{ $article->game->name }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
        <div class="row justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection