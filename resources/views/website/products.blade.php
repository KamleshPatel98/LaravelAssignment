@extends('layouts.website')

@section('title', 'Products')

@section('content')

<div class="container py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">Latest Listings</h4>
            <p class="text-muted mb-0">
                {{ $products->total() }} products available
            </p>
        </div>

        <select class="form-select sort-select">
            <option value="">Sort By</option>
            <option value="latest">Newest First</option>
            <option value="price_low">Price: Low to High</option>
            <option value="price_high">Price: High to Low</option>
        </select>

    </div>


    @if($products->count())

        <div class="row g-3">

            @foreach($products as $product)

                <div class="col-6 col-md-4 col-lg-3">

                    <a href="{{ route('productShow', $product->slug) }}"
                       class="text-decoration-none text-dark">

                        <div class="product-card">

                            {{-- Image --}}
                            <div class="product-image">

                                @if(!empty($product->image_url))

                                    <img src="{{ asset($product->image_url) }}"
                                         alt="{{ $product->name }}">

                                @else

                                    <div class="no-image">
                                        <i class="fa fa-image"></i>
                                    </div>

                                @endif


                                {{-- Favorite --}}
                                <button type="button"
                                        class="favorite-btn"
                                        onclick="event.preventDefault();">

                                    <i class="far fa-heart"></i>

                                </button>

                            </div>


                            {{-- Product Info --}}
                            <div class="product-content">

                                {{-- Price --}}
                                <div class="product-price">

                                    @if($product->price !== null)

                                        ₹{{ number_format($product->price, 0) }}

                                    @else

                                        Contact

                                    @endif

                                </div>


                                {{-- Name --}}
                                <h6 class="product-name">
                                    {{ $product->name }}
                                </h6>


                                {{-- Category --}}
                                <div class="product-category">

                                    {{ $product->subCategory->name
                                        ?? $product->category->name
                                        ?? '' }}

                                </div>


                                {{-- Location --}}
                                <div class="product-location">

                                    <i class="fa fa-location-dot me-1"></i>

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
        <div class="mt-4 d-flex justify-content-center">

            {{ $products->withQueryString()->links() }}

        </div>

    @else

        {{-- Empty --}}
        <div class="empty-products">

            <div class="empty-icon">
                <i class="fa fa-box-open"></i>
            </div>

            <h5 class="fw-bold mt-3">
                No Products Found
            </h5>

            <p class="text-muted">
                No listings are available right now.
            </p>

        </div>

    @endif

</div>

@endsection


@push('styles')

<style>

.sort-select {
    width: 190px;
}


/* Product Card */

.product-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    overflow: hidden;
    height: 100%;
    transition: all .2s ease;
}

.product-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
}


/* Image */

.product-image {
    height: 210px;
    background: #f3f4f6;
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.no-image {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9ca3af;
    font-size: 40px;
}


/* Favorite */

.favorite-btn {
    position: absolute;
    top: 12px;
    right: 12px;

    width: 36px;
    height: 36px;

    border: 0;
    border-radius: 50%;

    background: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 17px;
}


/* Content */

.product-content {
    padding: 14px;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 7px;
}

.product-name {
    font-size: 15px;
    font-weight: 500;
    line-height: 1.4;

    margin-bottom: 7px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-category {
    font-size: 12px;
    color: #6b7280;
    margin-bottom: 8px;
}

.product-location {
    font-size: 12px;
    color: #6b7280;
}

.product-date {
    font-size: 11px;
    color: #9ca3af;
    margin-top: 5px;
}


/* Empty */

.empty-products {
    min-height: 400px;

    border: 1px dashed #d1d5db;
    border-radius: 12px;

    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;

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


/* Tablet */

@media(max-width: 767px) {

    .product-image {
        height: 180px;
    }

    .product-content {
        padding: 11px;
    }

    .product-price {
        font-size: 17px;
    }

    .product-name {
        font-size: 14px;
    }

}


/* Mobile */

@media(max-width: 575px) {

    .sort-select {
        width: 130px;
        font-size: 12px;
    }

    .product-image {
        height: 155px;
    }

    .product-location {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

}

</style>

@endpush