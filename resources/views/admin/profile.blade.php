@extends('admin.layout.adminLayout')

@section('title', '| Admin Profile')
@section('pageTitle', 'Admin Profile')

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
                        <p>information</p>
                    </div>
                    <div class="card_body">
                        <form class="personal_info">
                            <div class="input">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" value="Kajer Dokan Admin" disabled>
                            </div>
                            <div class="input">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" value="kajerdoaknadmin@mail.com"
                                    disabled>
                            </div>
                            <div class="input">
                                <label for="role">user role</label>
                                <input type="text" name="role" id="role" value="Admin" disabled>
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
