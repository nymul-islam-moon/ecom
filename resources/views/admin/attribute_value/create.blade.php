@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Attrinute Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.attribute-value.index') }}">Attrinute Value</a></li>
                        <li class="breadcrumb-item active">Attrinute Create</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.attribute-value.store') }}" method="POST" novalidate>
            @csrf
            <div class="col-md-6 has-validation">
                <label for="attribure" class="form-label">Attribute</label>

                <select class="form-select" name="attribute_id" id="validationCustom04" required>
                    <option selected value="">Select Attribute</option>
                    @foreach ($attributes as $attribute)
                        <option value="{{ $attribute->id }}" {{ old('attribute_id') == $attribute->id ? 'selected' : '' }}>{{ $attribute->name }}</option>
                    @endforeach
                </select>
                @error('attribute_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="col-md-6 has-validation">
                <label for="attribute_value" class="form-label">Attribute Value</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="attribute_value" 
                    value="{{ old('name') }}" 
                    required 
                    placeholder="Attribute Value">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            
            
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Attrinute</button>
            </div>
        </form>
    </div>
@endsection