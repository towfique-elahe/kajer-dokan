@extends('client.layout.clientLayout')

@section('title', '| Track')
@section('pageTitle', 'Track Job Progess')

@section('main')
    <main id="track">
        <!-- topbar -->
        @include('client.components.topbar')

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
                                    <h4>You hired <span class="theme_clr">{{ $worker->name }}</span></h4>
                                </div>
                            @break

                            @case(2)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4>You hired <span class="theme_clr">{{ $worker->name }}</span></h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> is on your way</h4>
                                </div>
                            @break

                            @case(3)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4>You hired <span class="theme_clr">{{ $worker->name }}</span></h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> is on your way</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mdi:location"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> reached your location</h4>
                                </div>
                            @break

                            @case(4)
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon>
                                    </div>
                                    <h4>You hired <span class="theme_clr">{{ $worker->name }}</span></h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="material-symbols:directions-walk-rounded"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> is on your way</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="mdi:location"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> reached your location</h4>
                                </div>
                                <iconify-icon class="arrow" icon="icon-park-outline:arrow-up" flip="vertical"></iconify-icon>
                                <div class="step">
                                    <div class="icon">
                                        <iconify-icon icon="fluent-mdl2:completed-solid"></iconify-icon>
                                    </div>
                                    <h4><span class="theme_clr">{{ $worker->name }}</span> completed your job</h4>
                                </div>
                            @break

                            @default
                                <p>No progess</p>
                        @endswitch
                    </div>
                </div>

                @if ($track->status == 4)
                    <form class="col card confirmation" action="{{ route('client.track.complete', [$track->id]) }}"
                        method="POST">
                        @csrf
                        <p>
                            Kindly confirm that <span class="theme_clr">{{ $worker->name }}</span> completed your job.
                        </p>
                        <hr>
                        <input type="hidden" name="client_id" value="{{ $user->id }}">
                        <input type="hidden" name="worker_id" value="{{ $worker->id }}">
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <div class="input">
                            <label for="rating">Rate <span class="theme_clr">{{ $worker->name }}</span></label>
                            <input type="range" name="rating" id="rating" min="1" max="5" required>
                        </div>
                        <button class="button" type="submit">
                            <iconify-icon icon="ph:seal-check-fill"></iconify-icon> Confirm
                        </button>
                    </form>
                @endif
            </div>
        </section>
    </main>
@endsection
