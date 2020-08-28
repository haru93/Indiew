@extends('layouts.app')

<style>
    .title-link { color : #000000; }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
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