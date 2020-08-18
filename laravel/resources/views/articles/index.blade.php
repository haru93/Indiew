@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        {{ $article->title }}
                    </div>
                    <div class="card-body">
						<h5 class="card-title">{{ $article->body }}</h5>
                        <p class="card-text">{{ $article->image }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection