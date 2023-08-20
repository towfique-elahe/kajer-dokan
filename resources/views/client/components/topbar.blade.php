<section class="topbar">
    <h1>@yield('pageTitle')</h1>

    <a class="user" href="{{ route('client.profile.view') }}">
        <img src="{{ !empty(Auth::user()->image) ? url('upload/' . Auth::user()->image) : url('image/user.jpg') }}"
            alt="">
        <p>{{ Auth::user()->name }}</p>
    </a>
</section>
