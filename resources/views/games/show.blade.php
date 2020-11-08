@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-lg-8 games-show-card">
            <div class="card">
                <img class='card-img-top w-100' src="{{ $game->image }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $game->name }}</h3>
                    <p class="card-text">{{ $game->data }}</p>
                    <div class="row">
                        <div class="col-md-9 mt-3">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>販売価格</th>
                                        <td>{{ number_format($game->price) }}円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>カテゴリー</th>
                                        <td>
                                            @foreach ($game->categories as $category )
                                            <p>{{ $category->name }}</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>配信日</th>
                                        <td>{{ $game->released_date->format('Y年m月d日') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="text-center mb-3">
                                <a class="btn btn-success w-100" href="{{ route('articles.preCreate', ['id' => $game->id]) }}">
                                投稿する</a>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-danger w-100" href="{{ $game->url }}" target="_blank">販売ページ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class='my-4'>関連記事</h4>
    <div class="mb-3">
        <div class="row justify-content-left image-col">
            @foreach ($game->articles as $article)
            <div class="col-md-4 p-0">
                <a href="{{ route('articles.show', compact('article')) }}">
                    <div class='image-wrapper'>
                        <img src="{{ $article->image }}" width="100%" height="200">
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