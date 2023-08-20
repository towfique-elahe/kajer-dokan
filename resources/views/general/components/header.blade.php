<header class="container-fluid">
    <div class="left">
        <img src="{{ asset('image/logo.png') }}" alt="" class="logo">
        <ul class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
    <a href="{{ route('login') }}" class="action_btn">
        <ion-icon name="person"></ion-icon> Login
    </a>
    <div class="dropdown mobile-nav none">
        <ion-icon name="menu" onclick="dropDown()" class="menu-button"></ion-icon>
        <div id="menuContent" class="menu-content">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</header>
