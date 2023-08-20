@extends('worker.layout.workerLayout')

@section('title', '| Profile')
@section('pageTitle', 'Profile')

@section('main')
    <main id="cProfile">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="row">
                <!-- personal information -->
                <div class="card">
                    <div class="card_heading">
                        <div class="icon">
                            <iconify-icon icon="mingcute:user-info-fill"></iconify-icon>
                        </div>
                        <p>personal information</p>
                    </div>
                    <div class="card_body">
                        <form class="personal_info" action="{{ route('worker.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                    disabled required>
                                <input type="hidden" name="name" id="name" value="{{ old('name', $user->name) }}"
                                    required>
                            </div>
                            <div class="input">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" value="{{ old('name', $user->email) }}"
                                    disabled required>
                                <input type="hidden" name="email" id="email" value="{{ old('name', $user->email) }}"
                                    required>
                            </div>
                            <div class="input">
                                <label for="role">user role</label>
                                <input type="text" name="role" id="role" value="{{ old('name', $user->role) }}"
                                    required disabled>
                                <input type="hidden" name="role" id="role" value="{{ old('name', $user->role) }}"
                                    required>
                            </div>
                            <div class="input">
                                <label for="service">service type</label>
                                <input type="text" name="service" id="service"
                                    value="{{ old('name', $user->service) }}" disabled>
                            </div>
                            <div class="input">
                                <label for="phone">phone</label>
                                <input type="tel" name="phone" id="phone" value="{{ old('name', $user->phone) }}"
                                    placeholder="Update your phone">
                            </div>
                            <div class="input">
                                <label for="add">address</label>
                                <input type="text" name="address" id="address"
                                    value="{{ old('name', $user->address) }}" placeholder="Update your address">
                            </div>
                            <div class="input">
                                <label for="photo">photo</label>
                                <div class="input_img" id="image">
                                    <img src="{{ !empty($user->image) ? url('upload/' . $user->image) : url('image/user.jpg') }}"
                                        alt="" class="user_image" id="showImage">
                                    <label for="uploadImage" class="upload_img">Upload your image</label>
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
                                <input type="password" name="old_pass" id="oldPass">
                            </div>
                            <div class="input">
                                <label for="new_pass">New Password</label>
                                <input type="password" name="new_pass" id="newPass">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
