<div class="container-fluid ut_bg-skyblue">
	<div class="row">
		<div class="col">
			<div class="p-2">
				<a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" height="40"></a>
			</div>
		</div>
		<div class="col text-center">
			<div class="p-2">
				<a href="{{ route('games.index') }}" class='btn btn-secondary rounded-pill w-100'>ゲームを探す</a>
			</div>
		</div>
		<div class="col text-center">
			@auth
			<div class="p-2 d-inline-block">
				<a href="{{ route('articles.create') }}" class='btn btn-secondary rounded-pill'>景色を投稿する</a>
			</div>
			<div class="p-2 d-inline-block">
				<a href="{{ route('logout') }}" class='btn btn-secondary rounded-pill'
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('messages.Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
			@endauth
			@guest
			<div class="p-2 d-inline-block">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<input type="hidden" id="email" name="email" value="test@test.com">
					<input type="hidden" id="password" name="password" value="password">
					<button type="submit" class="btn btn-success rounded-pill">かんたんログイン</button>
				</form>
			</div>
			<div class="p-2 d-inline-block">
				<a href="{{ route('login') }}" class='btn btn-secondary rounded-pill'>{{ __('messages.Login') }}</a>
			</div>
			<div class="p-2 d-inline-block">
				<a href="{{ route('register') }}" class='btn btn-secondary rounded-pill'>{{ __('messages.Register') }}</a>	
			</div>
			@endguest
		</div>
	</div>
</div>