@extends('layouts.panel')

@section('content')

    <div class="card border-0 shadow rounded-4 bg-white mb-2">
        <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h5 class="mb-0 fw-semibold">
                        <i class="fa fa-plus-circle me-2"></i>
                        Add Product / Service
                    </h5>
                    <small class="text-muted">Create, edit, and manage system products.</small>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('products.create') }}" class="btn btn-primary d-flex align-items-center">
                        <i class="fa fa-plus me-2"></i> All Products
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Products Table Card --}}
    <div class="card border-0 shadow rounded-0 bg-white">
        {{-- Card Header with Filter --}}
        <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">

            <form action="{{ route('products.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

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

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
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

                        </select>
                    </div>

                    {{-- Name --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            Name <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
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
                                  class="form-control"
                                  placeholder="Enter product/service details">{{ old('detail') }}</textarea>
                    </div>





                    {{-- Country --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            Country <span class="text-danger">*</span>
                        </label>

                        <select name="country_id"
                                id="country_id"
                                class="form-select">

                            <option value="">
                                Select Country
                            </option>

                            @foreach($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ old('country_id') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    {{-- State --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            State <span class="text-danger">*</span>
                        </label>

                        <select name="state_id"
                                id="state_id"
                                class="form-select">

                            <option value="">
                                Select State
                            </option>

                        </select>
                    </div>


                    {{-- City --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            City <span class="text-danger">*</span>
                        </label>

                        <select name="city_id"
                                id="city_id"
                                class="form-select">

                            <option value="">
                                Select City
                            </option>

                        </select>
                    </div>


                    {{-- Area --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            Area <span class="text-danger">*</span>
                        </label>

                        <select name="area_id"
                                id="area_id"
                                class="form-select">

                            <option value="">
                                Select Area
                            </option>

                        </select>
                    </div>


                    {{-- Price --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            Price
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                ₹
                            </span>

                            <input type="number"
                                   name="price"
                                   value="{{ old('price') }}"
                                   min="0"
                                   step="0.01"
                                   class="form-control"
                                   placeholder="Enter price">

                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="col-md-6">
                        <label class="form-label">
                            Image
                        </label>

                        <div class="input-group">

                            <input type="file"
                                   name="image"
                                   class="form-control"
                                   accept="image/*">

                        </div>
                    </div>

                    {{-- Buttons --}}
                    <div class="col-12 mt-4">

                        <button type="submit"
                                class="btn btn-primary px-4">

                            <i class="fa fa-save me-1"></i>
                            Save
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

        let categoryId = $(this).val();

        $('#sub_category_id')
            .html('<option value="">Loading...</option>');

        if (!categoryId) {

            $('#sub_category_id')
                .html('<option value="">Select Subcategory</option>');

            return;
        }

        $.ajax({

            url: "{{ url('/admin/products/subcategories') }}/" + categoryId,

            type: "GET",

            success: function (data) {

                $('#sub_category_id')
                    .html('<option value="">Select Subcategory</option>');

                $.each(data, function (key, value) {

                    $('#sub_category_id').append(
                        '<option value="' + value.id + '">' +
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