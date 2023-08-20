@extends('admin.layout.adminLayout')

@section('title', '| Worker Resume')
@section('pageTitle', 'Worker Resume')

@section('main')
    <main id="resume">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="buttons">
                <button class="button" id="download-section-pdf-btn">
                    <iconify-icon icon="material-symbols:download"></iconify-icon>Download
                </button>
                <a href="{{ route('admin.edit-worker-resume') }}" class="button submit"><iconify-icon
                        icon="iconamoon:edit-fill"></iconify-icon>Edit</a>
            </div>

            <div class="resume" id="section-to-download" style="font-size: 12px;">
                <div class="head"
                    style="  display: flex;
                align-items: center;
                gap: 20px;
                margin-bottom: 25px;">
                    <img src="{{ asset('image/user.jpg') }}" alt=""
                        style="
                            width: 100px;
                            height: 100px;
                            object-fit: cover;
                            border-radius: 5px;
                            border: solid 1px rgba(0, 0, 0, 0.2);
                        ">
                    <h1 class="name"
                        style="  font-size: 24px;
                    text-transform: capitalize;
                    font-weight: 600;">
                        jimmy polo</h1>
                </div>
                <div class="body">
                    <h3 class="r_heading"
                        style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                        personal details
                    </h3>
                    <div class="textarea personal"
                        style="  display: flex;
                    flex-direction: column;
                    gap: 5px;">
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">name: </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">Jimmy Polo</dd>
                        </dl>
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">nationality:
                            </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">Bangladeshi</dd>
                        </dl>
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">birth date: </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">3 Aug, 1998</dd>
                        </dl>
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">religion: </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">Islam</dd>
                        </dl>
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">marital status:
                            </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">Unmarried</dd>
                        </dl>
                        <dl style="display: flex;">
                            <dt style="  flex: 3;
                            text-transform: capitalize;">service: </dt>
                            <dd style="  flex: 5;
                            font-weight: 500;">Plumbing</dd>
                        </dl>
                    </div>
                    <h3 class="r_heading"
                        style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                        work experience
                    </h3>
                    <div class="textarea">
                        <div class="item" style="margin-bottom: 5px;">
                            <p><b>Lorem, ipsum dolor.</b></p>
                            <p><i>Lorem ipsum dolor sit amet.</i></p>
                            <p>2015 - Present</p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam harum, sit at
                                ab minus repudiandae explicabo provident eaque. Recusandae minima eligendi
                                suscipit exercitationem illum sint, officia sapiente animi odit. Dolorum numquam
                                fugit esse, a totam, maxime provident cum aliquid commodi non adipisci.
                                Molestiae repellat, quasi sit laborum dolorum esse fugiat.
                            </p>
                        </div>
                        <div class="item" style="margin-bottom: 5px;">
                            <p><b>Lorem, ipsum dolor.</b></p>
                            <p><i>Lorem ipsum dolor sit amet.</i></p>
                            <p>2015 - Present</p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam harum, sit at
                                ab minus repudiandae explicabo provident eaque. Recusandae minima eligendi
                                suscipit exercitationem illum sint, officia sapiente animi odit. Dolorum numquam
                                fugit esse, a totam, maxime provident cum aliquid commodi non adipisci.
                                Molestiae repellat, quasi sit laborum dolorum esse fugiat.
                            </p>
                        </div>
                    </div>
                    <h3 class="r_heading"
                        style="  font-size: 18px;
                    font-weight: 600;
                    text-transform: capitalize;
                    margin-top: 20px;
                    margin-bottom: 10px;">
                        education and qualifications
                    </h3>
                    <div class="textarea">
                        <div class="item" style="margin-bottom: 5px;">
                            <p><b>SSC</b></p>
                            <p><i>Municipal Model High School</i></p>
                            <p>2010 - 2015</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, enim a. Voluptate
                                facilis nam explicabo reprehenderit maxime! Vel, sapiente sunt.
                            </p>
                        </div>
                        <div class="item" style="margin-bottom: 5px;">
                            <p><b>HSC</b></p>
                            <p><i>Cambrian College</i></p>
                            <p>2015 - 2017</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, enim a. Voluptate
                                facilis nam explicabo reprehenderit maxime! Vel, sapiente sunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
