<aside class="sidebar">
    <div class="top">
        <img src="{{ asset('image/logo.png') }}" alt="" class="logo">

        <div class="menu">
            <a class="item" href="{{ route('admin.dashboard') }}">
                <div class="icon">
                    <iconify-icon icon="iconamoon:home-fill"></iconify-icon>
                </div>
                <p>dashboard</p>
            </a>
            <a class="item" href="{{ route('admin.clients') }}">
                <div class="icon">
                    <iconify-icon icon="mdi:users"></iconify-icon>
                </div>
                <p>clients</p>
            </a>
            <a class="item" href="{{ route('admin.workers') }}">
                <div class="icon">
                    <iconify-icon icon="fa6-solid:users-gear"></iconify-icon>
                </div>
                <p>workers</p>
            </a>
            <a class="item" href="{{ route('admin.transactions') }}">
                <div class="icon">
                    <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                </div>
                <p>transactions</p>
            </a>
        </div>
    </div>

    <a class="item" href="{{ route('logout') }}">
        <div class="icon">
            <iconify-icon icon="majesticons:logout"></iconify-icon>
        </div>
        <p>logout</p>
    </a>
</aside>
