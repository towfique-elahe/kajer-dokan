@extends('client.layout.clientLayout')

@section('title', '| Worker')
@section('pageTitle', 'Worker Profile')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="buttons">
                <button class="button" id="download-section-pdf-btn">
                    <iconify-icon icon="material-symbols:download"></iconify-icon>Download
                </button>
                <form action="{{ route('client.checkout', [$worker->id]) }}" method="GET">
                    @csrf
                    <input type="hidden" name="amount" value="1500">
                    <button type="submit" class="button submit">
                        <iconify-icon icon="mingcute:check-2-fill"></iconify-icon> Hire
                    </button>
                </form>
            </div>

            @if ($resume)
                <div class="resume" id="section-to-download" style="font-size: 12px;">
                    <div class="head"
                        style="  display: flex;
                align-items: center;
                gap: 20px;
                margin-bottom: 25px;">
                        <img src="{{ !empty($worker->image) ? url('upload/' . $worker->image) : url('image/user.jpg') }}"
                            alt=""
                            style="
                            width: 100px;
                            height: 100px;
                            object-fit: cover;
                            border-radius: 5px;
                            border: solid 1px rgba(0, 0, 0, 0.2);
                        ">
                        <h1 class="name"
                            style="  font-size: 24px;
                    text-transform: capitalize;
                    font-weight: 600;">
                            {{ $worker->name }}</h1>
                    </div>
                    <div class="body">
                        <h3 class="r_heading"
                            style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                            personal details
                        </h3>
                        <div class="textarea personal"
                            style="  display: flex;
                    flex-direction: column;
                    gap: 5px;">
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">name: </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->worker_name }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">email: </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->worker_email }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">phone: </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->worker_phone }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">service:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->worker_service }}</dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">nationality:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->nationality }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">birth date:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->birth_date }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">religion:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">{{ $resume->religion }}
                                </dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">marital
                                    status:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->marital_status }}</dd>
                            </dl>
                            <dl style="display: flex;">
                                <dt style="  flex: 3;
                            text-transform: capitalize;">address:
                                </dt>
                                <dd style="  flex: 5;
                            font-weight: 500;">
                                    {{ $resume->worker_address }}</dd>
                            </dl>
                        </div>
                        <h3 class="r_heading"
                            style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                            work experience
                        </h3>
                        <div class="textarea">
                            <div class="item" style="margin-bottom: 5px;">
                                <p><b>{{ $resume->designation_1 }}</b></p>
                                <p><i>{{ $resume->workplace_1 }}</i></p>
                                <p>{{ $resume->time_frame_1 }}</p>
                                <p>
                                    {{ $resume->description_1 }}
                                </p>
                            </div>
                            <div class="item" style="margin-bottom: 5px;">
                                <p><b>{{ $resume->designation_2 }}</b></p>
                                <p><i>{{ $resume->workplace_2 }}</i></p>
                                <p>{{ $resume->time_frame_2 }}</p>
                                <p>
                                    {{ $resume->description_2 }}
                                </p>
                            </div>
                        </div>
                        <h3 class="r_heading"
                            style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                            education and qualifications
                        </h3>
                        <div class="textarea">
                            <div class="item" style="margin-bottom: 5px;">
                                <p><b>{{ $resume->exam_1 }}</b></p>
                                <p><i>{{ $resume->institute_1 }}</i></p>
                                <p>{{ $resume->session_1 }}</p>
                                <p>
                                    {{ $resume->details_1 }}
                                </p>
                            </div>
                            <div class="item" style="margin-bottom: 5px;">
                                <p><b>{{ $resume->exam_2 }}</b></p>
                                <p><i>{{ $resume->institute_2 }}</i></p>
                                <p>{{ $resume->session_2 }}</p>
                                <p>
                                    {{ $resume->details_2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p style="text-align: center">{{ $worker->name }} didn't build his/her resume</p>
            @endif
        </section>
    </main>
@endsection
