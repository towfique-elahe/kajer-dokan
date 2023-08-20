@extends('general.layout.generalLayout')

@section('title', '| Register')

@section('main')
    <section id="auth">
        @include('general.components.header')

        <div class="container">
            <div class="col">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h1 class="heading">Register</h1>
                    <hr>
                    <div class="inputs">
                        <div class="input">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="your name" required>
                        </div>
                        <div class="input">
                            <label for="role">Role</label>
                            <select name="role" id="role" required>
                                <option value="client">Client</option>
                                <option value="worker" id="worker">Worker</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="service">Service (Only for workers)</label>
                            <select name="service" id="service" required>
                                <option selected disabled value="">Select Service Type</option>
                                <option value="">I am client</option>
                                <option value="Cleaning">Cleaning</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Plumbing">Plumbing</option>
                                <option value="Pest Control">Pest Control</option>
                                <option value="Auto Care">Auto Care</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" placeholder="your phone">
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="your email" required>
                        </div>
                        <div class="input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="your password" required>
                        </div>
                        <div class="policy">
                            <input type="checkbox" name="policy" id="policy" required>
                            <p>
                                I’ve read and agree with your Privacy Policy and Terms & Conditions
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p class="link">
                        Have an account? <a href="{{ route('login') }}">Login Now</a>
                    </p>
                    <button type="submit" class="button">
                        {{ __('Register') }} <iconify-icon icon="maki:arrow"></iconify-icon>
                    </button>
                </form>
            </div>
            <div class="col">
                <img src="{{ asset('image/cleaning_service_1.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
