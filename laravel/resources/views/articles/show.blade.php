@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(!empty($article->image))
                    <div class='image-wrapper'><img class='img-fluid' src="{{ asset('storage/images/'.$article->image) }}"></div>
                @else
                    <div class='image-wrapper'><img class='img-fluid' src="{{ asset('images/dummy.png') }}"></div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection