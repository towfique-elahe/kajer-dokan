@extends('admin.layout.adminLayout')

@section('title', '| Clients List')
@section('pageTitle', 'Clients List')

@section('main')
    <main id="cWorkers">
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <input class="search_bar" type="text" id="search-client" placeholder="Search clients...">

            <ul id="clients-list" class="workers">
                <li class="client card">
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>ID: </b>001
                            </p>
                            <h3 class="name">Jimmy Polo</h3>
                        </div>
                    </div>
                    <a href="{{ route('admin.client') }}" class="button">Profile</a>
                </li>
                <li class="client card">
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>ID: </b>001
                            </p>
                            <h3 class="name">Jimmy Polo</h3>
                        </div>
                    </div>
                    <a href="{{ route('admin.client') }}" class="button">Profile</a>
                </li>
                <li class="client card">
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>ID: </b>001
                            </p>
                            <h3 class="name">Jimmy Polo</h3>
                        </div>
                    </div>
                    <a href="{{ route('admin.client') }}" class="button">Profile</a>
                </li>
                <li class="client card">
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>ID: </b>001
                            </p>
                            <h3 class="name">Jimmy Polo</h3>
                        </div>
                    </div>
                    <a href="{{ route('admin.client') }}" class="button">Profile</a>
                </li>
            </ul>
        </section>
    </main>
@endsection
