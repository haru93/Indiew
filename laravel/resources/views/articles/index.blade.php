@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container-fluid">
        @foreach ($articles->chunk(2) as $chunk)
            <div class="row justify-content-center index-2col">
                @foreach ($chunk as $article)
                    <div class="col-md-6">
                        <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                            <div class='image-wrapper-index'>
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