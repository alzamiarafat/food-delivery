@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.shop.index' ? route('dashboard.shop.index') : '' }}">User</a></li>
    @yield('user_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('user_content')

@endsection
