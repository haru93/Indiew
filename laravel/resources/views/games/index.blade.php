@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class='mt-3 mb-2'>ゲーム一覧</h2>
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <ul>
                    @foreach ($games as $game)
                        <li><a href="{{ route('games.show', ['id' => $game->id]) }}">{{ $game->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
