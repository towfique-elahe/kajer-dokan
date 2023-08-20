@extends('client.layout.clientLayout')

@section('title', '| Requests')
@section('pageTitle', 'Job Requests')

@section('main')
    <main id="requests">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="requests">
                @if (count($requests) > 0)
                    @foreach ($requests as $request)
                        <div class="card request">
                            <div class="info">
                                <p>
                                    <b>Your Job: </b>{{ $request->job_title }}
                                </p>
                                <p>
                                    <b>Service Type: </b><span class="theme_clr">{{ $request->job_service }}</span>
                                </p>
                                <p>
                                    <b>Requested by: </b>{{ $request->worker_name }}
                                </p>
                                <p>
                                    <b>Message: </b>{{ $request->worker_application_message }}
                                </p>
                            </div>
                            <div class="buttons">
                                <a href="{{ route('client.worker', ['id' => $request->worker_id]) }}"
                                    class="button">Profile</a>
                                <form action="{{ route('client.request.delete', $request) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button"
                                        style="background: crimson; border: none">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p style="text-align: center">No job requests available now</p>
                @endif
            </div>
        </section>
    </main>
@endsection
