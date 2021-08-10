@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.branch.index' ? route('dashboard.branch.index') : '' }}">Branch</a></li>
    @yield('branch_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('branch_content')

@endsection
