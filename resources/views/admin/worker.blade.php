@extends('admin.layout.adminLayout')

@section('title', '| Worker Profile')
@section('pageTitle', 'Worker Profile')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="buttons">
                <a href="{{ route('admin.worker-resume', ['id' => $worker->id]) }}" class="button"><iconify-icon
                        icon="mdi:resume"></iconify-icon>Resume</a>
                <a href="{{ route('admin.edit-worker', ['id' => $worker->id]) }}" class="button submit"><iconify-icon
                        icon="iconamoon:edit-fill"></iconify-icon>Edit</a>
                <a href="{{ route('admin.delete-worker', ['id' => $worker->id]) }}" class="button negative"><iconify-icon
                        icon="material-symbols:delete"></iconify-icon>Delete Account</a>
            </div>

            <div class="card aWorker">
                <div class="head">
                    <img src="{{ !empty($worker->image) ? url('upload/' . $worker->image) : url('image/user.jpg') }}"
                        alt="">
                    <h2 class="name">{{ $worker->name }}</h2>
                </div>
                <div class="body">
                    <h3 class="r_heading">
                        details
                    </h3>
                    <div class="textarea personal">
                        <dl>
                            <dt>name: </dt>
                            <dd>{{ $worker->name }}</dd>
                        </dl>
                        <dl>
                            <dt>email: </dt>
                            <dd>{{ $worker->email }}</dd>
                        </dl>
                        <dl>
                            <dt>phone: </dt>
                            <dd>{{ $worker->phone }}</dd>
                        </dl>
                        <dl>
                            <dt>address: </dt>
                            <dd>{{ $worker->address }}</dd>
                        </dl>
                        <dl>
                            <dt>service: </dt>
                            <dd>{{ $worker->service }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
