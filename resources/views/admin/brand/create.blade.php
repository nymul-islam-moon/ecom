@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Brand Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.brand.index') }}">Brand</a></li>
                        <li class="breadcrumb-item active">Brand Create</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    @session('success')
        <x-admin.alert type="success" message="{{ $value }}" />
    @endsession
    <div class="row">
        <form class="row g-3 was-validated" action="{{ route('admin.brand.store') }}" method="POST"
            enctype="multipart/form-data" novalidate>
            @csrf
            <div class="col-md-6 has-validation">
                <label for="brand_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="brand_name" value="{{ old('name') }}" required placeholder="Brand Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="brand_logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror"
                    id="brand_logo" required placeholder="Brand Logo">
                @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Brand</button>
            </div>
        </form>
    </div>
@endsection
