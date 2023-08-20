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
                <a href="{{ route('admin.eidt-client') }}" class="button submit"><iconify-icon
                        icon="iconamoon:edit-fill"></iconify-icon>Edit</a>
                <a href="javascript:void()" class="button negative"><iconify-icon
                        icon="material-symbols:delete"></iconify-icon>Delete Account</a>
            </div>

            <div class="card aWorker">
                <div class="head">
                    <img src="{{ asset('image/user.jpg') }}" alt="">
                    <h2 class="name">jimmy polo</h2>
                </div>
                <div class="body">
                    <h3 class="r_heading">
                        details
                    </h3>
                    <div class="textarea personal">
                        <dl>
                            <dt>name: </dt>
                            <dd>Jimmy Polo</dd>
                        </dl>
                        <dl>
                            <dt>email: </dt>
                            <dd>jimmypolo@email.com</dd>
                        </dl>
                        <dl>
                            <dt>phone: </dt>
                            <dd>01400492967</dd>
                        </dl>
                        <dl>
                            <dt>address: </dt>
                            <dd>Bundle Road, Patharghata, Chattogram - 4000</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
