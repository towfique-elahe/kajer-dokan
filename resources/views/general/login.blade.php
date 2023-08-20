@extends('general.layout.generalLayout')

@section('title', '| Login')

@section('main')
    <section id="auth">
        @include('general.components.header')

        <div class="container">
            <div class="col">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1 class="heading">Login</h1>
                    <hr>
                    @if ($errors->any())
                        <div class="alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="inputs">
                        <div class="input">
                            <label for="role">Role</label>
                            <select name="role" id="role" required>
                                <option value="client">Client</option>
                                <option value="worker">Worker</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Type your email" required>
                        </div>
                        <div class="input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Type your password" required>
                        </div>
                    </div>
                    <hr>
                    <p class="link">
                        Dont have an account? <a href="{{ route('register') }}">Register Now</a>
                    </p>
                    <button type="submit" class="button">
                        {{ __('Login') }} <iconify-icon icon="maki:arrow"></iconify-icon>
                    </button>
                </form>
            </div>
            <div class="col">
                <img src="{{ asset('image/car_service.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
