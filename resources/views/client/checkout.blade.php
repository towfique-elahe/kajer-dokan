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
                <h3 class="heading">you have selected <span class="theme_clr">Cleaning</span> service</h3>
                <p class="pay">
                    Kindly pay <span class="theme_clr">৳ {{ $amount }}</span>
                </p>
            </div>

            <form role="form" action="{{ route('client.checkout.process', [$worker->id]) }}" method="post"
                class="card checkout"" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
                @csrf
                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Worker Info</p>
                </div>
                <div class="row">
                    <div class="col">
                        <p><b>ID:</b> {{ $worker->id }}</p>
                        <p><b>Name:</b> {{ $worker->name }}</p>
                        <p><b>Service:</b> {{ $worker->service }}</p>
                    </div>
                </div>
                <hr>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Job Info</p>
                </div>
                <div class="row">
                    <div class="input col">
                        <label for="job_id">Select Your Job ({{ $worker->service }})</label>
                        <select name="job_id" id="job_id" required>
                            @if (count($jobs) > 0)
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">Id: {{ $job->id }} | Title:
                                        {{ $job->title }}</option>
                                @endforeach
                            @else
                                <option value="" selected disabled>You dont have any job, create one now</option>
                            @endif
                        </select>
                    </div>
                </div>
                <hr>

                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>Billing Info</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" disabled>
                            <input type="hidden" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" disabled>
                            <input type="hidden" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" value="{{ $user->phone }}" required>
                        </div>
                        <div class="input">
                            <label for="billing_address">Billing Address</label>
                            <input type="text" name="billing_address" id="billing_address" value="{{ $user->address }}"
                                required>
                        </div>
                    </div>
                </div>
                <hr>
                <input type="hidden" name="price" value="{{ $amount }}">
                <div class="buttons">
                    <button class="button" type="reset">Cancel</button>
                    <button class="button submit" type="submit">Pay ৳ {{ $amount }}</button>
                </div>
            </form>
        </section>
    </main>
@endsection
