@extends('worker.layout.workerLayout')

@section('title', '| Completed Jobs')
@section('pageTitle', 'Completed Jobs')

@section('main')
    <main id="wJobList">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            @if (count($completedJobs) > 0)
                @foreach ($completedJobs as $completedJob)
                    <div class="card job">
                        <div class="job_info">
                            <h3 class="job_title">
                                {{ $completedJob->title }}
                            </h3>
                            <p class="job_cat">{{ $completedJob->service }}</p>
                        </div>
                        <a href="{{ route('worker.completed-job', [$completedJob->id]) }}" class="button">Details</a>
                    </div>
                @endforeach
            @else
                <p class="card" style="text-align: center">You didn't completed any job yet.</p>
            @endif
        </section>
    </main>
@endsection
