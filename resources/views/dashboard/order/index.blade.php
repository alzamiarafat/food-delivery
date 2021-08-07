@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.order.index' ? route('dashboard.order.index') : '' }}">Order</a></li>
    @yield('order_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('order_content')

@endsection
