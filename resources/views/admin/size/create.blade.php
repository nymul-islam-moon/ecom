@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Size Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.size.index') }}">Size</a></li>
                        <li class="breadcrumb-item active">Size Create</li>
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
        <form class="row g-3 was-validated" action="{{ route('admin.size.store') }}" method="POST" novalidate>
            @csrf
            <div class="col-md-6 has-validation">
                <label for="size_name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="size_name" value="{{ old('name') }}" required placeholder="Size Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Size</button>
            </div>
        </form>
    </div>
@endsection