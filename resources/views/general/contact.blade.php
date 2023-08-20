@extends('general.layout.generalLayout')

@section('title', '| Contact')

@section('main')
    <section id="contact">
        @include('general.components.header')

        <div class="container main">
            <div class="col">
                <h1 class="heading">Contact <span class="theme_clr">{{ env('APP_NAME') }}</span></h1>
                <div class="contact">
                    <dl>
                        <dt>Phone:</dt>
                        <dd>
                            <a href="tel:+8801843318995">
                                +8801843-318995
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Email:</dt>
                        <dd>
                            <a href="mailto:anyfixgg@gmail.com">
                                anyfixgg@gmail.com
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Address:</dt>
                        <dd>
                            <a href="javascript:void()">
                                Star Building, Agrabadh,<br>
                                Chattogram - 4100
                            </a>
                        </dd>
                    </dl>
                </div>
                <hr>
                <div class="social">
                    <a class="link" href="javascript:void()">
                        <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                    </a>
                    <a class="link" href="javascript:void()">
                        <iconify-icon icon="gg:facebook"></iconify-icon>
                    </a>
                    <a class="link" href="javascript:void()">
                        <iconify-icon icon="mdi:twitter"></iconify-icon>
                    </a>
                    <a class="link" href="javascript:void()">
                        <iconify-icon icon="mdi:instagram"></iconify-icon>
                    </a>
                </div>
            </div>
            <div class="col">
                <img class="contact_img" src="{{ asset('image/contact_us.svg') }}" alt="">
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    @include('general.components.footer')
@endsection
