@extends('admin.layout.adminLayout')

@section('title', '| Worker List')
@section('pageTitle', 'Worker List')

@section('main')
    <main id="cWorkers">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <input class="search_bar" type="text" id="search-bar" placeholder="Search workers...">

            <div class="filter">
                <label for="category-select">Filter by Service:</label>
                <select id="category-select" class="category-select">
                    <option value="all">All</option>
                    <option value="cleaning">Cleaning</option>
                    <option value="electrical">Electrical</option>
                    <option value="plumbing">Plumbing</option>
                    <option value="pest_control">Pest Control</option>
                    <option value="auto_care">Auto Care</option>
                </select>
            </div>

            <ul id="workers-list" class="workers">
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
                <li class="worker-item card" data-category="cleaning">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">Jimmy Polo</h3>
                            <p class="service">cleaning</p>
                            <div class="rating">
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                <iconify-icon icon="ic:round-star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.worker') }}" class="button">Profile</a>
                </li>
            </ul>
        </section>
    </main>
@endsection
