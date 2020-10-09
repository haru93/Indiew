@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class='mt-3 mb-2'>ゲーム紹介</h2>
        <div class="row justify-content-center mb-3">
            <div class="col">
                <div class="card">
                    @if(app('env') == 'production')
                        <img class='card-img-top' src="{{ $game->image }}">
                    @else
                        <img class='card-img-top' src="{{ asset('storage/'.$game->image) }}">
                    @endif
                    <div class="card-body">
                        <h3 class="card-title">{{ $game->name }}</h3>
                        <p class="card-text">{{ $game->data }}</p>
                        <div class="row">
                            <div class="col-md-8 mt-3">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>販売価格</th>
                                            <td>{{ number_format($game->price) }}円(税込)</td>
                                        </tr>
                                        <tr>
                                            <th>カテゴリー</th>
                                            <td>{{ $game->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>配信日</th>
                                            <td>{{ $game->released_date->format('Y年m月d日') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="text-center">
                                    <a class="btn btn-danger" href="{{ $game->url }}" target="_blank">My Nintendo Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class='mt-3 mb-3'>関連記事</h4>
        <div class="mb-3">
        <div class="row justify-content-left image-col pl-3 pl-3">
            @foreach ($game->articles as $article)
                <div class="col-md-4">
                    <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                        <div class='image-wrapper'>
                            @if(app('env') == 'production')
                                <img src="{{ $article->image }}">
                            @else
                                <img src="{{ asset('storage/'.$article->image) }}">
                            @endif
                            <div class="mask">
                                <div class="caption-title">{{ $article->title }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection