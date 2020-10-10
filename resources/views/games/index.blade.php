@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class='mt-3 mb-2'>ゲーム一覧</h2>
        @foreach ($games as $game)
        <div class="border-top"></div>
        <div class="row mt-4 mb-4 position-relative">
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
                <h3>{{ $game->name }}</h3>
                <p>{{ $game->data }}</p>
            </div>
            <div class="col-lg-2 text-right">
                <h5>{{ number_format($game->price) }}円(税込)</h5>
            </div>
            <a href="{{ route('games.show', ['id' => $game->id]) }}" class="stretched-link"></a>
        </div>
        @endforeach
    </div>
@endsection
