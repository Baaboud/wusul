@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css">
    <style>
        .active {
            color: #696cff !important;
        }
        .nav-tabs .nav-item .nav-link {
            border: #eee 1px solid !important;
            background-color: #fff !important;
            /*box-shadow: 1px 1px #dddd !important;*/
        }

        .nav-tabs .nav-item .active {
            border: 0px !important;
            background-color: #e9e9FF !important;
            /*box-shadow: none !important;*/
        }
    </style>
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 mt-2">
        <div class="container-xxl flex-grow-1 container-p-y px-sm-2 px-0">

            <div class="card overflow-hidden">
                <!-- Help Center Header -->
                <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
                    <h3 class="text-center"> ابحث عن الخدمة التي تحتاجها </h3>
                    <div class="input-wrapper my-3 input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="bx bx-search-alt bx-xs text-muted"></i></span>
                        <input type="text" class="form-control form-control-lg"
                               placeholder="ادخل اسم الخدمة او اسم موفر الخدمة" aria-label="Search"
                               aria-describedby="basic-addon1">
                        <span class="input-group-text p-0" id="basic-addon1">
                            <button type="button" class="d-sm-none d-inline-flex btn btn-icon text-dark" data-bs-toggle="modal"
                                    data-bs-target="#backDropModal">
                                <span class="bx bx-cog fs-2"></span>
                            </button>
                        </span>
                    </div>
                    <div class="input-wrapper row d-sm-inline-flex d-none">
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <label for="selectpickerIcons" class="form-label fs-5 fw-bolder">الخدمة</label>
                            <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                    data-tick-icon="bx-check" data-style="btn-default">
                                <option data-icon="bx bx-list-check">الكل</option>
                                <option data-icon="bx bx-plug">كهرباء</option>
                                <option data-icon="bx bx-devices">تقنية</option>
                                <option data-icon="bx bx-heart">صحة</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <label for="selectpickerIcons" class="form-label fs-5 fw-bolder">ترتيب حسب</label>
                            <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                    data-tick-icon="bx-check" data-style="btn-default">
                                <option data-icon="bx bx-rename">الاسم</option>
                                <option data-icon="bx bx-current-location">الاقرب</option>
                                <option data-icon="bx bx-cart">عدد الطلبات</option>
                                <option data-icon="bx bx-star">اجمالي التقييمات</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <label for="selectpickerBasic" class="form-label fs-5 fw-bolder">المحافظة</label>
                            <select class="selectpicker w-100 show-tick" id="selectpickerBasic" data-icon-base="bx"
                                    data-tick-icon="bx-check" data-style="btn-default">
                                <option>الكل</option>
                                <option>حضرموت</option>
                                <option>المهرة</option>
                                <option>عدن</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <label for="selectpickerBasic" class="form-label fs-5 fw-bolder">المدينة</label>
                            <select class="selectpicker w-100 show-tick" id="selectpickerBasic" data-icon-base="bx"
                                    data-tick-icon="bx-check" data-style="btn-default">
                                <option>الكل</option>
                                <option>المكلا</option>
                                <option>فوه</option>
                                <option>الشحر</option>
                            </select>
                        </div>
                    </div>
                    <div>
                    </div>
                    <p class="text-center px-3 mb-0">كما يمكنك البحث عن اقرب خدمة متوفرة</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title w-100 text-center fw-bolder fs-2" id="backDropModalTitle">بحث متقدم</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-0">
                                <div class="input-wrapper my-3 input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bx bx-search-alt bx-xs text-muted"></i></span>
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="ادخل اسم الخدمة او اسم موفر الخدمة" aria-label="Search"
                                           aria-describedby="basic-addon1">
                                    <span class="input-group-text p-0" id="basic-addon1"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="selectpickerIcons" class="form-label fs-5 fw-bolder">الخدمة</label>
                                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons"
                                                data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                                            <option data-icon="bx bx-list-check">الكل</option>
                                            <option data-icon="bx bx-plug">كهرباء</option>
                                            <option data-icon="bx bx-devices">تقنية</option>
                                            <option data-icon="bx bx-heart">صحة</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="selectpickerIcons" class="form-label fs-5 fw-bolder">ترتيب
                                            حسب</label>
                                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons"
                                                data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                                            <option data-icon="bx bx-rename">الاسم</option>
                                            <option data-icon="bx bx-current-location">الاقرب</option>
                                            <option data-icon="bx bx-cart">عدد الطلبات</option>
                                            <option data-icon="bx bx-star">اجمالي التقييمات</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="selectpickerBasic"
                                               class="form-label fs-5 fw-bolder">المحافظة</label>
                                        <select class="selectpicker w-100 show-tick" id="selectpickerBasic"
                                                data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                                            <option>الكل</option>
                                            <option>حضرموت</option>
                                            <option>المهرة</option>
                                            <option>عدن</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="selectpickerBasic" class="form-label fs-5 fw-bolder">المدينة</label>
                                        <select class="selectpicker w-100 show-tick" id="selectpickerBasic"
                                                data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                                            <option>الكل</option>
                                            <option>المكلا</option>
                                            <option>فوه</option>
                                            <option>الشحر</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                {{--                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">الغاء</button>--}}
                                <button type="button" class="btn btn-primary w-100">
                                    <span class="tf-icons bx bx-search"></span>&nbsp; بحث
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Help Center Header -->

                <!-- Search services -->
                <div class="help-center-popular-articles py-2">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs border-bottom border-light mx-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-large fs-4 active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-card" aria-controls="navs-top-profile" aria-selected="true"></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-list fs-4" role="tab" data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-top-home" aria-selected="false"></button>
                            </li>
                        </ul>
                        <div class="tab-content shadow-none pt-0">

                            <div class="tab-pane fade active show" id="navs-card" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 mb-4">
                                        <div class="card shadow h-100">
                                            <div class="card-header flex-grow-0">
                                                <div class="d-flex">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="http://127.0.0.1:8000/assets/img/avatars/1.png" alt="User" class="rounded-circle">
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-1">
                                                        <div class="me-2">
                                                            <h5 class="mb-0">عبدالهادي ديان</h5>
                                                            <small class="text-muted">2019-08-02</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="img-fluid" src="../../assets/img/backgrounds/event.jpg" alt="Card image cap">
                                            <div class="featured-date mt-n4 ms-4 bg-white rounded w-px-50 shadow text-center">
                                                <h5 class="mb-0 text-dark"><span class="badge bg-primary p-3 fw-bold border-light">برمجة</span></h5>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-center fs-5 fw-bold mb-4">تصميم مواقع ويب</h5>
                                                <div class="d-flex align-items-center justify-content-center my-1 gap-2">
                                                    {{--                                            <span class="badge bg-label-success fs-5 me-1">مفعل</span>--}}
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{--                                            <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>--}}
                                                    <button type="button" class="btn btn-label-primary fs-5 fw-bold px-3">
                                                        <span class="tf-icons bx bx-user-check"></span>&nbsp; وصول
                                                    </button>
                                                </div>
                                                <div class="mt-3 d-flex fs-6 align-items-center justify-content-around">
                                                    <a href="#" class="text-muted me-3" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                       data-bs-placement="bottom" data-bs-html="true" title=""
                                                       data-bs-original-title="اجمالي الطلبات">
                                                        <i class="bx bx-cart me-1 fs-4"></i> 236</a>
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                       data-bs-placement="bottom" data-bs-html="true" title=""
                                                       data-bs-original-title="اجمالي التقييمات"><i class="bx bx-star me-1 fs-4"></i> 12</a>
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                       data-bs-placement="bottom" data-bs-html="true" title=""
                                                       data-bs-original-title="وقت التسليم التقريبي"><i class="bx bx-time me-1 fs-4"></i> 12 يوم</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-list" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>أسم الخدمة</th>
                                            <th>نوع الخدمة</th>
                                            <th>موفر الخدمة</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>الحالة</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>1</td>
                                            <td> تصميم مواقع ويب </td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                            <td>عبدالهادي ديان</td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-success fs-6 me-1">مفعل</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-danger">
                                                    <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الخدمة
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td> تصميم مواقع ويب </td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                            <td>عبدالهادي ديان</td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-success fs-6 me-1">مفعل</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-danger">
                                                    <span class="tf-icons bx bx-block"></span>&nbsp; ايقاف الخدمة
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td> تصميم مواقع ويب </td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                            <td>عبدالهادي ديان</td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-danger fs-6 me-1">متوقف</span></td>
                                            <td>
                                                <button type="button" class="btn btn-label-primary">
                                                    <span class="tf-icons bx bx-check"></span>&nbsp; تفعيل الخدمة
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Search services -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-5">
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
    <script src="../../assets/js/ui-popover.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
@endsection
