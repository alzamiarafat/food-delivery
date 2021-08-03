@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.item.index' ? route('dashboard.item.index') : '' }}">Item</a></li>
    @yield('item_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('item_content')

@endsection
