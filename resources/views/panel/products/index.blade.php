@extends('layouts.panel')

@section('title', 'Products Management')

@section('content')
{{-- Page Header Card --}}
<div class="card border-0 shadow rounded-4 bg-white mb-2">
    <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div>
                <h5 class="mb-0 fw-semibold">Products Management</h5>
                <small class="text-muted">Create, edit, and manage system products.</small>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('products.create') }}" class="btn btn-primary d-flex align-items-center">
                    <i class="fa fa-plus me-2"></i> Add Products
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Products Table Card --}}
<div class="card border-0 shadow rounded-0 bg-white">
    {{-- Card Header with Filter --}}
    <div class="card-header bg-white border-bottom py-3 px-3 px-md-4">
        <form action="{{ route('products.index') }}" method="GET">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <h5 class="mb-0 fw-semibold">🎯 Products List</h5>
                </div>
                <div class="col-md-3">
                    <input type="text" name="name" value="{{ request('name') }}" placeholder="Search by name..." class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>

                        <option value="1"
                            @selected(request('status') == 1)>
                            Active
                        </option>

                        <option value="0"
                            @selected(request('status') == 0)>
                            Inactive
                        </option>
                    </select>
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search me-1"></i> Search
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                        <i class="fa fa-refresh me-1"></i> Reset
                    </a>
                </div>
            </div>
        </form>
    </div>

    {{-- Table Section --}}
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="rolesTable">
                <thead class="table-light">
                    <tr>
                        <th class="text-end">SN.</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($records as $row)
                        <tr>
                            {{-- Serial Number --}}
                            <td class="text-end">
                                {{ ($records->currentPage() - 1) * $records->perPage() + $loop->iteration }}
                            </td>

                            {{-- Name --}}
                            <td>
                                <strong>{{ $row->name ?? '' }}</strong>
                            </td>

                            {{-- Category --}}
                            <td>
                                {{ $row->category->name ?? '' }}
                            </td>

                            {{-- Subcategory --}}
                            <td>
                                {{ $row->subCategory->name ?? '' }}
                            </td>

                            {{-- Location --}}
                            <td>
                                <div>
                                    <strong>{{ $row->area->name ?? '' }}</strong>
                                </div>

                                <small class="text-muted">
                                    {{ $row->city->name ?? '' }},
                                    {{ $row->state->name ?? '' }}
                                </small>
                            </td>

                            {{-- Price --}}
                            <td>
                                @if ($row->price !== null)
                                    ₹{{ number_format($row->price, 2) }}
                                @else
                                    <span class="text-muted">Contact</span>
                                @endif
                            </td>

                            {{-- Status --}}
                            <td class="text-center">
                                @if ($row->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>

                            {{-- Action --}}
                            <td class="text-center">
                                <div class="d-flex justify-content-center">

                                    <button type="button"
                                            class="btn btn-sm btn-outline-info me-1"
                                            title="View"
                                            data-bs-toggle="modal"
                                            data-bs-target="#productViewModal{{ $row->id }}">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <a href="{{ route('products.edit', $row->id) }}"
                                    class="btn btn-sm btn-outline-warning me-1"
                                    title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('products.destroy', $row->id) }}"
                                        method="POST"
                                        class="delete-product-form d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Product View Modal -->
                        <div class="modal fade"
                            id="productViewModal{{ $row->id }}"
                            tabindex="-1"
                            aria-labelledby="productViewModalLabel{{ $row->id }}"
                            aria-hidden="true">

                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productViewModalLabel{{ $row->id }}">
                                            Product Details
                                        </h5>

                                        <button type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">

                                        <div class="row g-3">
                                            {{-- Status --}}
                                            <div class="col-md-6">
                                                <img src="{{ $row->image_url }}" alt="Product Image" width="100" height="100" loading="lazy">
                                            </div>

                                            {{-- Status --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Status
                                                </label>

                                                <div>
                                                    @if($row->status)
                                                        <span class="badge bg-success">
                                                            Active
                                                        </span>
                                                    @else
                                                        <span class="badge bg-secondary">
                                                            Inactive
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- Name --}}
                                            <div class="col-md-12">
                                                <label class="fw-semibold text-muted">
                                                    Name
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Detail --}}
                                            <div class="col-md-12">
                                                <label class="fw-semibold text-muted">
                                                    Detail
                                                </label>

                                                <div class="form-control bg-light"
                                                    style="min-height: 80px;">
                                                    {{ $row->detail ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Category --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Category
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->category->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Subcategory --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Subcategory
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->subCategory->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Country --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Country
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->country->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- State --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    State
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->state->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- City --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    City
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->city->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Area --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Area
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->area->name ?? '-' }}
                                                </div>
                                            </div>

                                            {{-- Price --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Price
                                                </label>

                                                <div class="form-control bg-light">
                                                    @if($row->price !== null)
                                                        ₹{{ $row->price, 2 }}
                                                    @else
                                                        Contact for Price
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- Listing ID --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Listing ID
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->id }}
                                                </div>
                                            </div>

                                            {{-- Slug --}}
                                            <div class="col-md-12">
                                                <label class="fw-semibold text-muted">
                                                    Slug
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->slug }}
                                                </div>
                                            </div>

                                            {{-- Created At --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Created At
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->created_at?->format('d M Y, h:i A') }}
                                                </div>
                                            </div>

                                            {{-- Updated At --}}
                                            <div class="col-md-6">
                                                <label class="fw-semibold text-muted">
                                                    Updated At
                                                </label>

                                                <div class="form-control bg-light">
                                                    {{ $row->updated_at?->format('d M Y, h:i A') }}
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal">
                                            Close
                                        </button>

                                        <a href="{{ route('products.edit', $row->id) }}"
                                        class="btn btn-warning">
                                            <i class="fa fa-edit me-1"></i>
                                            Edit
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @empty

                        <tr>
                            <td colspan="9" class="text-center">
                                No Products Found!
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
            <div class="mt-3 px-3" id="pagination-links">
                {{ $records->appends(request()->query())->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

{{-- Add Products Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addStateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStateModalLabel">Add New Products <i class="fa fa-plus"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="modal-body row">
                    <input type="hidden" name="form_mode" value="create">
                    <!-- Package Name -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">
                            Package Name <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            maxlength="100"
                            value="{{ old('name') }}"
                            placeholder="Enter package name"
                            required>
                    </div>

                    <!-- Duration -->
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label">
                            Duration <span class="text-danger">*</span>
                        </label>
                        <select class="form-select"
                                id="duration"
                                name="duration"
                                required>
                            <option value="">Select Duration</option>
                            <option value="Weekly" {{ old('duration') == 'Weekly' ? 'selected' : '' }}>
                                Weekly
                            </option>
                            <option value="Monthly" {{ old('duration') == 'Monthly' ? 'selected' : '' }}>
                                Monthly
                            </option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">
                            Price <span class="text-danger">*</span>
                        </label>
                        <input type="number"
                            step="0.01"
                            class="form-control"
                            id="price"
                            name="price"
                            value="{{ old('price') }}"
                            placeholder="Enter package price"
                            required>
                    </div>

                    <!-- Total Days -->
                    <div class="col-md-6 mb-3">
                        <label for="total_days" class="form-label">
                            Total Days <span class="text-danger">*</span>
                        </label>
                        <input type="number"
                            class="form-control"
                            id="total_days"
                            name="total_days"
                            value="{{ old('total_days') }}"
                            placeholder="Enter total days"
                            required>
                    </div>

                    <!-- Meal Time -->
                    <div class="col-md-6 mb-3">
                        <label for="meal_time" class="form-label">
                            Meal Time <span class="text-danger">*</span>
                        </label>
                        <select class="form-select"
                                id="meal_time"
                                name="meal_time"
                                required>
                            <option value="">Select Meal Time</option>
                            <option value="Breakfast" {{ old('meal_time') == 'Breakfast' ? 'selected' : '' }}>
                                Breakfast
                            </option>
                            <option value="Lunch" {{ old('meal_time') == 'Lunch' ? 'selected' : '' }}>
                                Lunch
                            </option>
                            <option value="Dinner" {{ old('meal_time') == 'Dinner' ? 'selected' : '' }}>
                                Dinner
                            </option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control"
                                id="description"
                                name="description"
                                rows="4"
                                placeholder="Enter package description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="is_active" name="is_active" required>
                            <option value="1" @selected(old('is_active')=='1' )>Active</option>
                            <option value="0" @selected(old('is_active')=='0' )>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Products Modal --}}
@foreach($records as $row)
<div class="modal fade" id="editModal{{ $row->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $row->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $row->id }}">Edit Products <i class="fa fa-edit"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.update', $row->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body row">
                    <input type="hidden" name="form_mode" value="edit">
                    <input type="hidden" name="edit_id" value="{{ $row->id }}">

                    <!-- Package Name -->
                    <div class="col-md-6 mb-3">
                        <label for="name{{ $row->id }}" class="form-label">
                            Package Name <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                            class="form-control"
                            id="name{{ $row->id }}"
                            name="name"
                            maxlength="100"
                            value="{{ old('name', $row->name) }}"
                            required
                            placeholder="Enter package name">
                    </div>

                    <!-- Duration -->
                    <div class="col-md-6 mb-3">
                        <label for="duration{{ $row->id }}" class="form-label">
                            Duration <span class="text-danger">*</span>
                        </label>
                        <select class="form-select"
                                id="duration{{ $row->id }}"
                                name="duration"
                                required>
                            <option value="">Select Duration</option>
                            <option value="Weekly"
                                {{ old('duration', $row->duration) == 'Weekly' ? 'selected' : '' }}>
                                Weekly
                            </option>
                            <option value="Monthly"
                                {{ old('duration', $row->duration) == 'Monthly' ? 'selected' : '' }}>
                                Monthly
                            </option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="col-md-6 mb-3">
                        <label for="price{{ $row->id }}" class="form-label">
                            Price <span class="text-danger">*</span>
                        </label>
                        <input type="number"
                            step="0.01"
                            class="form-control"
                            id="price{{ $row->id }}"
                            name="price"
                            value="{{ old('price', $row->price) }}"
                            required
                            placeholder="Enter package price">
                    </div>

                    <!-- Total Days -->
                    <div class="col-md-6 mb-3">
                        <label for="total_days{{ $row->id }}" class="form-label">
                            Total Days <span class="text-danger">*</span>
                        </label>
                        <input type="number"
                            class="form-control"
                            id="total_days{{ $row->id }}"
                            name="total_days"
                            value="{{ old('total_days', $row->total_days) }}"
                            required
                            placeholder="Enter total days">
                    </div>

                    <!-- Meal Time -->
                    <div class="col-md-6 mb-3">
                        <label for="meal_time{{ $row->id }}" class="form-label">
                            Meal Time <span class="text-danger">*</span>
                        </label>
                        <select class="form-select"
                                id="meal_time{{ $row->id }}"
                                name="meal_time"
                                required>
                            <option value="">Select Meal Time</option>

                            <option value="Breakfast"
                                {{ old('meal_time', $row->meal_time) == 'Breakfast' ? 'selected' : '' }}>
                                Breakfast
                            </option>

                            <option value="Lunch"
                                {{ old('meal_time', $row->meal_time) == 'Lunch' ? 'selected' : '' }}>
                                Lunch
                            </option>

                            <option value="Dinner"
                                {{ old('meal_time', $row->meal_time) == 'Dinner' ? 'selected' : '' }}>
                                Dinner
                            </option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label for="description{{ $row->id }}" class="form-label">
                            Description
                        </label>

                        <textarea class="form-control"
                                id="description{{ $row->id }}"
                                name="description"
                                rows="4"
                                placeholder="Enter package description">{{ old('description', $row->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="is_active{{ $row->id }}" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="is_active{{ $row->id }}" name="is_active" required>
                            <option value="1" {{ $row->is_active == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $row->is_active == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('scripts')
<script>
$(document).on('submit', '.delete-product-form', function (e) {

    e.preventDefault();

    let form = this;

    Swal.fire({
        title: 'Are you sure?',
        text: 'This product will be permanently deleted.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {

        if (result.isConfirmed) {
            form.submit();
        }

    });

});
</script>
@endpush