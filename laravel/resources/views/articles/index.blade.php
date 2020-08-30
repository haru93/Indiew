@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-8 mb30">
                    <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                        <div class='image-wrapper-index'>
                            @if(app('env') == 'production')
                                <img class='image-box' src="{{ $article->image }}">
                            @else
                                <img class='image-box' src="{{ asset('storage/'.$article->image) }}">
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
        <div class="row justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection