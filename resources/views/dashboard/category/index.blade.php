@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.category.index' ? route('dashboard.category.index') : '' }}">Category</a></li>
    @yield('category_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('category_content')

@endsection
