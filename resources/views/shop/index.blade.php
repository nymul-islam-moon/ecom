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
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Invoices Sent</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k</h4>
                            <span class="badge bg-warning me-1">2,258</span> <span class="text-muted">Invoices sent</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text text-success icon-dual-success"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Paid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="409.66">409.66</span>k</h4>
                            <span class="badge bg-warning me-1">1,958</span> <span class="text-muted">Paid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square text-success icon-dual-success"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="136.98">136.98</span>k</h4>
                            <span class="badge bg-warning me-1">338</span> <span class="text-muted">Unpaid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-success icon-dual-success"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="84.20">84.2</span>k</h4>
                            <span class="badge bg-warning me-1">502</span> <span class="text-muted">Cancelled by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon text-success icon-dual-success"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="invoiceList">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Invoices</h5>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-2 flex-wrap">
                                <button class="btn btn-primary" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <a href="apps-invoices-create.html" class="btn btn-danger"><i class="ri-add-line align-bottom me-1"></i> Create Invoice</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-12">
                                <div class="search-box">
                                    <input type="text" class="form-control search bg-light border-light" placeholder="Search for customer, email, country, status or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <input type="text" class="form-control bg-light border-light" id="datepicker-range" placeholder="Select date">
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <div class="input-light">
                                    <select class="form-control" data-choices="" data-choices-search-false="" name="choices-single-default" id="idStatus">
                                        <option value="">Status</option>
                                        <option value="all" selected="">All</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Cancel">Cancel</option>
                                        <option value="Refund">Refund</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-1 col-sm-4">
                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();">
                                    <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap" id="invoiceTable">
                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th class="sort text-uppercase" data-sort="invoice_id">ID</th>
                                        <th class="sort text-uppercase" data-sort="customer_name">Customer</th>
                                        <th class="sort text-uppercase" data-sort="email">Email</th>
                                        <th class="sort text-uppercase" data-sort="country">Country</th>
                                        <th class="sort text-uppercase" data-sort="date">Date</th>
                                        <th class="sort text-uppercase" data-sort="invoice_amount">Amount</th>
                                        <th class="sort text-uppercase" data-sort="status">Payment Status</th>
                                        <th class="sort text-uppercase" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all" id="invoice-list-data">

                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000351">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351" class="fw-medium link-primary">#VL25000351</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">Valentine Morin
                                        </div>
                                    </td>
                                    <td class="email">euismod.enim@outlook.net</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000351"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000352">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000352" class="fw-medium link-primary">#VL25000352</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">Brody Holman
                                        </div>
                                    </td>
                                    <td class="email">metus@protonmail.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Jun, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-warning text-uppercase">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000352"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000352"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000353">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000353" class="fw-medium link-primary">#VL25000353</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">Jolie Hood
                                        </div>
                                    </td>
                                    <td class="email">nunc.nulla@yahoo.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000353"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000353"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000354">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000354" class="fw-medium link-primary">#VL25000354</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">Buckminster Wong
                                        </div>
                                    </td>
                                    <td class="email">morbi.quis@protonmail.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">04 Sep, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000354"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000354"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000355">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000355" class="fw-medium link-primary">#VL25000355</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-xs me-2"><div class="avatar-title bg-soft-success text-success rounded-circle fs-13">HL</div></div>Howard Lyons
                                        </div>
                                    </td>
                                    <td class="email">neque.sed.dictum@icloud.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-primary text-uppercase">Refund</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000355"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000355"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000356">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000356" class="fw-medium link-primary">#VL25000356</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">Howard Oneal
                                        </div>
                                    </td>
                                    <td class="email">porttitor.tellus.non@yahoo.net</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000356"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000356"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000357">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000357" class="fw-medium link-primary">#VL25000357</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">Jena Hall
                                        </div>
                                    </td>
                                    <td class="email">lectus.sit.amet@protonmail.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-danger text-uppercase">Cancel</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000357"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000357"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000358">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000358" class="fw-medium link-primary">#VL25000358</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle me-2">Paki Edwards
                                        </div>
                                    </td>
                                    <td class="email">dictum.phasellus.in@hotmail.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000358"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000358"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000359">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000359" class="fw-medium link-primary">#VL25000359</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">Christian Cardenas
                                        </div>
                                    </td>
                                    <td class="email">id.erat@aol.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">06 Feb, 2022 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000359"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000359"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000360">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000360" class="fw-medium link-primary">#VL25000360</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">Yoshi Guerra
                                        </div>
                                    </td>
                                    <td class="email">sem.magna.nec@hotmail.ca</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000360"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000360"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000361">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000361" class="fw-medium link-primary">#VL25000361</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">Hilel Gillespie
                                        </div>
                                    </td>
                                    <td class="email">enim.nunc@yahoo.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000361"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000361"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000362">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000362" class="fw-medium link-primary">#VL25000362</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">Randall Stafford
                                        </div>
                                    </td>
                                    <td class="email">eget.lacus@outlook.org</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000362"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000362"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000363">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000363" class="fw-medium link-primary">#VL25000363</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2">Fletcher Jones
                                        </div>
                                    </td>
                                    <td class="email">sapien.cursus@google.couk</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000363"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000363"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000364">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000364" class="fw-medium link-primary">#VL25000364</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">Donovan Sparks
                                        </div>
                                    </td>
                                    <td class="email">urna.convallis@yahoo.net</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000364"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000364"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000365">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000365" class="fw-medium link-primary">#VL25000365</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">Sage Gardner
                                        </div>
                                    </td>
                                    <td class="email">consequat.enim@google.com</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000365"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000365"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000366">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000366" class="fw-medium link-primary">#VL25000366</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">Paki Grimes
                                        </div>
                                    </td>
                                    <td class="email">ante.lectus.convallis@google.com</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000366"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000366"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000367">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000367" class="fw-medium link-primary">#VL25000367</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">James Diaz
                                        </div>
                                    </td>
                                    <td class="email">nascetur@yahoo.com</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000367"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000367"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000368">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000368" class="fw-medium link-primary">#VL25000368</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">Karen Monroe
                                        </div>
                                    </td>
                                    <td class="email">ac.ipsum@google.com</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000368"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000368"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000369">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000369" class="fw-medium link-primary">#VL25000369</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">Vincent Weeks
                                        </div>
                                    </td>
                                    <td class="email">metus.facilisis@hotmail.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000369"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000369"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000370">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000370" class="fw-medium link-primary">#VL25000370</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2">Miriam Dickson
                                        </div>
                                    </td>
                                    <td class="email">nunc.ac@icloud.ca</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000370"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000370"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000371">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000371" class="fw-medium link-primary">#VL25000371</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-xs me-2"><div class="avatar-title bg-soft-success text-success rounded-circle fs-13">AH</div></div>Ashton Head
                                        </div>
                                    </td>
                                    <td class="email">cras@outlook.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000371"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000371"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="#VL25000371">
                                        </div>
                                    </th>
                                    <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000371" class="fw-medium link-primary">#VL25000371</a></td>
                                    <td class="customer_name">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">Linus Martin
                                        </div>
                                    </td>
                                    <td class="email">fringilla.est.mauris@google.edu</td>
                                    <td class="country">USA</td>
                                    <td class="date">03 Apr, 2021 <small class="text-muted">9:58 PM</small></td>
                                    <td class="invoice_amount">$875</td>
                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Paid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000371"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</button></li>
                                                <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000371"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</button></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                        Download</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr></tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ invoices We did not find any invoices for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-labelledby="deleteOrderLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4>You are about to delete a order ?</h4>
                                        <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection

@push('js')
    <script>
        // alert('from admin app');
    </script>
@endpush