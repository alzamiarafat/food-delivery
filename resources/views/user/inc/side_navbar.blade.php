@php $routeName = Route::current()->getName();
@endphp
<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="{{route('home')}}" class="simple-text logo-normal"><span class="material-icons">restaurant</span> alesha food</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::current()->getName() == 'user.panel' ? 'active' : '' }} ">
                <a class="nav-link" href="{{route('user.panel')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'user.order.index' ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('user.order.index') }}">
                    <i class="material-icons">reorder</i>
                    <p>Order</p>
                </a>
            </li>
            <li class="nav-item {{ $routeName == 'dashboard.offer.index' || $routeName == 'dashboard.offer.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.offer.index')}}">
                    <i class="material-icons">local_offer</i>
                    <p>Offer</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
        </ul>
    </div>
</div>
