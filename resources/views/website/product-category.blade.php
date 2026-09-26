@extends('layouts.website')

@section('title', $category->name . ' - Listings')

@section('content')

<div class="container py-4">

    {{-- Breadcrumb --}}
    <div class="mb-3">
        <small class="text-muted">
            Home
            <i class="fa fa-chevron-right mx-2"></i>
            {{ $category->name }}
        </small>
    </div>

    {{-- Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">
                {{ $category->name }}
            </h3>

            <p class="text-muted mb-0">
                {{ $products->total() }} listings found
            </p>
        </div>

        {{-- Sort --}}
        <select class="form-select listing-sort">
            <option>Newest First</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
        </select>
    </div>


    <div class="row g-4">

        {{-- Sidebar --}}
        <div class="col-lg-3">

            <div class="filter-box">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Filters</h5>

                    <a href="{{ route('category.products', $category->slug) }}"
                       class="small text-decoration-none">
                        Clear
                    </a>
                </div>

                <hr>

                {{-- Subcategories --}}
                <div class="mb-4">

                    <h6 class="fw-bold mb-3">
                        Subcategory
                    </h6>

                    @foreach($category->subCategories()->where('status', true)->orderBy('name')->get() as $subCategory)

                        <div class="form-check mb-2">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="sub{{ $subCategory->id }}"
                                value="{{ $subCategory->slug }}"
                            >

                            <label
                                class="form-check-label"
                                for="sub{{ $subCategory->id }}"
                            >
                                {{ $subCategory->name }}
                            </label>

                        </div>

                    @endforeach

                </div>

                <hr>

                {{-- Price --}}
                <div class="mb-4">

                    <h6 class="fw-bold mb-3">
                        Price
                    </h6>

                    <div class="row g-2">

                        <div class="col-6">
                            <input
                                type="number"
                                class="form-control"
                                placeholder="Min"
                            >
                        </div>

                        <div class="col-6">
                            <input
                                type="number"
                                class="form-control"
                                placeholder="Max"
                            >
                        </div>

                    </div>

                </div>

                <hr>

                {{-- Location --}}
                <div>

                    <h6 class="fw-bold mb-3">
                        Location
                    </h6>

                    <select class="form-select mb-2">
                        <option>Select City</option>
                    </select>

                    <select class="form-select">
                        <option>Select Area</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- Products --}}
        <div class="col-lg-9">

            {{-- Mobile filter button --}}
            <button
                class="btn btn-outline-dark d-lg-none w-100 mb-3"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileFilters"
            >
                <i class="fa fa-filter me-2"></i>
                Filters
            </button>


            @if($products->count())

                <div class="row g-3">

                    @foreach($products as $product)

                        <div class="col-md-6 col-xl-4">

                            <a
                                href="{{ route('productShow', $product->slug) }}"
                                class="text-decoration-none text-dark"
                            >

                                <div class="product-card h-100">

                                    {{-- Image --}}
                                    <div class="product-image">

                                        <div class="image-placeholder">
                                            <img src="{{ $product->image_url ?? 'https://placehold.co/900x600?text=No+Image' }}"
                                                class="detail-image"
                                                alt="{{ $product->name }}">
                                        </div>

                                        <span class="favorite-btn">
                                            <i class="far fa-heart"></i>
                                        </span>

                                    </div>


                                    {{-- Content --}}
                                    <div class="p-3">

                                        {{-- Price --}}
                                        <div class="product-price">
                                            @if($product->price !== null)
                                                ₹{{ number_format($product->price, 0) }}
                                            @else
                                                Contact
                                            @endif
                                        </div>


                                        {{-- Name --}}
                                        <h6 class="product-title">
                                            {{ $product->name }}
                                        </h6>


                                        {{-- Category --}}
                                        <small class="text-muted d-block mb-2">
                                            {{ $product->subCategory->name ?? $product->category->name }}
                                        </small>


                                        {{-- Location --}}
                                        <div class="product-location">

                                            <i class="fa fa-map-marker-alt me-1"></i>

                                            {{ $product->area->name ?? '' }},
                                            {{ $product->city->name ?? '' }}

                                        </div>


                                        {{-- Date --}}
                                        <div class="product-date">

                                            {{ $product->created_at->diffForHumans() }}

                                        </div>

                                    </div>

                                </div>

                            </a>

                        </div>

                    @endforeach

                </div>


                {{-- Pagination --}}
                <div class="mt-4">

                    {{ $products->links() }}

                </div>

            @else

                <div class="empty-listing">

                    <div class="empty-icon">
                        <i class="fa fa-search"></i>
                    </div>

                    <h5 class="fw-bold mt-3">
                        No listings found
                    </h5>

                    <p class="text-muted">
                        There are no listings in this category yet.
                    </p>

                </div>

            @endif

        </div>

    </div>

</div>


{{-- Mobile Filters --}}
<div
    class="offcanvas offcanvas-start"
    tabindex="-1"
    id="mobileFilters"
>

    <div class="offcanvas-header">

        <h5 class="fw-bold mb-0">
            Filters
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
        ></button>

    </div>

    <div class="offcanvas-body">

        <h6 class="fw-bold mb-3">
            Subcategory
        </h6>

        @foreach($category->subCategories()->where('status', true)->orderBy('name')->get() as $subCategory)

            <div class="form-check mb-2">

                <input
                    class="form-check-input"
                    type="checkbox"
                >

                <label class="form-check-label">
                    {{ $subCategory->name }}
                </label>

            </div>

        @endforeach

        <hr>

        <h6 class="fw-bold mb-3">
            Price
        </h6>

        <div class="row g-2">

            <div class="col-6">
                <input
                    type="number"
                    class="form-control"
                    placeholder="Min"
                >
            </div>

            <div class="col-6">
                <input
                    type="number"
                    class="form-control"
                    placeholder="Max"
                >
            </div>

        </div>

    </div>

</div>

@endsection


@push('styles')

<style>

.listing-sort {
    width: 180px;
}

.filter-box {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 20px;
    position: sticky;
    top: 90px;
}

.product-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    overflow: hidden;
    transition: .2s ease;
}

.product-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,.08);
}

.product-image {
    height: 210px;
    background: #f3f4f6;
    position: relative;
}

.image-placeholder {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 42px;
    color: #adb5bd;
}

.favorite-btn {
    position: absolute;
    right: 12px;
    top: 12px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 8px;
}

.product-title {
    font-size: 15px;
    line-height: 1.4;
    margin-bottom: 5px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-location {
    color: #6b7280;
    font-size: 12px;
    margin-top: 10px;
}

.product-date {
    color: #9ca3af;
    font-size: 11px;
    margin-top: 5px;
}

.empty-listing {
    min-height: 400px;
    border: 1px dashed #d1d5db;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.empty-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #f3f4f6;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #9ca3af;
}

@media(max-width: 767px) {

    .listing-sort {
        width: 145px;
    }

    .product-image {
        height: 180px;
    }

}

@media(max-width: 575px) {

    .listing-sort {
        width: 130px;
        font-size: 13px;
    }

    .product-card {
        border-radius: 10px;
    }

    .product-image {
        height: 170px;
    }

}

</style>

@endpush