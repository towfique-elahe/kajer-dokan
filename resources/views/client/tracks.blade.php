@extends('client.layout.clientLayout')

@section('title', '| Track')
@section('pageTitle', 'Track Jobs')

@section('main')
    <main id="cJobs">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- your jobs -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>track jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($jobs) > 0)
                            @foreach ($jobs as $job)
                                <div class="job">
                                    <div class="col">
                                        <h3 class="title">
                                            {{ $job->title }}
                                        </h3>
                                        <p class="service">
                                            {{ $job->service }}
                                        </p>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('client.track', [$job->id]) }}" class="button">Track</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p style="text-align: center">No ongoing job to track</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
