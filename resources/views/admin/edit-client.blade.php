@extends('admin.layout.adminLayout')

@section('title', '| Edit Client')
@section('pageTitle', 'Edit Client')

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
                        <p>client information</p>
                    </div>
                    <div class="card_body">
                        <form class="personal_info">
                            <div class="input">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" value="Jimmy Polo" required>
                            </div>
                            <div class="input">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" value="jimmypolo@mail.com" required>
                            </div>
                            <div class="input">
                                <label for="role">user role</label>
                                <select name="role" id="role" required>
                                    <option value="client">Client</option>
                                    <option value="worker">Worker</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="phone">phone</label>
                                <input type="tel" name="phone" id="phone" value="+8801400492967" required>
                            </div>
                            <div class="input">
                                <label for="add">address</label>
                                <input type="text" name="add" id="add"
                                    value="876 Askarabad, Dewanhat, Chattogram-4000" required>
                            </div>
                            <div class="input">
                                <label for="photo">photo</label>
                                <div class="input_img">
                                    <img src="{{ asset('image/user.jpg') }}" alt="" class="user_image"
                                        id="image">
                                    <label for="uploadImage" class="upload_img">Upload your photo</label>
                                    <input type="file" name="image" id="uploadImage" accept="image/*">
                                </div>
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
