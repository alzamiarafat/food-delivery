@extends('auth.index')

@section('title','Registration')

@section('form_header','Registration')

@section('form_content')
    <form method="POST" action="{{ route('register') }}">
        <center>
            <img src="images/avatar.svg" width="100" height="100">
        </center>
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-12 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <br>

        <div class="form-group row mb-0">
            <div class="col-md-12">
                <button type="submit" class="right-item btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
            @if (Route::has('login'))
                <span class="text-center">  Already have an Account<a href="{{ route('login') }}">{{ __(' Login') }}</a></span>
            @endif
        </div>
    </form>
@endsection
