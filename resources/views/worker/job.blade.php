@extends('worker.layout.workerLayout')

@section('title', '| Job')
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
            </div>

            <form class="card application" action="{{ route('worker.job.application') }}" method="POST">
                @csrf
                <input type="hidden" name="client_id" value="{{ $job->client_id }}">
                <input type="hidden" name="worker_id" value="{{ $user->id }}">
                <input type="hidden" name="worker_name" value="{{ $user->name }}">
                <input type="hidden" name="worker_email" value="{{ $user->email }}">
                <input type="hidden" name="job_id" value="{{ $job->id }}">
                <input type="hidden" name="job_title" value="{{ $job->title }}">
                <input type="hidden" name="job_service" value="{{ $job->service }}">

                <div class="input">
                    <label for="worker_application_message">Message</label>
                    <textarea name="worker_application_message" id="worker_application_message"
                        placeholder="Type your application message here ..." required></textarea>
                </div>
                <button class="button" type="submit"><iconify-icon
                        icon="icon-park-outline:telegram"></iconify-icon>Apply</button>
            </form>
        </section>
    </main>
@endsection
