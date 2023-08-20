<aside class="sidebar">
    <div class="top">
        <img src="{{ asset('image/logo.png') }}" alt="" class="logo">

        <div class="menu">
            <a class="item" href="{{ route('client.dashboard') }}">
                <div class="icon">
                    <iconify-icon icon="iconamoon:home-fill"></iconify-icon>
                </div>
                <p>dashboard</p>
            </a>
            <a class="item" href="{{ route('client.services') }}">
                <div class="icon">
                    <iconify-icon icon="vaadin:tools"></iconify-icon>
                </div>
                <p>services</p>
            </a>
            <a class="item" href="{{ route('client.jobs') }}">
                <div class="icon">
                    <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                </div>
                <p>your jobs</p>
            </a>
            <a class="item" href="{{ route('client.request') }}">
                <div class="icon">
                    <iconify-icon icon="material-symbols:work-history"></iconify-icon>
                </div>
                <p>job requests</p>
            </a>
            <a class="item" href="{{ route('client.workers') }}">
                <div class="icon">
                    <iconify-icon icon="mdi:worker"></iconify-icon>
                </div>
                <p>workers</p>
            </a>
            <a class="item" href="{{ route('client.tracks') }}">
                <div class="icon">
                    <iconify-icon icon="tabler:location-filled"></iconify-icon>
                </div>
                <p>track</p>
            </a>
            <a class="item" href="{{ route('client.transactions') }}">
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
