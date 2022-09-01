@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css">

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
@endsection

@section('content')

    <div class="container-xxl flex-grow-1">
        <div class="container-xxl flex-grow-1 container-p-y px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">الملف الشخصي /</span> البيانات الشخصية
            </h4>


            <!-- Header -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="user-profile-header-banner">
                            <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top">
                        </div>
                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                @if(isset(Auth::user()->profile->image))
                                    <img src="{{asset('assets/images/users/'.Auth::user()->profile->image)}}" alt="" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                                @else
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                                @endif
                            </div>
                            <div class="flex-grow-1 mt-3 mt-sm-5">
                                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                    <div class="user-profile-info">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-pen'></i> مستخدم
                                            </li>
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-map'></i> حضرموت - المكلا
                                            </li>
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-calendar-alt'></i> أنظم في أبريل 2021
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                                        <i class='bx bx-edit'></i> تعديل
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Header -->

            <!-- Navbar pills -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-user'></i> البيانات الشخصية</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#"><i class='bx bx-group'></i> الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-grid-alt'></i> الطلبات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-wallet'></i> المحفظة</a></li>
                    </ul>
                </div>
            </div>
            <!--/ Navbar pills -->

            <!-- User Profile Content -->
            <div class="row mt-3">
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-4">
                    <div class="card shadow h-100">
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
            <!--/ User Profile Content -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
@endsection
