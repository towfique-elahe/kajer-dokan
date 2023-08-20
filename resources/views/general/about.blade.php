@extends('general.layout.generalLayout')

@section('title', '| About')

@section('main')
    <section id="about">
        @include('general.components.header')

        <div class="container main">
            <h1 class="heading">About <span class="theme_clr">{{ env('APP_NAME') }}</span></h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum voluptas ipsum veritatis minima rerum,
                amet est molestias expedita officia consequuntur nobis laudantium quasi quisquam alias sint eligendi
                adipisci. Veniam, molestias numquam voluptatem sunt quasi quis aliquam saepe perferendis distinctio
                dignissimos a tenetur esse sequi voluptas maiores repellendus dicta accusamus enim, deleniti adipisci
                expedita corporis voluptate. Incidunt adipisci reprehenderit est tempora impedit. Aliquam accusantium
                eius ducimus nisi, unde, veniam aspernatur autem quia nobis corrupti repellat sunt ullam rem ipsum
                quidem necessitatibus tenetur delectus enim sed optio. Sint exercitationem ad porro odit repellendus
                repudiandae minima non asperiores, corporis soluta iusto quidem cumque.
            </p>
            <br>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum voluptas ipsum veritatis minima rerum,
                amet est molestias expedita officia consequuntur nobis laudantium quasi quisquam alias sint eligendi
                adipisci. Veniam, molestias numquam voluptatem sunt quasi quis aliquam saepe perferendis distinctio
                dignissimos a tenetur esse sequi voluptas maiores repellendus dicta accusamus enim, deleniti adipisci
                expedita corporis voluptate. Incidunt adipisci reprehenderit est tempora impedit. Aliquam accusantium
                eius ducimus nisi, unde, veniam aspernatur autem quia nobis corrupti repellat sunt ullam rem ipsum
                quidem necessitatibus tenetur delectus enim sed optio. Sint exercitationem ad porro odit repellendus
                repudiandae minima non asperiores, corporis soluta iusto quidem cumque.
            </p>
            <br>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum voluptas ipsum veritatis minima rerum,
                amet est molestias expedita officia consequuntur nobis laudantium quasi quisquam alias sint eligendi
                adipisci. Veniam, molestias numquam voluptatem sunt quasi quis aliquam saepe perferendis distinctio
                dignissimos a tenetur esse sequi voluptas maiores repellendus dicta accusamus enim, deleniti adipisci
                expedita corporis voluptate. Incidunt adipisci reprehenderit est tempora impedit. Aliquam accusantium
                eius ducimus nisi, unde, veniam aspernatur autem quia nobis corrupti repellat sunt ullam rem ipsum
                quidem necessitatibus tenetur delectus enim sed optio. Sint exercitationem ad porro odit repellendus
                repudiandae minima non asperiores, corporis soluta iusto quidem cumque.
            </p>
        </div>

        <div class="container team">
            <h3 class="heading"><span class="theme_clr">{{ env('APP_NAME') }}</span> Team</h3>
            <div class="members">
                <div class="member">
                    <h4 class="name">Member 1</h4>
                    <img src="{{ asset('image/user.jpg') }}" alt="" class="image">
                    <div class="social">
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="fluent:mail-28-filled"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="basil:linkedin-solid"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="member">
                    <h4 class="name">Member 1</h4>
                    <img src="{{ asset('image/user.jpg') }}" alt="" class="image">
                    <div class="social">
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="fluent:mail-28-filled"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="basil:linkedin-solid"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="member">
                    <h4 class="name">Member 1</h4>
                    <img src="{{ asset('image/user.jpg') }}" alt="" class="image">
                    <div class="social">
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="fluent:mail-28-filled"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="basil:linkedin-solid"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="member">
                    <h4 class="name">Member 1</h4>
                    <img src="{{ asset('image/user.jpg') }}" alt="" class="image">
                    <div class="social">
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="fluent:mail-28-filled"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="basil:linkedin-solid"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                        </a>
                        <a href="javascript:void()" class="link">
                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sec_divider"></div>

    @include('general.components.footer')
@endsection
