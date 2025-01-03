@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Shop Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.shop.index') }}">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Create</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.shop.store') }}" method="POST" novalidate>
            @csrf
            <div class="col-md-3 has-validation">
                <label for="shop_name" class="form-label">Shop Name</label>
                <input type="text" name="name" class="form-control" id="shop_name" value="{{ old('name') }}" required placeholder="Shop Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="category_icon" class="form-label">Icon</label>
                <input type="text" name="icon" class="form-control" id="category_icon" value="{{ old('icon') }}" required placeholder="Icon">
                @error('icon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Category</button>
            </div>
        </form>
    </div>
@endsection