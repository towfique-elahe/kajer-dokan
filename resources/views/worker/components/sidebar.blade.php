<aside class="sidebar">
    <div class="top">
        <img src="{{ asset('image/logo.png') }}" alt="" class="logo">

        <div class="menu">
            <a class="item" href="{{ route('worker.dashboard') }}">
                <div class="icon">
                    <iconify-icon icon="iconamoon:home-fill"></iconify-icon>
                </div>
                <p>dashboard</p>
            </a>
            <a class="item" href="{{ route('worker.resume') }}">
                <div class="icon">
                    <iconify-icon icon="mdi:resume"></iconify-icon>
                </div>
                <p>resume</p>
            </a>
            <a class="item" href="{{ route('worker.available-jobs') }}">
                <div class="icon">
                    <iconify-icon icon="mdi:work"></iconify-icon>
                </div>
                <p>available jobs</p>
            </a>
            <a class="item" href="{{ route('worker.track.jobs') }}">
                <div class="icon">
                    <iconify-icon icon="material-symbols:work-alert-rounded"></iconify-icon>
                </div>
                <p>jobs progress</p>
            </a>
            <a class="item" href="{{ route('worker.completed-jobs') }}">
                <div class="icon">
                    <iconify-icon icon="fluent-mdl2:completed-solid"></iconify-icon>
                </div>
                <p>completed jobs</p>
            </a>
            <a class="item" href="{{ route('worker.transactions') }}">
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
