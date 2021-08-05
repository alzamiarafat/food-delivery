@extends('user.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'user.order.index' ? route('user.order.index') : '' }}">Order</a></li>
    @yield('order_breadcrumbs')
@endsection

@section('user_content')

    @yield('order_content')

@endsection
