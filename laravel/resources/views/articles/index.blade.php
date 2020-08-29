@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-8 mb-2">
                    <a href="{{ route('articles.show', compact('article')) }}" class="card title-link">
                        <div class='image-wrapper'>
                            @if(app('env') == 'production')
                                <img class='img-fluid' src="{{ $article->image }}">
                            @else
                                <img class='img-fluid' src="{{ asset('storage/images/'.$article->image) }}">
                            @endif
                                <div class="card-title">{{ $article->title }}</div>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->game->name }}</h6>
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