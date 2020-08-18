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
                            @if(!empty($article->image))
                                <div class='image-wrapper'><img class='view-image' src="{{ asset('storage/images/'.$article->image) }}"></div>
                            @else
                                <div class='image-wrapper'><img class='view-image' src="{{ asset('images/dummy.png') }}"></div>
                            @endif
                            <p class="card-text">{{ $article->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection