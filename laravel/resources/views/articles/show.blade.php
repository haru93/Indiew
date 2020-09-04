@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class='image-wrapper'>
                        @if(app('env') == 'production')
                            <img class='card-img-top' src="{{ $article->image }}">
                        @else
                            <img class='card-img-top' src="{{ asset('storage/'.$article->image) }}">
                        @endif
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $article->created_at->format('Y.m.d') }} : {{ $article->user->name }}</h6>
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->body }}</p>
                        <a href="{{ route('games.show', ['id' => $article->game_id]) }}" class="card-text">{{ $article->game->name }}</a>
                        
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

        <h4 class='mb-2'>コメント</h4>

        @auth
            <div class="row justify-content-center mb-3">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">コメントの投稿</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('comments.store') }}">
                                @csrf
                                    <input name="article_id" type="hidden" value="{{ $article->id }}" >

                                    <div class="form-group row">
                                        <label for="body" class="col-md-4 col-form-label text-md-right">内容</label>
                                        <div class="col-md-6">
                                            <textarea class='description form-control' name='body' placeholder='本文を入力'></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">投稿</button>
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
                    <div class="card-body">
                        @forelse ($article->comments()->orderBy('created_at', 'desc')->get() as $comment)
                            <div class="border-top p-4">
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