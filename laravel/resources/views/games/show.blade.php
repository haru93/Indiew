@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class='mt-3 mb-2'>ゲーム紹介</h2>
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    @if(app('env') == 'production')
                        <img class='card-img-top' src="{{ $game->image }}">
                    @else
                        <img class='card-img-top' src="{{ asset('storage/'.$game->image) }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">{{ $game->data }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h4 class='mb-2'>関連記事</h4>
        <div class="row justify-content-left index-3col">
            @foreach ($game->articles as $article)
                <div class="col-md-4">
                    <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                        @if(app('env') == 'production')
                            <img class='img-fluid' src="{{ $article->image }}">
                        @else
                            <img class='img-fluid' src="{{ asset('storage/'.$article->image) }}">
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection