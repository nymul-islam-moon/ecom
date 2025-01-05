@extends('layouts.admin.app')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Sub-Category Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.sub-category.index') }}">Sub-Category</a></li>
                        <li class="breadcrumb-item active">Sub-Category Create</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    @session('success')
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong> {{ $value }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        {{-- <div class="alert alert-success" role="alert"> {{ $value }} </div> --}}
    @endsession
    <div class="row">
        <form class="row g-3 was-validated" action="{{ route('admin.sub-category.store') }}" method="POST" novalidate>
            @csrf
            <div class="col-md-6 has-validation">
                <label for="sub_category_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="sub_category_name" value="{{ old('name') }}" required placeholder="Sub-Category Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6 has-validation">
                <label for="sub_category_name" class="form-label">Category</label>

                <x-admin.select2 id="category_id" name="category_id" placeholder="Select a Category" route="{{ route('admin.categories.select') }}" />
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Sub-Category</button>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
@endpush
