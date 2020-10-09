<nav class="navbar navbar-expand-md navbar-light shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ url('/') }}">
			@if(app('env') == 'production')
				<img class='navbar-logo' src="{{ secure_asset('logo.png') }}">
			@else
				<img class='navbar-logo' src="{{ asset('logo.png') }}">
			@endif
			{{ config('app.name', 'Indiew') }}
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<form method="GET" action="{{ route('articles.index') }}">
						<div class="input-group w-100">
							<input type="text" class="form-control" name="search" placeholder="キーワードで探す">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
							</span>
						</div>
					</form>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('games.index') }}">登録ゲーム一覧</a>
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@auth
				<li class="nav-item">
					<a href="{{ route('articles.create') }}" class='nav-link'>景色を投稿する</a>
				</li>
				@endauth

				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
						</li>
					@endif
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								{{ __('messages.Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
				@endguest
				@guest
					<li class="nav-item">
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<input type="hidden" id="email" name="email" value="user@user.com">
							<input type="hidden" id="password" name="password" value="password">
							<button type="submit" class="btn btn-primary ml-3 mr-3">かんたんログイン</button>
						</form>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>