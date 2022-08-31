@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css">

    <link rel="stylesheet" href="{{ asset('assets/css/tabs.css') }}">
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
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
                <div class="help-center-popular-articles py-5">
                    <div class="container-xl">
                        <ul class="nav nav-tabs border-bottom border-light mx-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active fas fa-th-large fs-4 bg-white" role="tab"
                                        data-bs-toggle="tab" data-bs-target="#navs-card"
                                        aria-controls="navs-top-profile" aria-selected="true"></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-list fs-4 bg-white" role="tab"
                                        data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-top-home"
                                        aria-selected="false"></button>
                            </li>
                        </ul>
                        {{-- Tabs --}}
                        <div class="tab-content shadow-none pt-0">
                            {{-- List View --}}
                            <div class="tab-pane fade" id="navs-list" role="tabpanel">

                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>أسم الخدمة</th>
                                            <th>المجال</th>
                                            <th>نوع الدفع</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>الطلبات</th>
                                            <th>التقييمات</th>
                                            <th>فترة التسليم</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-1">
                                        <tr>
                                            <td>1</td>
                                            <td>تصميم مواقع</td>
                                            <td>عبدالهادي ديان</td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">الكتروني</span></td>
                                            <td>2022-05-12</td>
                                            <td>15</td>
                                            <td>4.5</td>
                                            <td>3 يوم</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- Card View --}}
                            <div class="tab-pane fade active show" id="navs-card" role="tabpanel">

                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-4">
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
                                                <h5 class="mb-0 text-dark"><span class="badge bg-label-primary pb-3 px-3 fs-6">برمجة</span></h5>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-center fs-5 fw-bold mb-4">تصميم مواقع ويب</h5>
                                                <div class="d-flex align-items-center justify-content-center my-1 gap-2">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-primary fs-5 px-3">
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
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-4">
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
                                                <h5 class="mb-0 text-dark"><span class="badge bg-label-primary pb-3 px-3 fs-6">برمجة</span></h5>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-center fs-5 fw-bold mb-4">تصميم مواقع ويب</h5>
                                                <div class="d-flex align-items-center justify-content-center my-1 gap-2">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-primary fs-5 px-3">
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
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-4">
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
                                                <h5 class="mb-0 text-dark"><span class="badge bg-label-primary pb-3 px-3 fs-6">برمجة</span></h5>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-center fs-5 fw-bold mb-4">تصميم مواقع ويب</h5>
                                                <div class="d-flex align-items-center justify-content-center my-1 gap-2">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-primary fs-5 px-3">
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
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-4">
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
                                                <h5 class="mb-0 text-dark"><span class="badge bg-label-primary pb-3 px-3 fs-6">برمجة</span></h5>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-center fs-5 fw-bold mb-4">تصميم مواقع ويب</h5>
                                                <div class="d-flex align-items-center justify-content-center my-1 gap-2">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-primary fs-5 px-3">
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
                        </div>
                        {{-- Modals --}}
                        <div>
                            <div class="modal fade" id="editeCategory1" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{route('category.update')}}"
                                              enctype="multipart/form-data"
                                              id="formAccountSettings" method="POST"
                                              class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                                        >
                                            @csrf
                                            <div class="card-body">
                                                <div class="d-flex align-items-sm-center gap-4 flex-wrap">
                                                    <img src="" alt="user-avatar"
                                                         class="d-block rounded img-fluid h-px-150 w-px-150"
                                                         style="object-fit: contain" id="uploadedImg">
                                                    <div class="button-wrapper my-auto">
                                                        <label for="upload" class="btn btn-primary me-2" tabindex="0">
                                                            <span class="d-none d-sm-block">أضافة صورة</span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" id="upload" class="account-file-input" name='image'
                                                                   hidden="" accept="image/png, image/jpeg">
                                                        </label>
                                                    </div>
                                                    <p class="text-muted mb-0">الصيغ المتاحة JPG, GIF أو PNG. الحد الأقصى
                                                        800K</p>
                                                </div>
                                            </div>
                                            <input type="hidden"  name='id' value=''>

                                            <hr class="my-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="name" class="form-label">أسم المجال</label>
                                                        <input type="text" class="form-control" id="name"
                                                               placeholder="أسم المجال" value="" name='name'>
                                                    </div>
                                                    <div>
                                                        <label for="exampleFormControlTextarea1" class="form-label">وصف
                                                            المجال</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                  rows="3" placeholder="الوصف"
                                                                  name='description'
                                                        > يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب
                                        تصميمك </textarea>
                                                    </div>


                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary me-2"> حفظ التعديل</button>
                                                    <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">إلغاء
                                                    </button>
                                                </div>
                                                <div></div>
                                                <input type="hidden">
                                            </div>

                                        </form>
                                    </div>
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
@endsection
