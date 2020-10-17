@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>ゲーム一覧</h2>
            </div>
        </div>
        <div class="row justify-content-end mb-3">
            <div class="col-lg-3 text-right my-auto">
                {{ $games->count() }} 件の結果
            </div>
            <div class="col-lg-3 offset-lg-6">
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
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-white" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-body text-decoration-none btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="@if(!empty($category_id)) true @else false @endif" aria-controls="collapseOne">
                                        カテゴリー
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse @if(!empty($category_id)) show @else collapsed @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
                                @foreach ($categories as $category)
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['id' => $category->id]) }}" class="text-decoration-none text-body d-block">
                                        {{ $category->name }} @if($category->id == $category_id)<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-white" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed text-body text-decoration-none btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="@if(!empty($moneyCheckKey)) true @else false @endif" aria-controls="collapseTwo">
                                        価格帯
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse @if(!empty($moneyCheckKey)) show @else collapsed @endif" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['money' => 'low']) }}" class="text-decoration-none text-body d-block">
                                        1,000円未満 @if($moneyCheckKey == 'low')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['money' => 'middle-low']) }}" class="text-decoration-none text-body d-block">
                                        1,000円以上 2,000円未満 @if($moneyCheckKey == 'middle-low')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['money' => 'middle-high']) }}" class="text-decoration-none text-body d-block">
                                        2,000円以上 3,000円未満 @if($moneyCheckKey == 'middle-high')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['money' => 'high']) }}" class="text-decoration-none text-body d-block">
                                        3,000円以上 @if($moneyCheckKey == 'high')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-white" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed text-body text-decoration-none btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="@if(!empty($yearCheckKey)) true @else false @endif" aria-controls="collapseThree">
                                    配信年
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse @if(!empty($yearCheckKey)) show @else collapsed @endif" aria-labelledby="headingThree" data-parent="#accordionExample">
                                {{-- <div class="card-body"><a href="{{ route('games.index', ['year' => '2021']) }}" class="text-decoration-none text-body d-block">2021年</a></div> --}}
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['year' => '2020']) }}" class="text-decoration-none text-body d-block">
                                        2020年 @if($yearCheckKey == '2020')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['year' => '2019']) }}" class="text-decoration-none text-body d-block">
                                        2019年 @if($yearCheckKey == '2019')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('games.index', ['year' => '2018']) }}" class="text-decoration-none text-body d-block">
                                        2018年 @if($yearCheckKey == '2018')<i class="fas fa-check ut_fc-skyblue fa-lg ml-2"></i>@endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                @foreach ($games as $game)
                <div class="row mb-4 position-relative">
                    <div class="col-lg-4">
                        <div class="games-search-image">
                            <img class='card-img-top' src="{{ $game->image }}">
                        </div>
                    </div>
                    <div class="col-lg-6 games-search-data">
                        <h4>{{ $game->name }}</h4>
                        <p>{{ $game->data }}</p>
                    </div>
                    <div class="col-lg-2 text-right">
                        <h6>{{ number_format($game->price) }}円(税込)</h6>
                        @foreach ($game->categories as $category)
                        <span class="badge badge-secondary">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('games.show', ['id' => $game->id]) }}" class="stretched-link"></a>
                </div>
                <div class="border-bottom mb-4"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
