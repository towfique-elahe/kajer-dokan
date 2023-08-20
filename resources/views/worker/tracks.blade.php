@extends('worker.layout.workerLayout')

@section('title', '| Your Job')
@section('pageTitle', 'Your Ongoing Jobs')

@section('main')
    <main id="wJobList">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            @if (count($jobs) > 0)
                @foreach ($jobs as $job)
                    <div class="card job">
                        <div class="job_info">
                            <h3 class="job_title">
                                {{ $job->title }}
                            </h3>
                            <p class="job_cat">{{ $job->service }}</p>
                        </div>
                        <a href="{{ route('worker.track.job', ['id' => $job->id]) }}" class="button">Progress</a>
                    </div>
                @endforeach
            @else
                <div class="card">
                    <p style="text-align: center">No jobs are available for you</p>
                </div>
            @endif
        </section>
    </main>
@endsection
