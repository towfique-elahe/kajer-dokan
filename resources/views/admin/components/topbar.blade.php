<section class="topbar">
    <h1>@yield('pageTitle')</h1>

    <a class="user" href="{{ route('admin.profile') }}">
        <img src="{{ asset('image/user.jpg') }}" alt="">
        <p>{{ Auth::user()->name }}</p>
    </a>
</section>
