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
                        @if (count($clients) > 0)
                            @foreach ($clients as $client)
                                <a class="public" href="{{ route('admin.client', [$client->id]) }}">
                                    <div class="image">
                                        <img src="{{ !empty($client->image) ? url('upload/' . $client->image) : url('image/user.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="col">
                                        <p class="name">{{ $client->name }}</p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p style="text-align: center">No clients are available</p>
                        @endif
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
                        @if (count($workers) > 0)
                            @foreach ($workers as $worker)
                                <a class="public" href="{{ route('admin.worker', [$worker->id]) }}">
                                    <div class="image">
                                        <img src="{{ !empty($worker->image) ? url('upload/' . $worker->image) : url('image/user.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="col">
                                        <p class="name">{{ $worker->name }}</p>
                                        <p class="service">{{ $worker->service }}</p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p style="text-align: center">No workers are available</p>
                        @endif
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
                    @if (count($transactions) > 0)
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
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->created_at }}</td>
                                            <td>৳ {{ $transaction->amount }}</td>
                                            <td>
                                                <a href="{{ route('admin.transaction', [$transaction->id]) }}">
                                                    <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p style="text-align: center">No transactions available</p>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
