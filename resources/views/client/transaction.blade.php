@extends('client.layout.clientLayout')

@section('title', '| Transaction Details')
@section('pageTitle', 'Transaction Details')

@section('main')
    <main id="cTrans">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card">
                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Transaction Info</p>
                </div>
                <div class="card_body">
                    <p><b>ID:</b> {{ $transaction->id }}</p>
                    <p><b>Amount:</b> ৳ {{ $transaction->amount }}</p>
                    <p><b>Date Time:</b> {{ $transaction->created_at }}</p>
                    <p><b>Payment for:</b> {{ $transaction->service }} Service</p>
                </div>

                <br>
                <hr>
                <br>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Worker Info</p>
                </div>
                <div class="card_body">
                    <p><b>ID:</b> {{ $worker->id }}</p>
                    <p><b>Name:</b> {{ $worker->name }}</p>
                    <p><b>Email:</b> {{ $worker->email }}</p>
                    <p><b>Service:</b> {{ $worker->service }}</p>
                </div>

                <br>
                <hr>
                <br>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Job Info</p>
                </div>
                <div class="card_body">
                    <p><b>ID:</b> {{ $job->id }}</p>
                    <p><b>Title:</b> {{ $job->title }}</p>
                    <p><b>Description:</b> {{ $job->description }}</p>
                </div>
            </div>
        </section>
    </main>
@endsection
