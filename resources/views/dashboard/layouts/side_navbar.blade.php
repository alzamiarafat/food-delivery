@php $routeName = Route::current()->getName();
@endphp
<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="{{route('home')}}" class="simple-text logo-normal"><span class="material-icons">restaurant</span> alesha food</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::current()->getName() == 'dashboard./' ? 'active' : '' }}  ">
                <a class="nav-link" href="{{route('dashboard./')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ $routeName == 'dashboard.shop.index' || $routeName == 'dashboard.shop.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.shop.index')}}">
                    <i class="material-icons">store</i>
                    <p>Shop</p>
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'dashboard.manager.index' || $routeName == 'dashboard.manager.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.manager.index')}}">
                    <i class="material-icons">manage_accounts</i>
                    <p>Manager</p>
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'dashboard.user.index' || $routeName == 'dashboard.user.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.user.index')}}">
                    <i class="material-icons">person</i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item {{ $routeName == 'dashboard.category.index' || $routeName == 'dashboard.category.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.category.index')}}">
                    <i class="material-icons">category</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item {{ $routeName == 'dashboard.item.index' || $routeName == 'dashboard.item.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.item.index')}}">
                    <i class="material-icons">fastfood</i>
                    <p>Item</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">reorder</i>
                    <p>Orders</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">local_offer</i>
                    <p>Offers</p>
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
