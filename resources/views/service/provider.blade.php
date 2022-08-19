@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User / View /</span> service_provider
        </h4>
        <div class="row">

        </div>
        <!--/ User Sidebar -->
        <div class="card overflow-hidden">
            <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center"> ابحث عن الخدمة التي تحتاجها </h3>
            <div class="input-wrapper my-3 input-group input-group-merge">
                <span class="input-group-text" id="basic-addon1"><i class="bx bx-search-alt bx-xs text-muted"></i></span>
                <input type="text" class="form-control form-control-lg" placeholder="ادخل اسم الخدمة او اسم موفر الخدمة" aria-label="Search" aria-describedby="basic-addon1">
            </div>
            <p class="text-center px-3 mb-0">كما يمكنك البحث عن اقرب خدمة متوفرة</p>
        </div>

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row mb-5">

            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">رشاء عبدالعزيز بن ثعلب</h5>
                        <span>Developer</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Database</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">Mysql</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">محمد عبدالله بامدهاف</h5>
                        <span>مهندس كهرباء</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">منازل</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">محلات</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">رشاء عبدالعزيز بن ثعلب</h5>
                        <span>Developer</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Database</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">Mysql</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">رشاء عبدالعزيز بن ثعلب</h5>
                        <span>Developer</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Database</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">Mysql</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">رشاء عبدالعزيز بن ثعلب</h5>
                        <span>Developer</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Database</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">Mysql</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="dropdown btn-pinned">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto mb-3">
                            <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
                        </div>
                        <h5 class="mb-1 card-title">رشاء عبدالعزيز بن ثعلب</h5>
                        <span>Developer</span>
                        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                            <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Database</span></a>
                            <a href="javascript:;"><span class="badge bg-label-info">Mysql</span></a>
                        </div>

                        <div class="d-flex align-items-center justify-content-around my-4 py-2">
                            <div>
                                <h4 class="mb-1">112</h4>
                                <span>Projects</span>
                            </div>
                            <div>
                                <h4 class="mb-1">23.1k</h4>
                                <span>Tasks</span>
                            </div>
                            <div>
                                <h4 class="mb-1">1.28k</h4>
                                <span>Connections</span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">وصــــــول</span>
                        </button>
                    </div>
                </div>
            </div>

            </div>
        </div>
        </div>
        <!--/ User Content -->
    </div>


@endsection
