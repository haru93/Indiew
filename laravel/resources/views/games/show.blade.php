@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container">
        <h2 class='mb20'>ゲーム紹介</h2>
        <div class="row justify-content-center mb30">
            <div class="col-md-8">
                <div class="card">
                    <div class='image-wrapper'>
                        @if(app('env') == 'production')
                            <img class='img-fluid' src="{{ $game->image }}">
                        @else
                            <img class='img-fluid' src="{{ asset('storage/images/'.$game->image) }}">
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">{{ $game->data }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h4 class='mb20'>関連記事</h4>

        <div class="row justify-content-center">
            @foreach ($game->articles as $article)
                <div class="col-md-4 mb-2">
                    <a href="{{ route('articles.show', compact('article')) }}" class="card title-link">
                        <div class="card-body">
                            <div class='image-wrapper'>
                                @if(app('env') == 'production')
                                    <img class='img-fluid view-image-games' src="{{ $article->image }}">
                                @else
                                    <img class='img-fluid view-image-games' src="{{ asset('storage/images/'.$article->image) }}">
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection