@extends('layouts.admin.app')

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Invoice List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                        <li class="breadcrumb-item active">Invoice List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('admin.category.store') }}" method="POST">
            <div class="row gy-2 gx-3 mb-3 align-items-center">
                <div class="col-sm-auto">
                    <label class="visually-hidden" for="autoSizingInput">Name</label>
                    <input type="text" name="name" class="form-control" id="category_name" placeholder="Name">

                </div><!--end col-->
                
                <div class="col-sm-auto">
                    <label class="visually-hidden" for="autoSizingInput">Icon</label>
                    <input type="text" name="icon" class="form-control" id="category_icon" placeholder="Icon">
                    {{-- @error('name')
                        
                    @enderror --}}
                </div>

                {{-- <div class="col-sm-auto">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div><!--end col--> --}}
                
                <div class="col-sm-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div><!--end col-->
            </div><!--end row-->
        </form>
    </div>
@endsection