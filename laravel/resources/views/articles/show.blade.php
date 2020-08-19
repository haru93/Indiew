@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(!empty($article->image))
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ secure_asset('storage/images/'.$article->image) }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('storage/images/'.$article->image) }}"></div>
                    @endif
                @else
                    @if(app('env') == 'production')
                        <div class='image-wrapper'><img class='img-fluid' src="{{ secure_asset('images/dummy.png') }}"></div>
                    @else
                        <div class='image-wrapper'><img class='img-fluid' src="{{ asset('images/dummy.png') }}"></div>
                    @endif
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