@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.manager.index' ? route('dashboard.manager.index') : '' }}">Manager</a></li>
    @yield('manager_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('manager_content')

@endsection
