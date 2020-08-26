@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(!empty($article->image))
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ $article->image }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('storage/images/'.$article->image) }}"></div>
                    @endif
                @else
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ secure_asset('images/dummy.png') }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('images/dummy.png') }}"></div>
                    @endif
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->body }}</p>
                    <p><a href="{{ route('games.show', ['id' => $article->game_id]) }}" class="card-text">{{ $article->game->name }}</a></p>
                    @if(Auth::id() === $article->user_id)
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('articles.edit', compact('article')) }}" role="button">編集</a>
                        <form method="POST" action="{{ route('articles.destroy', compact('article')) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection