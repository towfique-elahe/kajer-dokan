@extends('admin.layout.adminLayout')

@section('title', '| Edit Resume')
@section('pageTitle', 'Edit Resume')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <form class="builder" action="javascript:void()" method="post">
                <h3 class="r_heading">
                    Personal Information
                </h3>
                <div class="personal">
                    <div class="col">
                        <div class="input">
                            <label for="name">Name*</label>
                            <input type="text" name="name" id="name" value="Jimmy Polo" required>
                        </div>
                        <div class="input">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" value="jimmypolo@email.com" required>
                        </div>
                        <div class="input">
                            <label for="phone">Phone*</label>
                            <input type="tel" name="phone" id="phone" value="+8801400492967" required>
                        </div>
                        <div class="input">
                            <label for="address">Address*</label>
                            <input type="text" name="address" id="address"
                                value="876 Askarabad, Dewanhat, Chattogram - 4100" required>
                        </div>
                        <div class="input">
                            <label for="service">Service*</label>
                            <select name="service" id="service" required>
                                <option value="" disabled selected>Select your service type</option>
                                <option value="cleaing">Cleaning</option>
                                <option value="eletrical">Electrical</option>
                                <option value="plumbing">Plumbing</option>
                                <option value="pest_control">Pest Control</option>
                                <option value="auto_care">Auto Care</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="nationality">Nationality*</label>
                            <input type="text" name="nationality" id="nationality" value="Bangladeshi" required>
                        </div>
                        <div class="input">
                            <label for="birth">Birth Date*</label>
                            <input type="date" name="birth" id="birth" required>
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
                            <label for="marital">Marital status*</label>
                            <select name="marital" id="marital" required>
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
                            <label for="designation">Designation</label>
                            <input type="text" name="designation" id="designation" placeholder="Electrician">
                        </div>
                        <div class="input">
                            <label for="workplace">Workplace</label>
                            <input type="text" name="workplace" id="workplace" placeholder="Engineering Institute">
                        </div>
                        <div class="input">
                            <label for="time">Time Frame</label>
                            <input type="text" name="time" id="time" placeholder="2015-Present">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" placeholder="Describe your job here ..."></textarea>
                        </div>
                    </div>
                </div>
                <p class="r_sub_heading">Experience 2</p>
                <div class="work">
                    <div class="col">
                        <div class="input">
                            <label for="designation">Designation</label>
                            <input type="text" name="designation" id="designation" placeholder="Electrician">
                        </div>
                        <div class="input">
                            <label for="workplace">Workplace</label>
                            <input type="text" name="workplace" id="workplace" placeholder="Engineering Institute">
                        </div>
                        <div class="input">
                            <label for="time">Time Frame</label>
                            <input type="text" name="time" id="time" placeholder="2015-Present">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" placeholder="Describe your job here ..."></textarea>
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
                            <label for="exam">Examination</label>
                            <input type="text" name="exam" id="exam" placeholder="SSC">
                        </div>
                        <div class="input">
                            <label for="institute">Institute</label>
                            <input type="text" name="institute" id="institute"
                                placeholder="Municipal Model High School">
                        </div>
                        <div class="input">
                            <label for="session">Session</label>
                            <input type="text" name="session" id="session" placeholder="2013-2015">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" placeholder="Describe here ..."></textarea>
                        </div>
                    </div>
                </div>
                <p class="r_sub_heading">Qualification 2</p>
                <div class="education">
                    <div class="col">
                        <div class="input">
                            <label for="exam">Examination</label>
                            <input type="text" name="exam" id="exam" placeholder="HSC">
                        </div>
                        <div class="input">
                            <label for="institute">Institute</label>
                            <input type="text" name="institute" id="institute" placeholder="Cambrina College">
                        </div>
                        <div class="input">
                            <label for="session">Session</label>
                            <input type="text" name="session" id="session" placeholder="2015-2017">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" placeholder="Describe here ..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <button class="button" type="reset">Cancel</button>
                    <button class="button submit" type="submit">Update</button>
                </div>
            </form>
        </section>
    </main>
@endsection
