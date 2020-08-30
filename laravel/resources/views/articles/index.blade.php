@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-8 mb-2">
                    <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                        <div class='image-wrapper'>
                            @if(app('env') == 'production')
                                <img class='img-fluid image-box' src="{{ $article->image }}">
                            @else
                                <img class='img-fluid image-box' src="{{ asset('storage/'.$article->image) }}">
                            @endif
                                <p>{{ $article->title }}</p>
                                <p>{{ $article->game->name }}</p>
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