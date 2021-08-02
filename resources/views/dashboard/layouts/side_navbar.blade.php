<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="{{route('home')}}" class="simple-text logo-normal"><span class="material-icons">restaurant</span> food</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::current()->getName() == 'dashboard./' ? 'active' : '' }}  ">
                <a class="nav-link" href="{{route('dashboard./')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'dashboard.shop.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard.shop.index')}}">
                    <i class="material-icons">store</i>
                    <p>Shops</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">manage_accounts</i>
                    <p>Manager</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">category</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">fastfood</i>
                    <p>Product</p>
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
