@extends('client.layout.clientLayout')

@section('title', '| Job Details')
@section('pageTitle', 'Job Details')

@section('main')
    <main id="wJob">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card job">
                <h3 class="job_title">
                    <b>Title: </b>{{ $job->title }}
                </h3>
                <p class="job_type">
                    <b>Type: </b><span class="theme_clr">{{ $job->service }}</span>
                </p>
                <p class="job_location">
                    <b>Location: </b>{{ $job->location }}
                </p>
                <p class="job_desc">
                    <b>Description: </b>{{ $job->description }}
                </p>
                <form action="{{ route('client.job.delete', ['id' => $job->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button" style="background: crimson; border: none">Delete</button>
                </form>
            </div>
        </section>
    </main>
@endsection
