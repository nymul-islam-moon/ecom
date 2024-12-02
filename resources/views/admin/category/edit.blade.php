@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Category Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
                        <li class="breadcrumb-item active">Category Create</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.category.update', $category->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="col-md-6 has-validation">
                <label for="category_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="category_name" value="{{ $category->name }}" required placeholder="Category Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="category_icon" class="form-label">Icon</label>
                <input type="text" name="icon" class="form-control" id="category_icon" value="{{ $category->icon }}" required placeholder="Icon">
                @error('icon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update Category</button>
            </div>
        </form>
    </div>
@endsection