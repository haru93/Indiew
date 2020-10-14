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
                            <p class="text-center h2 p-4">{{ __('messages.Login') }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row justify-content-center mt-0 mb-0">
                            <div class="col-10 col-md-8">
                                <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-danger w-100">
                                    <i class="fab fa-google mr-2"></i>Googleでログイン
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('messages.E-Mail Address') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-10 col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('messages.Password') }}">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row justify-content-center m-0">
                                <div class="col-10 col-md-8">
                                    <button type="submit" class="btn btn-success m-4">
                                        {{ __('messages.Login') }}
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
                            <div class="form-group row justify-content-center">
                                <div class="col-10 col-md-8">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-decoration-none pt-0" href="{{ route('password.request') }}">
                                    {{ __('messages.Forgot Your Password?') }}
                                </a>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
