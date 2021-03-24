@extends('admin.layouts.login-master')

@section('title')
<title>Admin Login</title>
@endsection
@section('content')

<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="{{ asset('temp/images/icon/logo.png') }}" alt="CoolAdmin">
            </a>
        </div>

        <div class="login-form">

            <form method="POST" action="{{ url('/admin/login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login-checkbox">

                    <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                    </label>

                    <label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </label>



                </div>

                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Login') }}</button>

                <div class="social-login-content">
                    <div class="social-button">
                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook(Later)</button>
                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter (Later)</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
@endsection