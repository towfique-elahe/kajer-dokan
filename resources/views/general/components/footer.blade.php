<footer id="footer">
    <div class="container">
        <div class="col">
            <h4 class="col_heading">
                contact
            </h4>
            <ul>
                <li>
                    <a href="tel:+8801843318995">
                        +8801843-318995
                    </a>
                </li>
                <li>
                    <a href="mailto:anyfixgg@gmail.com">
                        anyfixgg@gmail.com
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        star building, agrabadh,<br>
                        chattogram - 4100
                    </a>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4 class="col_heading">
                important links
            </h4>
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        home
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        login
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        register
                    </a>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4 class="col_heading">
                services
            </h4>
            <ul>
                <li>
                    <a href="javascript:void()">
                        cleaning
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        electrical
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        plumbing
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        auto care
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        pest control
                    </a>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4 class="col_heading">
                company
            </h4>
            <ul>
                <li>
                    <a href="{{ route('contact') }}">
                        contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        about us
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        privacy policy
                    </a>
                </li>
                <li>
                    <a href="javascript:void()">
                        terms & conditions
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sec_divider"></div>

    <div class="container">
        <img src="{{ asset('image/logo.png') }}" alt="" class="footer_logo">
        <p class="copyright">
            Copyright 2023 | <span class="theme_clr">{{ env('APP_NAME') }}</span> All Right Reserved
        </p>
        <hr>
        <div class="social">
            <a href="javascript:void()">
                <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
            </a>
            <a href="javascript:void()">
                <iconify-icon icon="gg:facebook"></iconify-icon>
            </a>
            <a href="javascript:void()">
                <iconify-icon icon="mdi:twitter"></iconify-icon>
            </a>
            <a href="javascript:void()">
                <iconify-icon icon="mdi:instagram"></iconify-icon>
            </a>
        </div>
    </div>
</footer>
