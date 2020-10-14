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
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="text-center h2 p-4">景色の投稿</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row justify-content-center">
                                <div class="col-md-8">タイトル</div>
                                <div class="w-100"></div>
                                <div class="col-md-8">
                                    <input id="title" type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-8">概要</div>
                                <div class="w-100"></div>
                                <div class="col-md-8">
                                    <textarea class='description form-control' name='body'></textarea>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-8">ゲームタイトル</div>
                                <div class="w-100"></div>
                                <div class="col-md-8">
                                    <select class="form-control" name="game_id" id="game_id">
                                        @if (!isset($check))
                                        <option value="" selected>選んでください</option>
                                        @foreach ($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                        @endforeach
                                        @else
                                        <option value="{{ $check->id }}" selected>{{ $check->name }}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-8">タグ</div>
                                <div class="w-100"></div>
                                <div class="col-md-8">
                                    <article-tags-input
                                        :initial-tags='@json($tagNames ?? [])'
                                        :autocomplete-items='@json($allTagNames ?? [])'
                                    >
                                    </article-tags-input>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-md-8">画像</div>
                                <div class="w-100"></div>
                                <div class="col-md-8">
                                    <input id="file1" type="file" class="form-control-file" name="image">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <button type="submit" class="btn btn-success m-4 w-25">投稿</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
