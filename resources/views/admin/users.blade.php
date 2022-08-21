@extends('layouts.dashboard')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <style>
        .active {
            color: #696cff !important;
        }
        .nav-tabs .active {
            border: #eee 1px solid !important;
        }
    </style>
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم /</span>المستخدمين
            </h4>
            <div class="card">
                <h5 class="card-header fs-4 fw-bolder">المستخدمين</h5>
                <div class="row d-sm-inline-flex mx-2">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">بحث</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            <span class="input-group-text btn btn-primary" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">نوع الحساب</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-list-check">الكل</option>
                            <option data-icon="bx bx-user">مستخدم</option>
                            <option data-icon="bx bx-user-pin">موفر خدمة</option>
                            <option data-icon="bx bxs-user-account">مدير</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-rename">الاسم</option>
                            <option data-icon="bx bxs-watch">تاريخ التسجيل</option>
                            <option data-icon="bx bx-cart">عدد الطلبات</option>
                            <option data-icon="bx bx-star">اجمالي التقييمات</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الحساب</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-list-check">الكل</option>
                            <option data-icon="bx bx-check">مفعل</option>
                            <option data-icon="bx bx-block">متوقف</option>
                            <option data-icon="bx bx-time">في انتظار تأكيد البريد</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs border-bottom border-light mx-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active fas fa-th-list fs-4" role="tab" data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-top-home" aria-selected="true"></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-large fs-4" role="tab" data-bs-toggle="tab" data-bs-target="#navs-card" aria-controls="navs-top-profile" aria-selected="false"></button>
                            </li>
                        </ul>
                        <div class="tab-content shadow-none pt-0">
                            {{-- List View --}}
                            <div class="tab-pane fade active show" id="navs-list" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>أسم المستخدم</th>
                                            <th>الايميل</th>
                                            <th>نوع الحساب</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>الحالة</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>1</td>
                                            <td> أسامة  هادي </td>
                                            <td>Baaboud.dev@gmail.com</td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">مدير</span></td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-success fs-6 me-1">مفعل</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-danger">
                                                    <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td> أسامة  هادي </td>
                                            <td>Baaboud.dev@gmail.com</td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">مدير</span></td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-warning fs-6 me-1">في انتظار تاكيد البريد</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-danger">
                                                    <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td> أسامة  هادي </td>
                                            <td>Baaboud.dev@gmail.com</td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">مدير</span></td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-danger fs-6 me-1">متوقف</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-primary">
                                                    <span class="tf-icons bx bx-check"></span>&nbsp; تفعيل الحساب
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- Card View --}}
                            <div class="tab-pane fade" id="navs-card" role="tabpanel">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center shadow-sm">
                                                <div class="mx-auto mb-3">
                                                    <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                                </div>

                                                <h5 class="mb-1 card-title">أسامة هادي</h5>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1">مدير</span>
                                                    <span class="badge bg-success fs-6 me-1">مفعل</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1"><i class="bx bx-envelope"></i></span>
                                                    <span>Osama.dev@gmail.cm</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-time"></i></span>
                                                    <span class="text-dark">2018-04-23</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>
                                                    <button type="button" class="btn btn-label-danger">
                                                        <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center shadow-sm">
                                                <div class="mx-auto mb-3">
                                                    <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                                </div>

                                                <h5 class="mb-1 card-title">أسامة هادي</h5>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1">مدير</span>
                                                    <span class="badge bg-success fs-6 me-1">مفعل</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1"><i class="bx bx-envelope"></i></span>
                                                    <span>Osama.dev@gmail.cm</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-time"></i></span>
                                                    <span class="text-dark">2018-04-23</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>
                                                    <button type="button" class="btn btn-label-danger">
                                                        <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center shadow-sm">
                                                <div class="mx-auto mb-3">
                                                    <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                                </div>

                                                <h5 class="mb-1 card-title">أسامة هادي</h5>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1">مدير</span>
                                                    <span class="badge bg-success fs-6 me-1">مفعل</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1"><i class="bx bx-envelope"></i></span>
                                                    <span>Osama.dev@gmail.cm</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-time"></i></span>
                                                    <span class="text-dark">2018-04-23</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>
                                                    <button type="button" class="btn btn-label-danger">
                                                        <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center shadow-sm">
                                                <div class="mx-auto mb-3">
                                                    <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                                </div>

                                                <h5 class="mb-1 card-title">أسامة هادي</h5>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1">مدير</span>
                                                    <span class="badge bg-success fs-6 me-1">مفعل</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1"><i class="bx bx-envelope"></i></span>
                                                    <span>Osama.dev@gmail.cm</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-time"></i></span>
                                                    <span class="text-dark">2018-04-23</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>
                                                    <button type="button" class="btn btn-label-danger">
                                                        <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الحساب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination my-5 justify-content-center">
                        <li class="page-item first">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                        </li>
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                        </li>
                        <li class="page-item last">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
@endsection
