@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ゲーム一覧</div>
                <div class="card-body">
                    <ul>
                        @foreach ($games as $game)
                        <li><a href="{{ route('games.show', ['id' => $game->id]) }}">{{ $game->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
