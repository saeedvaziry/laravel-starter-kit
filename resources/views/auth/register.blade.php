@extends('layouts.auth')

@section('page-title')
{{ __('Create an Account') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Create an Account!') }}</h1>
            </div>
            <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" value="{{ old('name') }}" name="name" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Register') }}
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
                <a class="small" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection