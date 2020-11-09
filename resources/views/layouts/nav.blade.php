<div class="container-fluid bg-primary">
	<div class="row">

		<!-- 左側 -->
		<div class="col">
			<div class="p-2">
				<a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" height="40"></a>
			</div>
		</div>

		<!-- 中央 -->
		<div class="col text-center">
			<div class="p-2">
				<a href="{{ route('games.index') }}" class='btn btn-secondary rounded-pill w-100'><i class="fas fa-gamepad mr-2"></i>ゲームを探す</a>
			</div>
		</div>

		<!-- 右側 -->
		<div class="col">
			<nav class="navbar navbar-expand-xl navbar-light p-0">
				@auth
				<h6 class="my-auto ml-2">{{ Auth::user()->name }}</h6>
				@endauth
				<button class="navbar-toggler my-2 ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-right">
						@auth
						<li class="nav-item active">
							<div class="p-2 d-inline-block">
								<a href="{{ route('articles.create') }}" class='btn btn-secondary rounded-pill'>景色を投稿する</a>
							</div>
						</li>
						<li class="nav-item">
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
						</li>
						@endauth
						@guest
						<li class="nav-item">
							<div class="p-2 d-inline-block">
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<input type="hidden" id="email" name="email" value="test@test.com">
									<input type="hidden" id="password" name="password" value="password">
									<button type="submit" class="btn btn-success rounded-pill">かんたんログイン</button>
								</form>
							</div>
						</li>
						<li class="nav-item">
							<div class="p-2 d-inline-block">
								<a href="{{ route('login') }}" class='btn btn-secondary rounded-pill'>{{ __('messages.Login') }}</a>
							</div>
						</li>
						<li class="nav-item">
							<div class="p-2 d-inline-block">
								<a href="{{ route('register') }}" class='btn btn-secondary rounded-pill'>{{ __('messages.Register') }}</a>	
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>