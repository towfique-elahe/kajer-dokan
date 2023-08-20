@extends('general.layout.generalLayout')

@section('title', '| Home')

@section('main')
    <section id="hero">
        @include('general.components.header')

        <div class="container main">
            <div class="left">
                <h1>Hire <span class="theme_clr">Experts</span> &<br><b>Get Your Job Done</b></h1>
                <div class="buttons">
                    <a href="tel:+8801400492967" class="button">
                        <ion-icon name="call"></ion-icon> Call Now
                    </a>
                    <a href="{{ route('register') }}" class="action_btn">
                        <iconify-icon icon="mdi:register"></iconify-icon> Register Now
                    </a>
                </div>
            </div>
            <div class="right">
                <img src="{{ asset('image/car_service.svg') }}" alt="" class="img1">
                <img src="{{ asset('image/ac_service.svg') }}" alt="" class="img2">
                <img src="{{ asset('image/cleaning_service_1.svg') }}" alt="" class="img3">
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    <section id="categories">
        <div class="container">
            <p class="sub_heading">
                categories
            </p>
            <h3 class="heading">
                popular categories
            </h3>
            <div class="categories">
                <div class="category">
                    <iconify-icon icon="healthicons:cleaning"></iconify-icon>
                    <p>Cleaning</p>
                </div>
                <div class="category">
                    <iconify-icon icon="material-symbols:electrical-services"></iconify-icon>
                    <p>Electrical</p>
                </div>
                <div class="category">
                    <iconify-icon icon="material-symbols:plumbing"></iconify-icon>
                    <p>Plumbing</p>
                </div>
                <div class="category">
                    <iconify-icon icon="ic:round-pest-control"></iconify-icon>
                    <p>Pest Control</p>
                </div>
                <div class="category">
                    <iconify-icon icon="mingcute:car-fill"></iconify-icon>
                    <p>Auto Care</p>
                </div>
            </div>
            <a href="{{ route('login') }}" class="action_btn">
                <ion-icon name="people"></ion-icon> Hire Now
            </a>
        </div>
    </section>

    <div class="sec_divider"></div>

    <section id="steps">
        <div class="container">
            <p class="sub_heading">
                steps
            </p>
            <h3 class="heading">
                how it works
            </h3>
            <div class="steps">
                <div class="step s1">
                    <p class="num n1">01</p>
                    <div class="icon">
                        <iconify-icon icon="mingcute:task-2-fill"></iconify-icon>
                    </div>
                    <div>
                        <h4>describe your task</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="step s2">
                    <p class="num n2">02</p>
                    <div class="icon">
                        <iconify-icon icon="solar:user-bold"></iconify-icon>
                    </div>
                    <div>
                        <h4>choose a tasker</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="step s3">
                    <p class="num n3">03</p>
                    <div class="icon">
                        <iconify-icon icon="bxs:bulb"></iconify-icon>
                    </div>
                    <div>
                        <h4>live smarter</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    <section id="vendor">
        <div class="container">
            <p class="sub_heading">
                vendor
            </p>
            <h3 class="heading">
                featured providers
            </h3>
            <div class="providers">
                <div class="provider">
                    <div class="head">
                        <h4 class="p_name">jimmy polo</h4>
                        <p class="p_cat">Plumber</p>
                        <p class="p_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad porro ratione
                            iste consectetur voluptatem illum unde incidunt cupiditate asperiores maxime!</p>
                    </div>
                    <div class="body">
                        <img src="{{ asset('image/user.jpg') }}" alt="" class="p_img">
                    </div>
                    <div class="footer">
                        <a href="{{ route('login') }}" class="p_quote">hire</a>
                    </div>
                </div>
                <div class="provider">
                    <div class="head">
                        <h4 class="p_name">jimmy polo</h4>
                        <p class="p_cat">Plumber</p>
                        <p class="p_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad porro ratione
                            iste consectetur voluptatem illum unde incidunt cupiditate asperiores maxime!</p>
                    </div>
                    <div class="body">
                        <img src="{{ asset('image/user.jpg') }}" alt="" class="p_img">
                    </div>
                    <div class="footer">
                        <a href="{{ route('login') }}" class="p_quote">hire</a>
                    </div>
                </div>
                <div class="provider">
                    <div class="head">
                        <h4 class="p_name">jimmy polo</h4>
                        <p class="p_cat">Plumber</p>
                        <p class="p_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad porro ratione
                            iste consectetur voluptatem illum unde incidunt cupiditate asperiores maxime!</p>
                    </div>
                    <div class="body">
                        <img src="{{ asset('image/user.jpg') }}" alt="" class="p_img">
                    </div>
                    <div class="footer">
                        <a href="{{ route('login') }}" class="p_quote">hire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="choose">
        <div class="container">
            <div class="col">
                <p class="sub_heading">
                    choose
                </p>
                <h3 class="heading">
                    why choose us
                </h3>
                <p class="desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi commodi tempora a vel debitis,
                    repudiandae doloribus harum fugit iste fuga.
                </p>
                <div class="reasons">
                    <div class="reason">
                        <div class="icon">
                            <iconify-icon icon="bi:people-fill"></iconify-icon>
                        </div>
                        <div>
                            <h4>meet our experts</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis commodi vero, totam
                                aliquid error nisi.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="icon">
                            <iconify-icon icon="fluent:arrow-growth-20-filled"></iconify-icon>
                        </div>
                        <div>
                            <h4>grow your business</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis commodi vero, totam
                                aliquid error nisi.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="icon">
                            <iconify-icon icon="ic:round-phone"></iconify-icon>
                        </div>
                        <div>
                            <h4>24/7 support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis commodi vero, totam
                                aliquid error nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="{{ asset('image/why_choose_us.svg') }}" alt="" class="c_img">
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    <section id="statics">
        <div class="container">
            <div class="col">
                <p class="sub_heading">
                    statics
                </p>
                <h3 class="heading">
                    trusted by thousands of people all over the world
                </h3>
                <p class="desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores provident quas, dicta iure non
                    facere recusandae labore animi neque rerum reiciendis voluptatum at quae deleniti rem culpa eum.
                    Nostrum, reprehenderit!
                </p>
            </div>
            <div class="col">
                <div class="box">
                    <p class="info">
                        Providers
                    </p>
                    <p class="count">
                        36
                    </p>
                </div>
                <div class="box">
                    <p class="info">
                        Jobs
                    </p>
                    <p class="count">
                        108
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <p class="info">
                        Customer
                    </p>
                    <p class="count">
                        89
                    </p>
                </div>
                <div class="box">
                    <p class="info">
                        Categories
                    </p>
                    <p class="count">
                        59
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    @include('general.components.footer')

    <div class="bg bg1"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="bg bg4"></div>
    <div class="bg bg5"></div>
    <div class="bg bg6"></div>
@endsection
