@extends('layouts.app')

@section('content')
<div class="container articles-show-card">
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-md-8">
            <div class="card">
                @if(app('env') == 'production')
                <img class='card-img-top' src="{{ $article->image }}">
                @else
                <img class='card-img-top' src="{{ asset('storage/'.$article->image) }}">
                @endif
                <div class="card-body pt-0 pb-0 pl-3">
                    <div class="card-text text-right">
                        <article-like
                            :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
                            :initial-count-likes='@json($article->count_likes)'
                            :authorized='@json(Auth::check())'
                            endpoint="{{ route('articles.like', ['article' => $article]) }}"
                        >
                        </article-like>
                    </div>
                </div>
                @foreach($article->tags as $tag)
                @if($loop->first)
                <div class="card-body pt-0 pb-4 pl-3">
                    <div class="card-text line-height">
                @endif
                    <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
                        {{ $tag->name }}
                    </a>
                @if($loop->last)
                    </div>
                </div>
                @endif
                @endforeach
                <div class="card-body pt-0">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $article->created_at->format('Y.m.d') }} : {{ $article->user->name }}</h6>
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->body }}</p>
                    <a href="{{ route('games.show', ['id' => $article->game_id]) }}" class="card-text text-decoration-none text-danger">{{ $article->game->name }}</a>
                    
                    @if(Auth::id() === $article->user_id)
                    <p>
                        <div class="row justify-content-end">
                            <div class="btn-group">
                                <a class="btn btn-primary rounded-0" href="{{ route('articles.edit', compact('article')) }}" role="button"><i class="fas fa-pen"></i></a>
                                <form method="POST" action="{{ route('articles.destroy', compact('article')) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-0"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @auth
    <div class="row justify-content-center mb-0">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <input name="article_id" type="hidden" value="{{ $article->id }}" >

                        <div class="row">
                            <div class="col-11 pr-0">
                                <input type="text" class='description form-control rounded-0' name='body' placeholder='コメント'>
                            </div>
                            <div class="col-1 pl-0">
                                <button type="submit" class="btn btn-success h-100 rounded-0"><i class="far fa-comment"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endauth

    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body pt-0">
                    @forelse ($article->comments()->orderBy('created_at', 'desc')->get() as $comment)
                    <div class="border-bottom p-4">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->format('Y.m.d') }} : {{ $comment->user->name }}</h6>
                        <h5>{{ $comment->body }}</h5>
                    </div>
                    @empty
                    コメントはまだありません
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection