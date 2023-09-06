@extends('admin.layout.adminLayout')

@section('title', '| Edit Resume')
@section('pageTitle', 'Edit Resume')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <form class="builder" action="{{ route('admin.worker-resume-update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <h3 class="r_heading">
                    Personal Information
                </h3>
                <div class="personal">
                    <div class="col">
                        <input type="hidden" name="worker_id" value="{{ $worker->id }}">

                        <div class="input">
                            <label for="worker_name">Name*</label>
                            <input type="text" name="worker_name" id="worker_name" value="{{ $worker->name }}" disabled
                                required>
                            <input type="hidden" name="worker_name" id="worker_name" value="{{ $worker->name }}" required>
                        </div>
                        <div class="input">
                            <label for="worker_email">Email*</label>
                            <input type="email" name="worker_email" id="worker_email" value="{{ $worker->email }}"
                                disabled required>
                            <input type="hidden" name="worker_email" id="worker_email" value="{{ $worker->email }}"
                                required>
                        </div>
                        <div class="input">
                            <label for="worker_phone">Phone*</label>
                            <input type="tel" name="worker_phone" id="worker_phone" value="{{ $worker->phone }}"
                                required>
                        </div>
                        <div class="input">
                            <label for="worker_address">Address*</label>
                            <input type="text" name="worker_address" id="worker_address" value="{{ $worker->address }}"
                                required>
                        </div>
                        <div class="input">
                            <label for="worker_service">Service*</label>
                            <input type="text" name="worker_service" id="worker_service" value="{{ $worker->service }}"
                                disabled required>
                            <input type="hidden" name="worker_service" id="worker_service" value="{{ $worker->service }}"
                                required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="nationality">Nationality*</label>
                            <input type="text" name="nationality" id="nationality" value="Bangladeshi" required>
                        </div>
                        <div class="input">
                            <label for="birth_date">Birth Date*</label>
                            <input type="date" name="birth_date" id="birth_date" required>
                        </div>
                        <div class="input">
                            <label for="religion">Religion*</label>
                            <select name="religion" id="religion" required>
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="cristan">Cristan</option>
                                <option value="budda">Budda</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="marital_status">Marital status*</label>
                            <select name="marital_status" id="marital_status" required>
                                <option value="unmarried">Unmarried</option>
                                <option value="married">Married</option>
                                <option value="widow">Widow</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h3 class="r_heading">
                    Work Experience
                </h3>
                <p class="r_sub_heading">Experience 1</p>
                <div class="work">
                    <div class="col">
                        <div class="input">
                            <label for="designation_1">Designation</label>
                            <input type="text" name="designation_1" id="designation_1" placeholder="Electrician">
                        </div>
                        <div class="input">
                            <label for="workplace_1">Workplace</label>
                            <input type="text" name="workplace_1" id="workplace_1" placeholder="Engineering Institute">
                        </div>
                        <div class="input">
                            <label for="time_frame_1">Time Frame</label>
                            <input type="text" name="time_frame_1" id="time_frame_1" placeholder="2015-Present">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="description_1">Description</label>
                            <textarea name="description_1" id="description_1" placeholder="Describe your job here ..."></textarea>
                        </div>
                    </div>
                </div>
                <p class="r_sub_heading">Experience 2</p>
                <div class="work">
                    <div class="col">
                        <div class="input">
                            <label for="designation_2">Designation</label>
                            <input type="text" name="designation_2" id="designation_2" placeholder="Electrician">
                        </div>
                        <div class="input">
                            <label for="workplace_2">Workplace</label>
                            <input type="text" name="workplace_2" id="workplace_2"
                                placeholder="Engineering Institute">
                        </div>
                        <div class="input">
                            <label for="time_frame_2">Time Frame</label>
                            <input type="text" name="time_frame_2" id="time_frame_2" placeholder="2015-Present">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="description_2">Description</label>
                            <textarea name="description_2" id="description_2" placeholder="Describe your job here ..."></textarea>
                        </div>
                    </div>
                </div>

                <h3 class="r_heading">
                    education and qualifications
                </h3>
                <p class="r_sub_heading">Qualification 1</p>
                <div class="education">
                    <div class="col">
                        <div class="input">
                            <label for="exam_1">Examination</label>
                            <input type="text" name="exam_1" id="exam_1" placeholder="SSC">
                        </div>
                        <div class="input">
                            <label for="institute_1">Institute</label>
                            <input type="text" name="institute_1" id="institute_1"
                                placeholder="Municipal Model High School">
                        </div>
                        <div class="input">
                            <label for="session_1">Session</label>
                            <input type="text" name="session_1" id="session_1" placeholder="2013-2015">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="details_1">Description</label>
                            <textarea name="details_1" id="details_1" placeholder="Describe here ..."></textarea>
                        </div>
                    </div>
                </div>
                <p class="r_sub_heading">Qualification 2</p>
                <div class="education">
                    <div class="col">
                        <div class="input">
                            <label for="exam_2">Examination</label>
                            <input type="text" name="exam_2" id="exam_2" placeholder="HSC">
                        </div>
                        <div class="input">
                            <label for="institute_2">Institute</label>
                            <input type="text" name="institute_2" id="institute_2" placeholder="Cambrina College">
                        </div>
                        <div class="input">
                            <label for="session_2">Session</label>
                            <input type="text" name="session_2" id="session_2" placeholder="2015-2017">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="details_2">Description</label>
                            <textarea name="details_2" id="details_2" placeholder="Describe here ..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <button class="button" type="reset">Cancel</button>
                    <button class="button submit" type="submit">Build</button>
                </div>
            </form>
        </section>
    </main>
@endsection
