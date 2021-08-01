@extends('layouts.app')

@section('content')
    <img class="wave" src="images/wave.png">
    <div class="container">
        <div class="img">
            <img src="images/bg.svg">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>@yield('form_header')</h3></div>
                    <div class="card-body" >
                        @yield('form_content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
