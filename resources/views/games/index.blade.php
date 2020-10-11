@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col">
                <h2>ゲーム一覧</h2>
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
                            {{-- <li>
                                <a data-toggle="collapse" href="#menu02" aria-controls="#menu02" aria-expanded="false">価格</a>
                            </li>
                        <ul id="menu02" class="collapse" data-parent="#accordion_menu">
                            <li><a href="#">リンクサブメニュー2-1</a></li>
                            <li><a href="#">リンクサブメニュー2-2</a></li>
                            <li><a href="#">リンクサブメニュー2-3</a></li>
                        </ul>
                            <li>
                                <a data-toggle="collapse" href="#menu03" aria-controls="#menu03" aria-expanded="false">配信年</a>
                            </li>
                        <ul id="menu03" class="collapse" data-parent="#accordion_menu">
                            <li><a href="#">リンクサブメニュー3-1</a></li>
                            <li><a href="#">リンクサブメニュー3-2</a></li>
                            <li><a href="#">リンクサブメニュー3-3</a></li>
                        </ul> --}}
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
                    </div>
                    <a href="{{ route('games.show', ['id' => $game->id]) }}" class="stretched-link"></a>
                </div>
                <div class="border-bottom mb-4"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
