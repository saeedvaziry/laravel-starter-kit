@extends('layouts.auth')

@section('page-title')
{{ __('Reset Password') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Reset Password') }}</h1>
            </div>
            <form class="user" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

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
                    {{ __('Reset Password') }}
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">{{ __('Login to Account') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection