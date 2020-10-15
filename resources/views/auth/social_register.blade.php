@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
			<div class="card text-center">
				<div class="card-body">
					<p class="text-muted">Indiew</p>
					<div class="m-3">
						<img src="{{ asset('logo.png') }}" height="80">
					</div>
					<div class="row">
						<div class="col">
							@if($provider == 'google')
							<i class="fab fa-google text-danger fa-3x py-4"></i>
							<p class="text-center h3 mt-2">Googleアカウントで</p>
							@else
							<i class="fab fa-twitter text-info fa-3x py-4"></i>
							<p class="text-center h3 mt-2">Twitterアカウントで</p>
							@endif
							<p class="text-center h2 p-4">{{ __('messages.Register') }}</p>
						</div>
					</div>
					<form method="POST" action="{{ route('register.{provider}', ['provider' => $provider]) }}">
						@csrf
						<input type="hidden" name="token" value="{{ $token }}">
						<div class="form-group row justify-content-center">
							<div class="col-10 col-md-8">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="名前を入力">
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<div class="col-10 col-md-8">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" disabled>
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<div class="col-10 col-md-8">
								<button type="submit" class="btn btn-success mt-4">
									{{ __('messages.Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
