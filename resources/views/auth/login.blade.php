@extends('auth.index')

@section('title','Login')

@section('form_header','Login')

@section('form_content')
    <form method="POST" action="{{ route('login') }}">
        <center>
            <img src="images/avatar.svg" width="100" height="100">
        </center>
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        @if (Route::has('password.request'))
            <div class="right-item">
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        @endif

        <div class="form-group row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <br>

        <div class="form-group row mb-0">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>

            @if (Route::has('register'))
                <span class="text-center">  Don't have an account yet?<a href="{{ route('register') }}">{{ __(' Register') }}</a></span>
            @endif
        </div>
    </form>
@endsection
