@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center mb30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ゲーム紹介</div>
                @if(!empty($game->image))
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ $game->image }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('storage/images/'.$game->image) }}"></div>
                    @endif
                @else
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ secure_asset('images/dummy.png') }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('images/dummy.png') }}"></div>
                    @endif
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <p class="card-text">{{ $game->data }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        @foreach ($game->articles as $article)
        <div class="col-md-4 mb-2">
            <a href="{{ route('articles.show', compact('article')) }}" class="card title-link">
                <div class="card-body">
                    @if(!empty($article->image))
                        @if(app('env') == 'production')
                            <div class='image-wrapper'><img class='img-fluid view-image' src="{{ $article->image }}"></div>
                        @else
                            <div class='image-wrapper'><img class='img-fluid view-image' src="{{ asset('storage/images/'.$article->image) }}"></div>
                        @endif
                    @else
                        @if(app('env') == 'production')
                            <div class='image-wrapper'><img class='img-fluid view-image' src="{{ secure_asset('images/dummy.png') }}"></div>
                        @else
                            <div class='image-wrapper'><img class='img-fluid view-image' src="{{ asset('images/dummy.png') }}"></div>
                        @endif
                    @endif
                    <div class="card-title">{{ $article->title }}</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection