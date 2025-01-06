@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Child-Category Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.child-category.index') }}">Child-Category</a></li>
                        <li class="breadcrumb-item active">Child-Category Edit</li>
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
    @endsession
    <div class="row">
        <form class="row g-3" action="{{ route('admin.child-category.update', $childCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6 has-validation">
                <label for="child_category_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="child_category_name" value="{{ $childCategory->name }}" placeholder="Child-Category Name">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6 has-validation">
                <label for="category_id" class="form-label">Category</label>

                <select class="form-select" name="category_id" id="validationCustom04">
                    <option selected value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $childCategory->id ? "SELECTED" : "" }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>

            <div class="col-md-6 has-validation">
                <label for="sub_category_id" class="form-label">Sub-Category</label>

                <select class="form-select" name="sub_category_id" id="validationCustom04">
                    <option selected value="">Select Sub-Category</option>
                    @foreach ($subCategories as $subCategory)
                        <option value="{{ $subCategory->id }}" {{ $subCategory->id == $childCategory->id ? "SELECTED" : "" }}>{{ $subCategory->name }}</option>
                    @endforeach
                </select>
                @error('sub_category_id')
                    
                    {{ $message }}
                    
                @enderror
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update Child-Category</button>
            </div>
        </form>
    </div>
@endsection