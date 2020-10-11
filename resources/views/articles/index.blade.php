@extends('layouts.app')

@section('content')
    <div class="top-image">
        <div class="jumbotron jumbotron-fluid mb-0" style="background-image: url('{{asset('controller.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Indiew</h1>
                        <p>インディーズゲームの景色を共有して魅力を紹介するサイト</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 articles-index-search">
                    <div class="col-7 mt-5">
                        <form method="GET" action="{{ route('articles.index') }}">
                            <div class="input-group w-100 mt-3">
                                <input type="text" class="form-control search-textbox" name="search" placeholder="景色を検索キーワードで探す">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col articles-index-btn">
                        @guest
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" id="email" name="email" value="user@user.com">
                            <input type="hidden" id="password" name="password" value="password">
                            <button type="submit" class="btn btn-primary ml-0 mr-3">かんたんログイン</button>
                        </form>
				        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @foreach ($articles->chunk(2) as $chunk)
            <div class="row justify-content-left image-col">
                @foreach ($chunk as $article)
                    <div class="col-md-6">
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