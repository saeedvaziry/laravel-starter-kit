@extends('layouts.auth')

@section('page-title')
{{ __('Login') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Login to Account') }}</h1>
            </div>
            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Login') }}
                </button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fa fa-google"></i> {{ __('Login with Google') }}
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fa fa-facebook-f"></i> {{ __('Login with Facebook') }}
                </a>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection