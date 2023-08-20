@extends('worker.layout.workerLayout')

@section('title', '| Your Job')
@section('pageTitle', 'Job Progress')

@section('main')
    <main id="track">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>job info</p>
                    </div>
                    <div class="card_body">
                        <p><b>ID:</b> {{ $job->id }}</p>
                        <p><b>Title:</b> {{ $job->title }}</p>
                        <p><b>Service:</b> {{ $job->service }}</p>
                        <p><b>Location:</b> {{ $job->location }}</p>
                        <p><b>Description:</b> {{ $job->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col card steps">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>progress</p>
                    </div>
                    <div class="card_body">
                        @switch($track->status)
                            @case(1)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $client->name }}</span> hired you</h4>
                                </div>
                            @break

                            @case(2)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $client->name }}</span> hired you</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4>You're on the way to <span class="theme_clr">{{ $client->name }}</span></h4>
                                </div>
                            @break

                            @case(3)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $client->name }}</span> hired you</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4>You're on the way to <span class="theme_clr">{{ $client->name }}</span></h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mdi:location"></iconify-icon>
                                    </div>
                                    <h4>You have reached <span class="theme_clr">{{ $client->name }}'s</span> location
                                    </h4>
                                </div>
                            @break

                            @case(4)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $client->name }}</span> hired you</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4>You're on the way to <span class="theme_clr">{{ $client->name }}</span></h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mdi:location"></iconify-icon>
                                    </div>
                                    <h4>You have reached <span class="theme_clr">{{ $client->name }}'s</span> location
                                    </h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="fluent-mdl2:completed-solid"></iconify-icon>
                                    </div>
                                    <h4>You have completed <span class="theme_clr">{{ $client->name }}'s</span> job
                                    </h4>
                                </div>
                            @break

                            @default
                                <p>No progess</p>
                        @endswitch
                    </div>
                </div>

                @switch($track->status)
                    @case(1)
                        <form class="card confirmation" action="{{ route('worker.track.job.status2', [$job->id]) }}"
                            method="POST">
                            @csrf
                            <p>
                                Confirm that you're on the way to <span class="theme_clr">{{ $client->name }}</span>'s location.
                            </p>
                            <hr>
                            <button class="button" type="submit">
                                <iconify-icon icon="ph:seal-check-fill"></iconify-icon> On the way
                            </button>
                        </form>
                    @break

                    @case(2)
                        <form class="card confirmation" action="{{ route('worker.track.job.status3', [$job->id]) }}"
                            method="POST">
                            @csrf
                            <p>
                                Confirm that you've reached <span class="theme_clr">{{ $client->name }}</span>'s location.
                            </p>
                            <hr>
                            <button class="button" type="submit">
                                <iconify-icon icon="ph:seal-check-fill"></iconify-icon> Reached
                            </button>
                        </form>
                    @break

                    @case(3)
                        <form class="card confirmation" action="{{ route('worker.track.job.status4', [$job->id]) }}"
                            method="POST">
                            @csrf
                            <p>
                                Confirm that you've completed <span class="theme_clr">{{ $client->name }}</span>'s job.
                            </p>
                            <hr>
                            <button class="button" type="submit">
                                <iconify-icon icon="ph:seal-check-fill"></iconify-icon> Completed
                            </button>
                        </form>
                    @break

                    @case(4)
                        <div class="card confirmation">
                            <p>
                                You confirmed that you've completed <span class="theme_clr">{{ $client->name }}'s</span> job. Now
                                wait for {{ $client->name }}'s confirmation.
                            </p>
                        </div>
                    @break

                    @default
                        <p>Error: no status</p>
                @endswitch
            </div>
        </section>
    </main>
@endsection
