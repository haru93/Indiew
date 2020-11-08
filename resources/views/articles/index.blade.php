@extends('layouts.app')

@section('content')
<div class="top-image">
    <div class="jumbotron jumbotron-fluid mb-0" style="background-image: url('{{asset('controller.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Indiew</h1>
                    <p>Nintendo Switch で遊べるインディーズゲームの景色を投稿して魅力を共有しましょう。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center articles-index-search py-3">
    <div class="col-4 offset-4 text-center">
        <p class="p-0 m-0"><i class="far fa-image mr-2"></i>景色を探す</p>
        <form method="GET" action="{{ route('articles.index') }}">
            <div class="input-group w-100 px-2">
                <input type="text" class="form-control search-textbox text-center" name="search">
                <span class="input-group-btn">
                    <button type="submit" class="btn ut_bg-skyblue text-white"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <div class="col-4 m-auto">
        <p class="mt-4 p-0 mb-0">{{ $articles->count() }} 件の結果</p>
    </div>
</div>
<div class="container-fluid">
    @foreach ($articles->chunk(2) as $chunk)
    <div class="row justify-content-left image-col">
        @foreach ($chunk as $article)
        <div class="col-md-6 p-0">
            <a href="{{ route('articles.show', compact('article')) }}" class="title-link">
                <div class='image-wrapper'>
                    <img src="{{ $article->image }}" width="100%" height="300">
                    <div class="mask">
                        <div class="caption-title">
                            {{ $article->title }}
                        </div>
                    </div>
                    <div class="caption-gamename">
                        {{ $article->game->name }}
                    </div>
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