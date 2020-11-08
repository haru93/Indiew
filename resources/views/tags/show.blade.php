@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center mb-3 mt-5">
			<div class="col-md-6 tags-show-card">
				<div class="card">
					<div class="card-body">
						<h2 class="h4 card-title m-0">{{ $tag->name }}</h2>
						<div class="card-text text-right">
							{{ $tag->articles->count() }} 件の結果
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<h4 class='mb-2'>関連記事</h4>
		<div class="row justify-content-left image-col">	
			@foreach($tag->articles as $article)
				<div class="col-md-4 p-0">
					<a href="{{ route('articles.show', compact('article')) }}" class="title-link">
						<div class='image-wrapper'>
							<img src="{{ $article->image }}" width="100%" height="200">
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