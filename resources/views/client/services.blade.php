@extends('client.layout.clientLayout')

@section('title', '| Services')
@section('pageTitle', 'Services')

@section('main')
    <main id="cServices">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- cleaning service -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="healthicons:cleaning"></iconify-icon>
                        </div>
                        <p>cleaning</p>
                    </div>
                    <div class="card_body">
                        <img src="{{ asset('image/cleaning.jpg') }}" alt="" class="cover">

                        <p class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, at quis qui debitis
                            necessitatibus dolores fugiat explicabo corporis impedit asperiores mollitia ex
                            neque aspernatur consequuntur provident eos illo obcaecati deleniti!
                        </p>

                        <div class="info">
                            <p class="price">৳ 1500</p>
                            <p>
                                <span class="theme_clr">{{ count($cleaning) }}</span> workers
                            </p>
                            <a href="{{ route('client.workers') }}" class="button">
                                See Workers
                            </a>
                        </div>
                    </div>
                </div>

                <!-- electrical service -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="material-symbols:electrical-services"></iconify-icon>
                        </div>
                        <p>electrical</p>
                    </div>
                    <div class="card_body">
                        <img src="{{ asset('image/eletrical.jpg') }}" alt="" class="cover">

                        <p class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, at quis qui debitis
                            necessitatibus dolores fugiat explicabo corporis impedit asperiores mollitia ex
                            neque aspernatur consequuntur provident eos illo obcaecati deleniti!
                        </p>

                        <div class="info">
                            <p class="price">৳ 1500</p>
                            <p>
                                <span class="theme_clr">{{ count($electrical) }}</span> workers
                            </p>
                            <a href="{{ route('client.workers') }}" class="button">
                                See Workers
                            </a>
                        </div>
                    </div>
                </div>

                <!-- plumbing service -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="material-symbols:plumbing"></iconify-icon>
                        </div>
                        <p>plumbing</p>
                    </div>
                    <div class="card_body">
                        <img src="{{ asset('image/plumbing.jpg') }}" alt="" class="cover">

                        <p class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, at quis qui debitis
                            necessitatibus dolores fugiat explicabo corporis impedit asperiores mollitia ex
                            neque aspernatur consequuntur provident eos illo obcaecati deleniti!
                        </p>

                        <div class="info">
                            <p class="price">৳ 1500</p>
                            <p>
                                <span class="theme_clr">{{ count($plumbing) }}</span> workers
                            </p>
                            <a href="{{ route('client.workers') }}" class="button">
                                See Workers
                            </a>
                        </div>
                    </div>
                </div>

                <!-- pest control service -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="ic:round-pest-control"></iconify-icon>
                        </div>
                        <p>pest control</p>
                    </div>
                    <div class="card_body">
                        <img src="{{ asset('image/pest_control.jpg') }}" alt="" class="cover">

                        <p class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, at quis qui debitis
                            necessitatibus dolores fugiat explicabo corporis impedit asperiores mollitia ex
                            neque aspernatur consequuntur provident eos illo obcaecati deleniti!
                        </p>

                        <div class="info">
                            <p class="price">৳ 1500</p>
                            <p>
                                <span class="theme_clr">{{ count($pest_control) }}</span> workers
                            </p>
                            <a href="{{ route('client.workers') }}" class="button">
                                See Workers
                            </a>
                        </div>
                    </div>
                </div>

                <!-- auto care service -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mingcute:car-fill"></iconify-icon>
                        </div>
                        <p>auto care</p>
                    </div>
                    <div class="card_body">
                        <img src="{{ asset('image/auto_care.jpg') }}" alt="" class="cover">

                        <p class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, at quis qui debitis
                            necessitatibus dolores fugiat explicabo corporis impedit asperiores mollitia ex
                            neque aspernatur consequuntur provident eos illo obcaecati deleniti!
                        </p>

                        <div class="info">
                            <p class="price">৳ 1500</p>
                            <p>
                                <span class="theme_clr">{{ count($auto_care) }}</span> workers
                            </p>
                            <a href="{{ route('client.workers') }}" class="button">
                                See Workers
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
