@extends('admin.layout.adminLayout')

@section('title', '| Client Profile')
@section('pageTitle', 'Client Profile')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="buttons">
                <a href="{{ route('admin.client.edit', ['id' => $client->id]) }}" class="button submit"><iconify-icon
                        icon="iconamoon:edit-fill"></iconify-icon>Edit</a>
                <a href="{{ route('admin.client.delete', ['id' => $client->id]) }}" class="button negative"><iconify-icon
                        icon="material-symbols:delete"></iconify-icon>Delete Account</a>
            </div>

            <div class="card aWorker">
                <div class="head">
                    <img src="{{ !empty($client->image) ? url('upload/' . $client->image) : url('image/user.jpg') }}"
                        alt="">
                    <h2 class="name">{{ $client->name }}</h2>
                </div>
                <div class="body">
                    <h3 class="r_heading">
                        details
                    </h3>
                    <div class="textarea personal">
                        <dl>
                            <dt>name: </dt>
                            <dd>{{ $client->name }}</dd>
                        </dl>
                        <dl>
                            <dt>email: </dt>
                            <dd>{{ $client->email }}</dd>
                        </dl>
                        <dl>
                            <dt>phone: </dt>
                            <dd>{{ $client->phone }}</dd>
                        </dl>
                        <dl>
                            <dt>address: </dt>
                            <dd>{{ $client->address }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
