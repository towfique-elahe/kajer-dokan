@extends('admin.layout.adminLayout')

@section('title', '| Admin Dashboard')
@section('pageTitle', 'Admin Dashboard')

@section('main')
    <main id="aDash">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- clients -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mdi:users"></iconify-icon>
                        </div>
                        <p>clients</p>
                    </div>
                    <div class="card_body">
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- workers -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="fa6-solid:users-gear"></iconify-icon>
                        </div>
                        <p>workers</p>
                    </div>
                    <div class="card_body">
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                                <p class="service">plumber</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                                <p class="service">plumber</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                                <p class="service">plumber</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                                <p class="service">plumber</p>
                            </div>
                        </a>
                        <a class="public" href="javascript:void()">
                            <div class="image">
                                <img src="{{ asset('image/user.jpg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="name">jimmy polo</p>
                                <p class="service">plumber</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- recent transactions -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                        </div>
                        <p>recent transactions</p>
                    </div>
                    <div class="card_body">
                        <table class="transaction">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td>15 Jun, 2023</td>
                                    <td>৳ 1500</td>
                                    <td>
                                        <a href="javascript:void()">
                                            <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
