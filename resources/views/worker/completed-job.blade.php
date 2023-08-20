@extends('worker.layout.workerLayout')

@section('title', '| Job Details')
@section('pageTitle', 'Job Details')

@section('main')
    <main id="wJob">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card job">
                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="uim:favorite"></iconify-icon>
                    </div>
                    <p>job details</p>
                </div>
                <p class="job_id">
                    <b>Id: </b> {{ $job->id }}
                </p>
                <p class="job_title">
                    <b>Title: </b>{{ $job->title }}
                </p>
                <p class="job_type">
                    <b>Type: </b>{{ $job->service }}
                </p>
                <p class="job_location">
                    <b>Location: </b>{{ $job->location }}
                </p>
                <p class="job_desc">
                    <b>Description: </b>{{ $job->description }}
                </p>

                <br>
                <hr>
                <br>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="uim:favorite"></iconify-icon>
                    </div>
                    <p>client details</p>
                </div>
                <p>
                    <b>Client ID: </b>{{ $client->id }}
                </p>
                <p>
                    <b>Client ID: </b>{{ $client->name }}
                </p>

                <br>
                <hr>
                <br>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="uim:favorite"></iconify-icon>
                    </div>
                    <p>rating</p>
                </div>
                <div class="job_rated">
                    <p><span class="theme_clr">{{ $client->name }} </span>rated you</p>
                    @switch($rating->rating)
                        @case(1)
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        @break

                        @case(2)
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        @break

                        @case(3)
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        @break

                        @case(4)
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        @break

                        @case(5)
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                            </div>
                        @break

                        @default
                            <div class="rating">
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                    @endswitch
                </div>
            </div>
        </section>
    </main>
@endsection
