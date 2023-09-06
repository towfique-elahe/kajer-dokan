@extends('admin.layout.adminLayout')

@section('title', '| Client List')
@section('pageTitle', 'Client List')

@section('main')
    <main id="cWorkers">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <input class="search_bar" type="text" id="search-bar" placeholder="Search workers...">

            <ul id="workers-list" class="workers">
                @if (count($clients) > 0)
                    @foreach ($clients as $client)
                        <li class="worker-item card" data-category="{{ $client->service }}">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ !empty($client->image) ? url('upload/' . $client->image) : url('image/user.jpg') }}"
                                        alt="">
                                </div>
                                <div class="col">
                                    <h3 class="name">{{ $client->name }}</h3>
                                    <p class="service">{{ $client->service }}</p>
                                </div>
                            </div>
                            <a href="{{ route('admin.client', ['id' => $client->id]) }}" class="button">Profile</a>
                        </li>
                    @endforeach
                @else
                    <p style="text-align: center">No clients are available</p>
                @endif
            </ul>
        </section>
    </main>
@endsection
