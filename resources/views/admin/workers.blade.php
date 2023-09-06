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
                    <option value="Cleaning">Cleaning</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Pest Control">Pest Control</option>
                    <option value="Auto Care">Auto Care</option>
                </select>
            </div>

            <ul id="workers-list" class="workers">
                @if (count($workers) > 0)
                    @foreach ($workers as $worker)
                        <li class="worker-item card" data-category="{{ $worker->service }}">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ !empty($worker->image) ? url('upload/' . $worker->image) : url('image/user.jpg') }}"
                                        alt="">
                                </div>
                                <div class="col">
                                    <h3 class="name">{{ $worker->name }}</h3>
                                    <p class="service">{{ $worker->service }}</p>
                                    @switch($worker->rating)
                                        @case(1)
                                            <div class="rating">
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                            </div>
                                        @break

                                        @case(2)
                                            <div class="rating">
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                            </div>
                                        @break

                                        @case(3)
                                            <div class="rating">
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                            </div>
                                        @break

                                        @case(4)
                                            <div class="rating">
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                            </div>
                                        @break

                                        @case(5)
                                            <div class="rating">
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                                <iconify-icon class="rate" icon="ic:round-star"></iconify-icon>
                                            </div>
                                        @break

                                        @default
                                            <div class="rating">
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                                <iconify-icon icon="ic:round-star"></iconify-icon>
                                            </div>
                                    @endswitch
                                </div>
                            </div>
                            <a href="{{ route('admin.worker', ['id' => $worker->id]) }}" class="button">Profile</a>
                        </li>
                    @endforeach
                @else
                    <p style="text-align: center">No workers are available</p>
                @endif
            </ul>
        </section>
    </main>
@endsection
