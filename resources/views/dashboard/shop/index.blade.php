@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.shop.index' ? route('dashboard.shop.index') : '' }}">Shop</a></li>
    @yield('shop_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('shop_content')

@endsection
