@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Sub Category Edit</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.sub-category.index') }}">Sub Category</a></li>
                        <li class="breadcrumb-item active">Sub Category Edit</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.sub-category.update', $subCategory->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="col-md-6 has-validation">
                <label for="subCategory_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="subCategory_name" value="{{ $subCategory->name }}" required placeholder="Sub Category Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-lg-3 col-sm-6">
                <label for="choices-payment-status">Category</label>
                <div class="input-light">
                    @php
                        $selectedCategory = $subCategory->Category->id
                    @endphp
                    <select class="form-control bg-light " name="category_id" data-choices data-choices-search-false id="choices-payment-status" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        @if ($selectedCategory == $category->id)
                        <option value="{{$category->id}}" selected> {{$category->name}} </option>
                        @else
                        <option value="{{$category->id}}"> {{$category->name}} </option>
                        @endif
                            
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update Sub Category</button>
            </div>
        </form>
    </div>
@endsection