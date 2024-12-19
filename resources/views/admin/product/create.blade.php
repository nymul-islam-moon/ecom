@extends('layouts.admin.app')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('admin_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Product Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Product Create</li>
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
    <form id="createproduct-form" action="{{ route('admin.product.store') }}" autocomplete="off" class="" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="name" id="product_name" value="{{ old('name') }}" placeholder="Enter product title">
                            @error('name')
                                <div class="">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="product_description">Product Long Description</label>
                            <textarea class="form-control" name="description" placeholder="Must enter minimum of a 100 characters" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <!-- end card -->

                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Prices</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="mb-3 me-3 w-50">
                            <label class="form-label" for="product-price-1">Product Price</label>
                            <input type="text" class="form-control" name="price" id="product-price"
                                value="{{ old('price') }}" placeholder="Enter product price" required>
                        </div>
                        <div class="mb-3 w-50">
                            <label class="form-label" for="product-price-2">Product Selling Price</label>
                            <input type="text" class="form-control" name="sale_price" id="product-sale-price"
                                value="{{ old('sale_price') }}" placeholder="Enter product sale price" required>
                        </div>
                    </div>
                </div> --}}

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Gallery</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="fs-14 mb-1">Product Image</h5>
                            <p class="text-muted">Add Product main Image.</p>
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Select Image">
                                            <div class="avatar-xs">
                                                <div
                                                    class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" value="" id="product-image-input"
                                            type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="#" id="product-img" class="avatar-md h-auto" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5 class="fs-14 mb-1">Product Gallery</h5>
                            <p class="text-muted">Add Product Gallery Images.</p>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>

                                    <h5>Drop files here or click to upload.</h5>
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                <li class="mt-2" id="dropzone-preview-list">
                                    <!-- This is used as the file preview template -->
                                    <div class="border rounded">
                                        <div class="d-flex p-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm bg-light rounded">
                                                    <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                        src="#" alt="Product-Image" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="pt-1">
                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-3">
                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end dropzon-preview -->
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                    role="tab">
                                    General Info
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#addproduct-prysical" role="tab">
                                    Physical
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata" role="tab">
                                    Meta Data
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end card header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="manufacturer-name-input">Manufacturer
                                                Name</label>
                                            <input type="text" class="form-control" id="manufacturer-name-input"
                                                placeholder="Enter manufacturer name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="product_type" class="form-label">Product Type</label>
            
                                        <select class="form-select" name="product_type" id="product_type">
                                            <option value="" selected>Select Type</option>
                                            <option value="physical">physical</option>
                                            <option value="digital">Digital</option>
                                            <option value="subscription">Subscription</option>
                                        </select>
                                        @error('product_type')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="manufacturer-brand-input">Manufacturer
                                                Brand</label>
                                            <input type="text" class="form-control" id="manufacturer-brand-input"
                                                placeholder="Enter manufacturer brand">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="price">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="price">$</span>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror            
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="sale_price">Sale Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="sale_price">$</span>
                                                <input type="text" class="form-control" name="sale_price" id="sale_price" placeholder="Enter sale price">
                                                @error('sales_price')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="stock_quantity">Stocks</label>
                                            <input type="text" class="form-control" name="stock_quantity" id="stock_quantity" placeholder="Stocks">
                                            @error('stock_quantity')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="low_stock_threshold">Low Stock Threshold</label>
                                            <input type="text" class="form-control" name="low_stock_threshold" id="low_stock_threshold" placeholder="Stocks">
                                            @error('low_stock_threshold')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="restock_date">Restock Date</label>
                                            <input type="text" class="form-control" name="restock_date" id="restock_date" placeholder="Stocks">
                                            @error('restock_date')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="addproduct-prysical" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="weight">Weight</label>
                                            <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="dimensions">Dimensions</label>
                                            <input type="text" class="form-control" name="dimensions" id="dimensions" placeholder="Enter dimensions">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="manufacturer-brand-input">Manufacturer
                                                Brand</label>
                                            <input type="text" class="form-control" id="manufacturer-brand-input"
                                                placeholder="Enter manufacturer brand">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="price">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="price">$</span>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror            
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="sale_price">Sale Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="sale_price">$</span>
                                                <input type="text" class="form-control" name="sale_price" id="sale_price" placeholder="Enter sale price">
                                                @error('sales_price')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="stock_quantity">Stocks</label>
                                            <input type="text" class="form-control" name="stock_quantity" id="stock_quantity" placeholder="Stocks">
                                            @error('stock_quantity')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="low_stock_threshold">Low Stock Threshold</label>
                                            <input type="text" class="form-control" name="low_stock_threshold" id="low_stock_threshold" placeholder="Stocks">
                                            @error('low_stock_threshold')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="restock_date">Restock Date</label>
                                            <input type="text" class="form-control" name="restock_date" id="restock_date" placeholder="Stocks">
                                            @error('restock_date')
                                                {{ $message }}
                                            @enderror            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta-title-input">Meta title</label>
                                            <input type="text" class="form-control" placeholder="Enter meta title"
                                                id="meta-title-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                                            <input type="text" class="form-control" placeholder="Enter meta keywords"
                                                id="meta-keywords-input">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label" for="meta-description-input">Meta Description</label>
                                    <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Submits</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish</h5>
                    </div>
                    <div class="card-body">
                        

                        <div class="mb-3">
                            <label for="choices-publish-status-input" class="form-label">Status</label>

                            <select class="form-select" name="status" id="choices-publish-status-input" data-choices
                                data-choices-search-false>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="discontinued">Discontinued</option>
                                <option value="out_of_stock">Out of stock</option>
                            </select>
                        </div>

                        <div>
                            <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                            <select class="form-select" id="choices-publish-visibility-input" data-choices
                                data-choices-search-false>
                                <option value="Public" selected>Public</option>
                                <option value="Hidden">Hidden</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish Schedule</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="datepicker-publish-input" class="form-label">Publish Date & Time</label>
                            <input type="text" id="datepicker-publish-input" class="form-control"
                                placeholder="Enter publish date" data-provider="flatpickr" data-date-format="d.m.y"
                                data-enable-time>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Categories</h5>
                    </div>
                    <div class="card-body">
                        <p class="test-muted mb-2">Select Category</p>
                        <x-admin.select2 id="category_id" name="category_id" placeholder="Select a Category"
                            route="{{ route('admin.categories.select') }}" />
                    </div>
                    <div class="card-body">
                        <p class="test-muted mb-2">Select Sub-Category</p>
                        <x-admin.select2 id="sub_category_id" name="sub_category_id" placeholder="Select a Sub-Category"
                            route="" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 align-items-start">
                            <div class="flex-grow-1">
                                <input class="form-control" data-choices data-choices-multiple-remove="true"
                                    placeholder="Enter tags" type="text" value="Cotton" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Short Description</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2">Add short description for product</p>
                        <textarea class="form-control" name="short_description" placeholder="Must enter minimum of a 100 characters"
                            rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            document.querySelectorAll('textarea').forEach((textarea) => {
                ClassicEditor.create(textarea)
                    .catch(error => {
                        console.error(error);
                    });
            });

            if (typeof jQuery === 'undefined') {
                console.error('jQuery is not defined!');
            } else {
                console.log('jQuery is loaded and ready to use.');
            }

            $('#category_id').change(function() {
                const route = `{{ route('admin.subcategories.select', ['categoryId' => '__categoryId__']) }}`.replace('__categoryId__', $(this).val());

                // console.log('Selected category route: ' + route);

                $('#sub_category_id').select2({
                    ajax: {
                        url: route,
                        dataType: 'json',
                        delay: 250,
                        data: params => ({
                            query: params.term
                        }),
                        processResults: data => ({
                            results: data.map(item => ({
                                id: item.id,
                                text: item.name
                            }))
                        }),
                        cache: true
                    }
                });
            });





        });
    </script>
@endpush
