<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#category">category</a>
        <a href="#items">items</a>
        <a href="#review">review</a>
        <a href="#contacts">contacts</a>
        @auth
            <a href="{{auth()->user()->type == 'user' ? route(auth()->user()->type.'.panel') : route(auth()->user()->type.'./')}}"><i class="fa fa-user"></i> {{auth()->user()->username}}</a>
        @else
            <a href="{{route('login')}}"><i class="fa fa-user"></i>{{ __(' Login') }}</a>
        @endauth

        <a href=""><i class="fa fa-shopping-cart"></i></a>
    </nav>

</header>