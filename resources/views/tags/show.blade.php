@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class='mt-3 mb-2'>タグ</h2>
		<div class="row justify-content-center mb-3">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h2 class="h4 card-title m-0">{{ $tag->name }}</h2>
						<div class="card-text text-right">
							{{ $tag->articles->count() }}件
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<h4 class='mb-2'>関連記事</h4>
		<div class="row justify-content-left image-col">	
			@foreach($tag->articles as $article)
				<div class="col-md-4">
					<a href="{{ route('articles.show', compact('article')) }}" class="title-link">
						<div class='image-wrapper'>
							@if(app('env') == 'production')
								<img src="{{ $article->image }}">
							@else
								<img src="{{ asset('storage/'.$article->image) }}">
							@endif
							<div class="mask">
								<div class="caption-title">{{ $article->title }}</div>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection