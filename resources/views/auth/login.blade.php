@extends('auth.layouts.app')

@section('content')
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-5 col-12">
            <div id="auth-left" class="p-4 shadow-sm rounded bg-white">
                <div class="auth-logo text-center mb-4">
                    <a href="index.html"><img src="{{ asset('assets/compiled/svg/logo.svg') }}" alt="Logo" class="img-fluid"></a>
                </div>
                <h1 class="auth-title text-center mb-3">Log in</h1>
                <p class="auth-subtitle mb-4 text-center">Log in with your data that you entered during registration.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </form>

                <div class="text-center mt-4">
                    <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                            class="font-bold">Sign up</a>.</p>
                    <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
