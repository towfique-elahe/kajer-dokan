@extends('client.layout.clientLayout')

@section('title', '| Dashboard')
@section('pageTitle', 'Dashboard')

@section('main')
    <main id="cDash">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- featured services -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="vaadin:tools"></iconify-icon>
                        </div>
                        <p>featured services</p>
                    </div>
                    <div class="card_body">
                        <div class="service">
                            <a class="primary" href="{{ route('client.services') }}">
                                <iconify-icon icon="healthicons:cleaning"></iconify-icon>
                                <p>cleaning</p>
                            </a>
                            <div class="secondary">
                                <p class="worker_count">{{ count($cleaning) }}</p>
                                <p>workers</p>
                            </div>
                        </div>
                        <div class="service">
                            <a class="primary" href="{{ route('client.services') }}">
                                <iconify-icon icon="material-symbols:electrical-services"></iconify-icon>
                                <p>electrical</p>
                            </a>
                            <div class="secondary">
                                <p class="worker_count">{{ count($electrical) }}</p>
                                <p>workers</p>
                            </div>
                        </div>
                        <div class="service">
                            <a class="primary" href="{{ route('client.services') }}">
                                <iconify-icon icon="material-symbols:plumbing"></iconify-icon>
                                <p>plumbing</p>
                            </a>
                            <div class="secondary">
                                <p class="worker_count">{{ count($plumbing) }}</p>
                                <p>workers</p>
                            </div>
                        </div>
                        <div class="service">
                            <a class="primary" href="{{ route('client.services') }}">
                                <iconify-icon icon="ic:round-pest-control"></iconify-icon>
                                <p>pest control</p>
                            </a>
                            <div class="secondary">
                                <p class="worker_count">{{ count($pest_control) }}</p>
                                <p>workers</p>
                            </div>
                        </div>
                        <div class="service">
                            <a class="primary" href="{{ route('client.services') }}">
                                <iconify-icon icon="mingcute:car-fill"></iconify-icon>
                                <p>auto care</p>
                            </a>
                            <div class="secondary">
                                <p class="worker_count">{{ count($auto_care) }}</p>
                                <p>workers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- featured workers -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mdi:worker"></iconify-icon>
                        </div>
                        <p>featured workers</p>
                    </div>
                    <div class="card_body">
                        @if (count($workers) > 0)
                            @foreach ($workers as $worker)
                                <div class="worker">
                                    <div class="details">
                                        <div class="image">
                                            <img src="{{ !empty($worker->image) ? url('upload/' . $worker->image) : url('image/user.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p class="name">{{ $worker->name }}</p>
                                            <p class="service">{{ $worker->service }}</p>
                                        </div>
                                    </div>
                                    <a class="hire" href="{{ route('client.worker', [$worker->id]) }}">
                                        Profile
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p style="text-align: center">No workers are available</p>
                        @endif
                    </div>
                </div>

                <!-- your jobs -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>your jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($jobs) > 0)
                            @foreach ($jobs as $job)
                                <a class="job" href="{{ route('client.job.view', [$job->id]) }}">
                                    <p class="title">
                                        {{ $job->title }}
                                    </p>
                                    <p class="service">{{ $job->service }}</p>
                                </a>
                            @endforeach
                        @else
                            <p style="text-align: center">No job posted yet</p>
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
                                                <a href="{{ route('client.transaction', [$transaction->id]) }}">
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

                <!-- your workers -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mdi:worker"></iconify-icon>
                        </div>
                        <p>your workers</p>
                    </div>
                    <div class="card_body">
                        @if (count($oldWorkers) > 0)
                            @foreach ($oldWorkers as $oldWorker)
                                <a class="worker" href="{{ route('client.worker', [$oldWorker->id]) }}">
                                    <div class="details">
                                        <div class="image">
                                            <img src="{{ !empty($oldWorker->image) ? url('upload/' . $oldWorker->image) : url('image/user.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p class="name">{{ $oldWorker->name }}</p>
                                            <p class="service">{{ $oldWorker->service }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p>You didn't hired anyone yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
