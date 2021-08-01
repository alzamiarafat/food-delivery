@extends('auth.index')

@section('title','Reset Password')

@section('form_header','Reset Password')

@section('form_content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
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
        <br>

        <div class="form-group row mb-0">
            <div class="col-md-12">
                <button type="submit" class="right-item btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>

@endsection
