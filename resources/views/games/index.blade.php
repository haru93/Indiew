@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col">
                <h2>ゲーム一覧</h2>
            </div>
        </div>
        <div class="row justify-content-end mb-2">
            <div class="col-md-3">
                <form method="GET" action="{{ route('games.index') }}" onchange="submit(this.form);">
                    <div class="form-group">
                        <label for="sort_key"></label>
                        <select class="form-control" name="sort_key" id="sort_key">
                            <option value="">並びかえ</option>
                            <option value="released_date_key1" @if($sort_key=='released_date_key1') selected @endif>配信が新しい順</option>
                            <option value="released_date_key2" @if($sort_key=='released_date_key2') selected @endif>配信が古い順</option>
                            <option value="price_key1" @if($sort_key=='price_key1') selected @endif>価格が安い順</option>
                            <option value="price_key2" @if($sort_key=='price_key2') selected @endif>価格が高い順</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="games-index-sidebar mb-4">
                    <ul id="accordion_menu">
                        <li>
                            <a data-toggle="collapse" href="#menu01" aria-controls="#menu01" aria-expanded="false">カテゴリー</a>
                        </li>
                        <ul id="menu01" class="collapse" data-parent="#accordion_menu">
                            @foreach ($categories as $category)
                            <li><a href="{{ route('games.index', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                            <li>
                                <a data-toggle="collapse" href="#menu02" aria-controls="#menu02" aria-expanded="false">価格帯</a>
                            </li>
                        <ul id="menu02" class="collapse" data-parent="#accordion_menu">
                            <li><a href="{{ route('games.index', ['money' => 'low']) }}">1,000円未満</a></li>
                            <li><a href="{{ route('games.index', ['money' => 'middle-low']) }}">1,000円以上 2,000円未満</a></li>
                            <li><a href="{{ route('games.index', ['money' => 'middle-high']) }}">2,000円以上 3,000円未満</a></li>
                            <li><a href="{{ route('games.index', ['money' => 'high']) }}">3,000円以上</a></li>
                        </ul>
                            <li>
                                <a data-toggle="collapse" href="#menu03" aria-controls="#menu03" aria-expanded="false">配信年</a>
                            </li>
                        <ul id="menu03" class="collapse" data-parent="#accordion_menu">
                            <li><a href="{{ route('games.index', ['year' => '2021']) }}">2021年</a></li>
                            <li><a href="{{ route('games.index', ['year' => '2020']) }}">2020年</a></li>
                            <li><a href="{{ route('games.index', ['year' => '2019']) }}">2019年</a></li>
                            <li><a href="{{ route('games.index', ['year' => '2018']) }}">2018年</a></li>
                        </ul>
                    </ul>
                </div>   
            </div>

            <div class="col-lg-9">
                @foreach ($games as $game)
                <div class="row mb-4 position-relative">
                    <div class="col-lg-4">
                        <div class="games-search-image">
                            @if(app('env') == 'production')
                                <img class='card-img-top' src="{{ $game->image }}">
                            @else
                                <img class='card-img-top' src="{{ asset('storage/'.$game->image) }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 games-search-data">
                        <h4>{{ $game->name }}</h4>
                        <p>{{ $game->data }}</p>
                    </div>
                    <div class="col-lg-2 text-right">
                        <h6>{{ number_format($game->price) }}円(税込)</h6>
                        <span class="badge badge-secondary">{{ $game->category->name }}</span>
                    </div>
                    <a href="{{ route('games.show', ['id' => $game->id]) }}" class="stretched-link"></a>
                </div>
                <div class="border-bottom mb-4"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
