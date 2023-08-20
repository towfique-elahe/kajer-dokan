@extends('worker.layout.workerLayout')

@section('title', '| Worker Dashboard')
@section('pageTitle', 'Worker Dashboard')

@section('main')
    <main id="wDash">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- featured jobs -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="uim:favorite"></iconify-icon>
                        </div>
                        <p>featured jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($jobs) > 0)
                            @foreach ($jobs as $job)
                                <a class="job" href="{{ route('worker.job', ['id' => $job->id]) }}">
                                    <p class="title">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <p class="service">plumber</p>
                                </a>
                            @endforeach
                        @else
                            <p style="text-align: center">No jobs are available</p>
                        @endif
                    </div>
                </div>

                <!-- your jobs -->
                <div class="card" id="track">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>ongoing jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($ongoingJobs) > 0)
                            @foreach ($ongoingJobs as $job)
                                <div class="job">
                                    <div class="job_info">
                                        <h3 class="job_title">
                                            {{ $job->title }}
                                        </h3>
                                        <p class="job_cat">{{ $job->service }}</p>
                                    </div>
                                    <a href="{{ route('worker.track.job', ['id' => $job->id]) }}"
                                        class="button">Progress</a>
                                </div>
                            @endforeach
                        @else
                            <p style="text-align: center">You don't have any ongoing jobs</p>
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
                                            <a href="{{ route('worker.transaction', [$transaction->id]) }}">
                                                <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
