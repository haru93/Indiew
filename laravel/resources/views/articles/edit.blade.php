@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">景色の編集</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('articles.update', compact('article')) }}" enctype="multipart/form-data">
                    @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">タイトル</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" placeholder='タイトルを入力' value="{{ old('title', $article->title) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">内容</label>
                            <div class="col-md-6">
                                <textarea class='description form-control' name='body' placeholder='本文を入力'>{{ old('body', $article->body) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="game_id" class="col-md-4 col-form-label text-md-right">作品名</label>
                            <select class="form-control col-md-6" name="game_id" id="game_id">
                                @foreach ($games as $game)
                                    @if(old('game_id') == $game->id)
                                    <option value="{{ $game->id }}" selected>{{ $game->name }}</option>
                                    @else
                                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">画像</label>
                            <div class="col-md-6">
                                <input id="file1" type="file" class="form-control-file" name="image">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
