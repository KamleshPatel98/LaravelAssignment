@extends('layouts.website')

@section('title', $product->name)

@section('content')

<div class="container py-5">

    {{-- Breadcrumb --}}
    <div class="mb-4">

        <a href="{{ route('home') }}"
           class="text-muted">
            Home
        </a>

        <span class="mx-2 text-muted">/</span>

        <span class="text-muted">
            {{ $product->category->name ?? '' }}
        </span>

        <span class="mx-2 text-muted">/</span>

        <span>
            {{ $product->name }}
        </span>

    </div>


    <div class="row g-4">

        {{-- LEFT --}}
        <div class="col-lg-7">

            <div class="detail-card p-3">

                <img src="{{ $product->image_url ?? 'https://placehold.co/900x600?text=No+Image' }}"
                     class="detail-image"
                     alt="{{ $product->name }}">

            </div>


            {{-- Description --}}
            <div class="detail-card p-4 mt-4">

                <h4 class="fw-bold mb-3">
                    Description
                </h4>

                <p class="text-muted mb-0"
                   style="line-height:1.8;">

                    {{ $product->detail ?? 'No description available.' }}

                </p>

            </div>


            {{-- Details --}}
            <div class="detail-card p-4 mt-4">

                <h4 class="fw-bold mb-4">
                    Details
                </h4>

                <div class="row g-3">

                    <div class="col-md-6">

                        <small class="text-muted">
                            Category
                        </small>

                        <div class="fw-semibold">
                            {{ $product->category->name ?? '-' }}
                        </div>

                    </div>

                    <div class="col-md-6">

                        <small class="text-muted">
                            Subcategory
                        </small>

                        <div class="fw-semibold">
                            {{ $product->subCategory->name ?? '-' }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- RIGHT --}}
        <div class="col-lg-5">

            <div class="detail-card p-4">

                {{-- Price --}}
                <div class="detail-price">

                    @if($product->price)
                        ₹{{ number_format($product->price) }}
                    @else
                        Contact for Price
                    @endif

                </div>


                {{-- Product Name --}}
                <h2 class="h4 fw-semibold mt-3">

                    {{ $product->name }}

                </h2>


                {{-- Location --}}
                <div class="text-muted mt-3">

                    <i class="fa fa-location-dot me-2"></i>

                    {{ $product->area->name ?? '' }},
                    {{ $product->city->name ?? '' }},
                    {{ $product->state->name ?? '' }}

                </div>


                <div class="d-flex justify-content-between
                            text-muted small mt-3">

                    <span>
                        {{ $product->created_at?->diffForHumans() }}
                    </span>

                    <span>
                        ID: {{ $product->id }}
                    </span>

                </div>


                <hr class="my-4">


                {{-- Seller --}}
                <h5 class="fw-bold mb-3">
                    Seller
                </h5>

                <div class="d-flex align-items-center">

                    <div class="seller-avatar">

                        <i class="fa fa-user"></i>

                    </div>

                    <div class="ms-3">

                        <div class="fw-bold">

                            {{ $product->user->name ?? 'Seller' }}

                        </div>

                        <small class="text-muted">
                            Member
                        </small>

                    </div>

                </div>


                <button class="contact-btn mt-4">

                    <i class="fa fa-phone me-2"></i>

                    Show Contact

                </button>


                <button class="btn btn-outline-dark w-100 mt-2">

                    <i class="fa-regular fa-message me-2"></i>

                    Chat with Seller

                </button>

            </div>


            {{-- Safety --}}
            <div class="detail-card p-4 mt-4">

                <h6 class="fw-bold">

                    <i class="fa fa-shield-halved me-2"></i>

                    Safety Tips

                </h6>

                <ul class="small text-muted mt-3 mb-0">

                    <li class="mb-2">
                        Meet in a safe public place.
                    </li>

                    <li class="mb-2">
                        Never share your OTP or password.
                    </li>

                    <li>
                        Check the product before payment.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

@endsection