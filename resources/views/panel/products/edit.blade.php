@extends('layouts.panel')

@section('content')

    {{-- Page Header --}}
    <div class="card border-0 shadow rounded-4 bg-white mb-2">

        <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

                <div>

                    <h5 class="mb-0 fw-semibold">
                        <i class="fa fa-edit me-2"></i>
                        Edit Product / Service
                    </h5>

                    <small class="text-muted">
                        Update product/service details.
                    </small>

                </div>

                <div class="d-flex flex-wrap gap-2">

                    <a href="{{ route('products.index') }}"
                       class="btn btn-primary d-flex align-items-center">

                        <i class="fa fa-list me-2"></i>
                        All Products

                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- Product Form --}}
    <div class="card border-0 shadow rounded-0 bg-white">

        <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">

            <form action="{{ route('products.update', $product->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row g-3">


                    {{-- Category --}}
                    <div class="col-md-3">

                        <label class="form-label">
                            Category <span class="text-danger">*</span>
                        </label>

                        <select name="category_id"
                                id="category_id"
                                class="form-select">

                            <option value="">
                                Select Category
                            </option>

                            @foreach($categories as $id => $name)

                                <option value="{{ $id }}"
                                    {{ old('category', $product->category->id) == $id ? 'selected' : '' }}>

                                    {{ $name }}

                                </option>

                            @endforeach

                        </select>

                        @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Subcategory --}}
                    <div class="col-md-3">

                        <label class="form-label">
                            Subcategory <span class="text-danger">*</span>
                        </label>

                        <select name="sub_category_id"
                                id="sub_category_id"
                                class="form-select">

                            <option value="">
                                Select Subcategory
                            </option>

                            @foreach($subCategories as $id => $name)

                                <option value="{{ $id }}"
                                    {{ old('sub_category', $product->subCategory->id) == $id ? 'selected' : '' }}>

                                    {{ $name }}

                                </option>

                            @endforeach

                        </select>

                        @error('sub_category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Name --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Name <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name', $product->name) }}"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="Enter product/service name">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Detail --}}
                    <div class="col-md-12">

                        <label class="form-label">
                            Detail
                        </label>

                        <textarea name="detail"
                                  rows="2"
                                  class="form-control @error('detail') is-invalid @enderror"
                                  placeholder="Enter product/service details">{{ old('detail', $product->detail) }}</textarea>

                        @error('detail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Country --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Country <span class="text-danger">*</span>
                        </label>

                        <select name="country_id"
                                id="country_id"
                                class="form-select @error('country_id') is-invalid @enderror">

                            <option value="">
                                Select Country
                            </option>

                            @foreach($countries as $country)

                                <option value="{{ $country->id }}"
                                    {{ old('country_id', $product->country_id) == $country->id ? 'selected' : '' }}>

                                    {{ $country->name }}

                                </option>

                            @endforeach

                        </select>

                        @error('country_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- State --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            State <span class="text-danger">*</span>
                        </label>

                        <select name="state_id"
                                id="state_id"
                                class="form-select @error('state_id') is-invalid @enderror">

                            <option value="">
                                Select State
                            </option>

                            @foreach($states as $state)

                                <option value="{{ $state->id }}"
                                    {{ old('state_id', $product->state_id) == $state->id ? 'selected' : '' }}>

                                    {{ $state->name }}

                                </option>

                            @endforeach

                        </select>

                        @error('state_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- City --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            City <span class="text-danger">*</span>
                        </label>

                        <select name="city_id"
                                id="city_id"
                                class="form-select @error('city_id') is-invalid @enderror">

                            <option value="">
                                Select City
                            </option>

                            @foreach($cities as $city)

                                <option value="{{ $city->id }}"
                                    {{ old('city_id', $product->city_id) == $city->id ? 'selected' : '' }}>

                                    {{ $city->name }}

                                </option>

                            @endforeach

                        </select>

                        @error('city_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Area --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Area <span class="text-danger">*</span>
                        </label>

                        <select name="area_id"
                                id="area_id"
                                class="form-select @error('area_id') is-invalid @enderror">

                            <option value="">
                                Select Area
                            </option>

                            @foreach($areas as $area)

                                <option value="{{ $area->id }}"
                                    {{ old('area_id', $product->area_id) == $area->id ? 'selected' : '' }}>

                                    {{ $area->name }}

                                </option>

                            @endforeach

                        </select>

                        @error('area_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Price --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Price <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                ₹
                            </span>

                            <input type="number"
                                   name="price"
                                   value="{{ old('price', $product->price) }}"
                                   min="0"
                                   step="0.01"
                                   class="form-control @error('price') is-invalid @enderror"
                                   placeholder="Enter price">

                        </div>

                        @error('price')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Image --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Image
                        </label>

                        <div class="input-group">

                            <input type="file"
                                   name="image"
                                   class="form-control @error('image') is-invalid @enderror"
                                   accept="image/*">

                        </div>

                        @error('image')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        @if(!empty($product->image))

                            <div class="mt-2">

                                <img src="{{ asset($product->image_url) }}"
                                     alt="{{ $product->name }}"
                                     width="80"
                                     height="80"
                                     class="rounded border"
                                     style="object-fit: cover;">

                            </div>

                        @endif

                    </div>


                    {{-- Buttons --}}
                    <div class="col-12 mt-4">

                        <button type="submit"
                                class="btn btn-primary px-4">

                            <i class="fa fa-save me-1"></i>
                            Update

                        </button>

                        <a href="{{ route('products.index') }}"
                           class="btn btn-secondary px-4">

                            Cancel

                        </a>

                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection


@push('scripts')

<script>

$(document).ready(function () {


    /*
    |--------------------------------------------------------------------------
    | Category -> Subcategory
    |--------------------------------------------------------------------------
    */

    $('#category_id').on('change', function () {

        let categorySlug = $(this).val();

        $('#sub_category_id')
            .html('<option value="">Loading...</option>');

        if (!categorySlug) {

            $('#sub_category_id')
                .html('<option value="">Select Subcategory</option>');

            return;
        }

        $.ajax({

            url: "{{ url('/admin/products/subcategories') }}/" + categorySlug,

            type: "GET",

            success: function (data) {

                $('#sub_category_id')
                    .html('<option value="">Select Subcategory</option>');

                $.each(data, function (key, value) {

                    $('#sub_category_id').append(

                        '<option value="' + value.slug + '">' +
                        value.name +
                        '</option>'

                    );

                });

            },

            error: function () {

                $('#sub_category_id')
                    .html('<option value="">Unable to load</option>');

            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Country -> State
    |--------------------------------------------------------------------------
    */

    $('#country_id').on('change', function () {

        let countryId = $(this).val();

        $('#state_id')
            .html('<option value="">Loading...</option>');

        $('#city_id')
            .html('<option value="">Select City</option>');

        $('#area_id')
            .html('<option value="">Select Area</option>');


        if (!countryId) {

            $('#state_id')
                .html('<option value="">Select State</option>');

            return;
        }


        $.ajax({

            url: "{{ url('/admin/products/states') }}/" + countryId,

            type: "GET",

            success: function (data) {

                $('#state_id')
                    .html('<option value="">Select State</option>');

                $.each(data, function (key, value) {

                    $('#state_id').append(

                        '<option value="' + value.id + '">' +
                        value.name +
                        '</option>'

                    );

                });

            },

            error: function () {

                $('#state_id')
                    .html('<option value="">Unable to load</option>');

            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | State -> City
    |--------------------------------------------------------------------------
    */

    $('#state_id').on('change', function () {

        let stateId = $(this).val();

        $('#city_id')
            .html('<option value="">Loading...</option>');

        $('#area_id')
            .html('<option value="">Select Area</option>');


        if (!stateId) {

            $('#city_id')
                .html('<option value="">Select City</option>');

            return;
        }


        $.ajax({

            url: "{{ url('/admin/products/cities') }}/" + stateId,

            type: "GET",

            success: function (data) {

                $('#city_id')
                    .html('<option value="">Select City</option>');

                $.each(data, function (key, value) {

                    $('#city_id').append(

                        '<option value="' + value.id + '">' +
                        value.name +
                        '</option>'

                    );

                });

            },

            error: function () {

                $('#city_id')
                    .html('<option value="">Unable to load</option>');

            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | City -> Area
    |--------------------------------------------------------------------------
    */

    $('#city_id').on('change', function () {

        let cityId = $(this).val();

        $('#area_id')
            .html('<option value="">Loading...</option>');


        if (!cityId) {

            $('#area_id')
                .html('<option value="">Select Area</option>');

            return;
        }


        $.ajax({

            url: "{{ url('/admin/products/areas') }}/" + cityId,

            type: "GET",

            success: function (data) {

                $('#area_id')
                    .html('<option value="">Select Area</option>');

                $.each(data, function (key, value) {

                    $('#area_id').append(

                        '<option value="' + value.id + '">' +
                        value.name +
                        '</option>'

                    );

                });

            },

            error: function () {

                $('#area_id')
                    .html('<option value="">Unable to load</option>');

            }

        });

    });

});

</script>

@endpush