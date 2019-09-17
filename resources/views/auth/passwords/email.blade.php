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
            <form class="user" method="POST" action="{{ route('password.email') }}">
                @csrf
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Send Password Reset Link') }}
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