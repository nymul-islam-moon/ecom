@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Attribute Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.attribute-value.index') }}">Attribute Values</a></li>
                        <li class="breadcrumb-item active">Attribute Value Create</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.attribute-value.update', $attributeValue->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT')

            <div class="col-md-6 has-validation">
                <label for="attribure" class="form-label">Attribute</label>

                <select class="form-select" name="attribute_id" id="validationCustom04" required>
                    <option selected value="">Select Attribute</option>
                    @foreach ($attributes as $attribute)
                        <option value="{{ $attribute->id }}" {{ $attribute->id == $attributeValue->attribute_id ? "SELECTED" : "" }}>{{ $attribute->name }}</option>
                    @endforeach
                </select>
                @error('attribute_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="col-md-6 has-validation">
                <label for="attribute_name" class="form-label">Attribute Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="attribute_name" 
                    value="{{ $attributeValue->name }}" 
                    required 
                    placeholder="Attribute Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update Attribute Value</button>
            </div>
        </form>
    </div>
@endsection