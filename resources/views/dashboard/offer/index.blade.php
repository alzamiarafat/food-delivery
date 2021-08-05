@extends('dashboard.index')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard.offer.index' ? route('dashboard.offer.index') : '' }}">Offer</a></li>
    @yield('offer_breadcrumbs')
@endsection

@section('dashboard_content')

    @yield('offer_content')

@endsection
