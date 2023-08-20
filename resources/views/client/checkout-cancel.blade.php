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
                <h1>Payment Canceled</h1>
                <p>Your payment was canceled.</p>
            </div>
        </section>
    </main>
@endsection
