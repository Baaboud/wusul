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
                        <li class="nav-item"><a class="nav-link active" href="#"><i class='bx bx-user'></i> البيانات الشخصية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-group'></i> الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-grid-alt'></i> الطلبات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class='bx bx-link-alt'></i> الدفع</a></li>
                    </ul>
                </div>
            </div>
            <!--/ Navbar pills -->

            <!-- User Profile Content -->
            <div class="row">
                <div class="col-md-6 col-12">
                    <!-- About User -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <small class="text-muted text-uppercase">عام</small>
                            <ul class="list-unstyled mb-4 mt-3">
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">الأسم الكامل:</span> <span>عبدالله باعبود</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">نوع الحساب:</span> <span>مستخدم</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">الحالة:</span> <span>نشط</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-data"></i><span class="fw-semibold mx-2">تاريخ الميلاد:</span> <span>2022-03-12</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bxs-flag"></i><span class="fw-semibold mx-2">المحافظة:</span> <span>حضرموت</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bxs-city"></i><span class="fw-semibold mx-2">المدينة:</span> <span>المكلا</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-current-location"></i><span class="fw-semibold mx-2">العنوان:</span> <span>فوه القديمة</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-semibold mx-2">تاريخ الانضمام:</span> <span>2021-04-12</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ About User -->
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <!-- Profile Overview -->
                        <div class="col-md-12 col-sm-6 col-12">
                            <div class=" card mb-4">
                                <div class="card-body pe-0">
                                    <small class="text-muted text-uppercase">التواصل</small>
                                    <ul class="list-unstyled mb-4 mt-3">
                                        <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">هاتف:</span> <span style="direction: ltr">770 552 517</span></li>
                                        <li class="d-flex align-items-center mb-3 flex-wrap"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2 text-nowrap">البريد الالكتروني:</span> <span class="text-primary">baaboud.dev@gmail.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Profile Overview -->
                        <!-- Profile Overview -->
                        <div class="col-md-12 col-sm-6 col-12">
                            <div class=" card mb-4">
                                <div class="card-body">
                                    <small class="text-muted text-uppercase">حسابات التواصل الاجتماعي</small>
                                    <ul class="list-unstyled mt-3 mb-0">
                                        <li class="d-flex align-items-center mb-3"><i class="bx bxl-facebook"></i><span class="fw-semibold mx-2 link-primary">فيس بوك</span></li>
                                        <li class="d-flex align-items-center mb-3"><i class='bx bxl-twitter'></i><span class="fw-semibold mx-2 link-primary">تويتر</span></li>
                                        <li class="d-flex align-items-center mb-3"><i class="bx bxl-instagram"></i><span class="fw-semibold mx-2 link-primary">اسنتاقرام</span></li>
                                        <li class="d-flex align-items-center mb-3"><i class="bx bxl-linkedin"></i><span class="fw-semibold mx-2 link-primary">لينكداين</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Profile Overview -->
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
