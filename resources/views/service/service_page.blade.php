@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/ui-carousel.css') }}">
    <link rel="stylesheet" href="../../assets/vendor/libs/leaflet/leaflet.css">
    <script src="../../assets/vendor/js/helpers.js"></script>
    <style>
        .swiper-wrapper .swiper-slide {
            background-size: contain !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-2">
            <span class="text-muted fw-light"></span> بيانات الخدمة
        </h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4 w-100" src="{{ asset('assets/img/backgrounds/3.jpg') }}" height="110" width="110" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4 class="mb-2">تصميم مواقع ويب</h4>
                                    <span class="badge bg-label-primary mt-3 fs-6">برمجة</span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around flex-wrap my-4 mx-5">
                            <a href="javascript:;" class="btn btn-primary suspend-user">طلب الخدمة</a>
                        </div>

                        <div class="info-container">
                            <div class="row d-flex justify-content-around flex-wrap">
                                <div class="col-6 d-flex align-items-start mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-customize bx-sm"></i></span>
                                    <div>
                                        <span>أجمالي الطلبات المنجزة</span>
                                        <h5 class="mb-0">25</h5>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-start mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-time bx-sm"></i></span>
                                    <div>
                                        <span>وقت التسليم التقريبي</span>
                                        <h5 class="mb-0 text-center">5 أيام</h5>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-star bx-sm"></i></span>
                                    <div>
                                        <span>متوسط التقييمات</span>
                                        <h5 class="mb-0 text-center text-warning">
                                            <i class="bx bxs-star bx-sm"></i>
                                            <i class="bx bxs-star bx-sm"></i>
                                            <i class="bx bxs-star bx-sm"></i>
                                            <i class="bx bx-star bx-sm"></i>
                                            <i class="bx bx-star bx-sm"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-current-location bx-sm"></i></span>
                            <div>
                                <span>موقع الخدمة</span>
                                <h5 class="mb-0">حضرموت - المكلا</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map" id="basicMap"></div>
                    </div>
                </div>
                <!-- /User Card -->
                <!-- Plan Card -->

                <!-- /Plan Card -->
            </div>
            <!--/ User Sidebar -->


            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-2">
                                    <img src="../../assets/img/icons/brands/react-label.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="me-2 text-body h5 mb-0">
                                    وصف الخدمة
                                </div>
                            </a>
                        </div>
                        <p>سوف اقوم بتنفيذ تصميم احترافى وجذاب لموقعك على منصه سله, تصميم وبرمجة موقع ووردبريس احترافي, تمصميم واجهات وتجربة المستخدم لموقعك الالكتروني بإحترافية.</p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-2">
                                    <img src="../../assets/img/icons/brands/react-label.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="me-2 text-body h5 mb-0">مميزات الخدمة</div>
                            </a>
                        </div>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">تطوير موقع احترافي</li>
                            <li class="list-group-item">ضمان جودة عالية</li>
                            <li class="list-group-item">التسليم خلال قبل الوقت المحدد</li>
                            <li class="list-group-item">صيانة مجانة لمدة ثلاثة اشهر</li>
                            <li class="list-group-item">اضافة ميزات اضافية بعد التسليم</li>
                        </ol>
                    </div>
                </div>

                <div class="col-12 bg-white py-3">
                    <h5 class="card-action-title p-3">نماذج اعمال</h5>
                    <div id="swiper-gallery">
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/6.jpg') }});"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/5.jpg') }});"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/7.jpg') }});"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/10.jpg') }});"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/16.jpg') }});"></div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white bg-primary"></div>
                            <div class="swiper-button-prev swiper-button-white bg-primary"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/6.jpg') }});background-size: cover !important;"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/5.jpg') }});background-size: cover !important;"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/7.jpg') }});background-size: cover !important;"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/10.jpg') }});background-size: cover !important;"></div>
                                <div class="swiper-slide" style="background-image:url({{ asset('assets/img/backgrounds/16.jpg') }});background-size: cover !important;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ User Content -->
        </div>

    </div>
@endsection


@section('scripts')
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/ui-carousel.js') }}"></script>
    <script src="../../assets/vendor/libs/leaflet/leaflet.js"></script>
    <script src="../../assets/js/maps-leaflet.js"></script>
@endsection
