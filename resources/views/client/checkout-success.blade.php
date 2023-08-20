@extends('client.layout.clientLayout')

@section('title', '| Checkout')
@section('pageTitle', 'Checkout')

@section('main')
    <main id="checkout">
        <!-- topbar -->
        @include('client.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card">
                <h1>Payment Successful</h1>
                <p>Your payment was successful. Thank you!</p>
                <p>Now you can <a class="theme_clr" href="{{ route('client.tracks') }}">track</a> your job status.</p>
            </div>
        </section>
    </main>
@endsection
