@extends('admin.layout.adminLayout')

@section('title', '| Edit Worker')
@section('pageTitle', 'Edit Worker Profile')

@section('main')
    <main id="cProfile">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- personal information -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mingcute:user-info-fill"></iconify-icon>
                        </div>
                        <p>worker information</p>
                    </div>
                    <div class="card_body">
                        <form class="personal_info" method="POST" enctype="multipart/form-data"
                            action="{{ route('admin.update-worker', ['id' => $worker->id]) }}">
                            @csrf
                            <div class="input">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" value="{{ $worker->name }}" required>
                            </div>
                            <div class="input">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" value="{{ $worker->email }}" required>
                            </div>
                            <div class="input">
                                <label for="role">user role</label>
                                <input type="text" name="role" id="role" value="{{ $worker->role }}" required
                                    disabled>
                                <input type="hidden" name="role" value="{{ $worker->role }}">
                            </div>
                            <div class="input">
                                <label for="service">Service</label>
                                <select name="service" id="service" required>
                                    <option value="" disabled selected>Select worker service type</option>
                                    <option value="Cleaning">Cleaning</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="Pest Control">Pest Control</option>
                                    <option value="Auto Care">Auto Care</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="phone">phone</label>
                                <input type="tel" name="phone" id="phone" value="{{ $worker->phone }}" required>
                            </div>
                            <div class="input">
                                <label for="address">address</label>
                                <input type="text" name="address" id="address" value="{{ $worker->address }}" required>
                            </div>
                            <hr>
                            <div class="buttons">
                                <button type="reset" class="button reset">Cancel</button>
                                <button type="submit" class="button submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- change password -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="solar:lock-password-bold"></iconify-icon>
                        </div>
                        <p>change password</p>
                    </div>
                    <div class="card_body">
                        <form class="change_pass" action="javascript:void()" method="post">
                            <div class="input">
                                <label for="old_pass">Old Password</label>
                                <input type="password" name="old_pass" id="oldPass" required>
                            </div>
                            <div class="input">
                                <label for="new_pass">New Password</label>
                                <input type="password" name="new_pass" id="newPass" required>
                            </div>
                            <hr>
                            <div class="buttons">
                                <button type="submit" class="button submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
