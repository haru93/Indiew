@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <p class="text-muted">Indiew</p>
                    <div class="m-3">
                        <img src="{{ asset('logo.png') }}" height="80">
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-center h2 p-4">{{ __('messages.Register') }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row justify-content-center mt-0 mb-0">
                            <div class="col-10 col-md-8">
                                <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-danger w-100">
                                    <i class="fab fa-google mr-2"></i>Googleアカウントで登録
                                </a>
                            </div>
                        </div>
                        <div class="row m-4">
                            <div class="col">
                                <p class="text-secondary m-0">- または -</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('messages.Name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('messages.E-Mail Address') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('messages.Password') }}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-10 col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('messages.Confirm Password') }}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <button type="submit" class="btn btn-success mt-4">
                                    {{ __('messages.Register') }}
                                </button>
                            </div>
                        </div>
                            {{-- <div class="form-group mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('login.{provider}', ['provider' => 'twitter']) }}" class="btn btn-info text-white w-75">
                                        <i class="fab fa-twitter mr-1"></i>Twitterでログイン
                                    </a>
                                </div>
                            </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection