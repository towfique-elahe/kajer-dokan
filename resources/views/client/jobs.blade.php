@extends('client.layout.clientLayout')

@section('title', '| Your Jobs')
@section('pageTitle', 'Your Jobs')

@section('main')
    <main id="cJobs">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- post job -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>post job</p>
                    </div>
                    <div class="card_body">
                        <form class="post_job" action="{{ route('client.job.post') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="client_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="client_name" value="{{ Auth::user()->name }}">

                            <input type="text" name="title" id="title" placeholder="Job Title" required>

                            <select name="service" id="service" required>
                                <option selected disabled>Choose Service Type</option>
                                <option value="Cleaning">Cleaning</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Plumbing">Plumbing</option>
                                <option value="Pest Control">Pest Control</option>
                                <option value="Auto Care">Auto Care</option>
                            </select>

                            <input type="text" name="location" id="location" placeholder="Location" required>

                            <input type="tel" name="phone" id="phone" placeholder="Phone" required>

                            <textarea name="description" id="description" placeholder="Describe your job." required></textarea>

                            <input type="hidden" name="status" value="available">

                            <hr>

                            <div class="buttons">
                                <button type="reset" class="button reset">Cancel</button>
                                <button type="submit" class="button submit">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- your available jobs -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>your available jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($availableJobs) > 0)
                            @foreach ($availableJobs as $job)
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
                                        <a href="{{ route('client.job.view', [$job->id]) }}" class="button">View</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p style="text-align: center">No job posted yet</p>
                        @endif
                    </div>
                </div>

                <!-- your available jobs -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="zondicons:travel-case"></iconify-icon>
                        </div>
                        <p>your completed jobs</p>
                    </div>
                    <div class="card_body">
                        @if (count($completedJobs) > 0)
                            @foreach ($completedJobs as $job)
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
                                        <a href="{{ route('client.job.view', [$job->id]) }}" class="button">View</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p style="text-align: center">No job posted yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
