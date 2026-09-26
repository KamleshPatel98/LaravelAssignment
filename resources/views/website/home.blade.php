@extends('layouts.website')

@section('title', 'MarketHub - Buy & Sell Near You')

@section('content')

{{-- Search --}}
<section class="search-section">

    <div class="container">

        <form action="#" method="GET">

            <div class="row g-0 search-box">

                <div class="col-lg-3 search-location">

                    <select name="city"
                        class="form-select select-dropdown">

                    <option value="">
                        All Locations
                    </option>

                    @foreach ($cities as $id => $name)
                        <option value="{{ $id }}"
                            {{ request('city') == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach

                </select>

                </div>

                <div class="col-lg-8">

                    <input type="text"
                        name="name"
                        class="form-control"
                        placeholder="What are you looking for?"
                        value="{{ request('name') }}">

                </div>

                <div class="col-lg-1">

                    <button type="submit"
                            class="search-btn w-100 h-100">

                        <i class="fa fa-search"></i>

                    </button>

                </div>

            </div>

        </form>

    </div>

</section>


{{-- Hero --}}
<section class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <h1 class="hero-title">
                    Find what you need.
                    <br>
                    Sell what you don't.
                </h1>

                <p class="hero-text mt-3">
                    Discover great products and services
                    from people and businesses near you.
                </p>

                <a href="{{ route('loginForm') }}"
                   class="hero-btn d-inline-block mt-3">
                    <i class="fa fa-plus me-2"></i>
                    Start Selling
                </a>

            </div>

            <div class="col-lg-5 text-center d-none d-lg-block">

                <i class="fa fa-store"
                   style="font-size:180px;color:#00a49f;"></i>

            </div>

        </div>

    </div>

</section>


{{-- Categories --}}
<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="section-title mb-0">
                Explore Categories
            </h2>

            <a href="#" class="text-dark fw-semibold">
                View All
                <i class="fa fa-arrow-right ms-1"></i>
            </a>

        </div>

        <div class="row g-3">

            @foreach($categories as $slug => $name)

                <div class="col-6 col-md-4 col-lg-3">

                    <a href="{{ route('category.products', $slug) }}">

                        <div class="category-card">

                            <div class="category-icon">
                                <i class="fa fa-layer-group"></i>
                            </div>

                            <div class="category-name">
                                {{ $name }}
                            </div>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- Latest Listings --}}
<section class="pb-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="section-title mb-0">
                Latest Listings
            </h2>

            <a href="{{ route('products') }}" class="text-dark fw-semibold">
                View All
                <i class="fa fa-arrow-right ms-1"></i>
            </a>

        </div>

        <div class="row g-4">

            @forelse($products ?? [] as $product)

                <div class="col-6 col-md-4 col-lg-3">

                    <a href="{{ route('productShow', $product->slug) }}">

                        <div class="product-card">

                            <div class="position-relative">

                                <img src="{{ $product->image_url ?? 'https://placehold.co/600x400?text=No+Image' }}"
                                     class="product-image"
                                     alt="{{ $product->name }}">

                                <button type="button"
                                        class="favorite-btn"
                                        onclick="event.preventDefault();">

                                    <i class="fa-regular fa-heart"></i>

                                </button>

                            </div>

                            <div class="product-body">

                                <div class="product-price">

                                    ₹{{ number_format($product->price ?? 0) }}

                                </div>

                                <div class="product-name">

                                    {{ Str::limit($product->name, 45) }}

                                </div>

                                <div class="product-location">

                                    <i class="fa fa-location-dot me-1"></i>

                                    {{ $product->city->name ?? '' }}

                                </div>

                                <div class="product-date mt-2">

                                    {{ $product->created_at?->diffForHumans() }}

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <i class="fa fa-box-open fa-3x text-muted"></i>

                        <h5 class="mt-3">
                            No listings available
                        </h5>

                        <p class="text-muted">
                            Be the first one to post a listing.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection