@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}"
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-yx px-0">
        <div class="container-fluid flex-grow-1 container-p-y px-0">
            <section class="banner-area"
                     style="background-image: url({{ asset('img/back.png') }}); background-color: #8490ff">
                <div class="container">
                    <div class="row fullscreen align-items-center justify-content-between">

                        <div class="col-lg-6 col-md-6 banner-left text-center">

                            <h1 style="color: #fed01b; font-size: 60px" class="fw-bolder">منصة وصول للخدمات </h1>
                            <h2 class="text-white fs-3">
                                منصة كل مواطن وزائر
                            </h2>

                        </div>
                        <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                            <img class="img-fluid" src="img/herooo-img.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="help-center-popular-articles py-5">
                <div class="container-xl center position-relative">
                    <h4 class="text-center mb-5">تصفح الخدمات المتوفرة</h4>
                    <div id="drager" class="categories row slider">
                        <div class="book col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/rocket.png"
                                         height="60" alt="Help center articles">
                                    <h5>التصميم</h5>
                                    <p> يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب
                                        تصميمك </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/cube-secondary.png" height="60" alt="Help center articles">
                                    <h5>خدمات كهربائية</h5>
                                    <p> يمكنك الوصول الى ابرع المهندسين في الكهربائيات للحصول على خدمات
                                        متخصصة وعالية الجودة
                                    </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/desktop.png" height="60" alt="Help center articles">
                                    <h5>الخدمات البرمجية</h5>
                                    <p> يمكنك الحصول على خدمات برمجية احترافية من ابرع المبرمجين وبأفضل
                                        الاسعار </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/rocket.png"
                                         height="60" alt="Help center articles">
                                    <h5>التصميم</h5>
                                    <p> يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب
                                        تصميمك </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/cube-secondary.png" height="60" alt="Help center articles">
                                    <h5>خدمات كهربائية</h5>
                                    <p> يمكنك الوصول الى ابرع المهندسين في الكهربائيات للحصول على خدمات
                                        متخصصة وعالية الجودة
                                    </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="mb-3" src="../../assets/img/icons/unicons/desktop.png" height="60" alt="Help center articles">
                                    <h5>الخدمات البرمجية</h5>
                                    <p> يمكنك الحصول على خدمات برمجية احترافية من ابرع المبرمجين وبأفضل
                                        الاسعار </p>
                                    <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض
                                        الخدمات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i class="fa fa-arrow-right slideRight" id="right"></i>
                    <i class="fa fa-arrow-left slideLeft" id="left"></i>
                </div>
            </div>
            <!-- general services -->
{{--            <div class="help-center-popular-articles py-5">--}}
{{--                <div class="container-xl">--}}
{{--                    <h4 class="text-center mt-2 mb-4">الخدمات العامة</h4>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-10 mx-auto">--}}
{{--                            <div class="row mb-3">--}}
{{--                                <div class="col-md-4 mb-md-0 mb-4">--}}
{{--                                    <div class="card border shadow-none">--}}
{{--                                        <div class="card-body text-center">--}}
{{--                                            <img class="mb-3" src="../../assets/img/icons/unicons/rocket.png"--}}
{{--                                                 height="60" alt="Help center articles">--}}
{{--                                            <h5>التصميم</h5>--}}
{{--                                            <p> يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب--}}
{{--                                                تصميمك </p>--}}
{{--                                            <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض--}}
{{--                                                الخدمات</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4 mb-md-0 mb-4">--}}
{{--                                    <div class="card border shadow-none">--}}
{{--                                        <div class="card-body text-center">--}}
{{--                                            <img class="mb-3"--}}
{{--                                                 src="../../assets/img/icons/unicons/cube-secondary.png" height="60"--}}
{{--                                                 alt="Help center articles">--}}
{{--                                            <h5>خدمات كهربائية</h5>--}}
{{--                                            <p> يمكنك الوصول الى ابرع المهندسين في الكهربائيات للحصول على خدمات--}}
{{--                                                متخصصة وعالية الجودة--}}
{{--                                            </p>--}}
{{--                                            <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض--}}
{{--                                                الخدمات</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="card border shadow-none">--}}
{{--                                        <div class="card-body text-center">--}}
{{--                                            <img class="mb-3" src="../../assets/img/icons/unicons/desktop.png"--}}
{{--                                                 height="60" alt="Help center articles">--}}
{{--                                            <h5>الخدمات البرمجية</h5>--}}
{{--                                            <p> يمكنك الحصول على خدمات برمجية احترافية من ابرع المبرمجين وبأفضل--}}
{{--                                                الاسعار </p>--}}
{{--                                            <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض--}}
{{--                                                الخدمات</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row d-flex justify-content-center align-items-center">--}}
{{--                            <a href="#" class="btn btn-outline-primary py-2 w-auto px-5 rounded fs-5">الاطلاع--}}
{{--                                اكثر <i class="fa fa-arrow-left" aria-hidden="true"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- /general services -->

            <!-- Keep Learning -->
            <div class="help-center-keep-learning py-5">
                <div class="container-xl">
                    <h4 class="text-center mb-5">كيفية استخدام المنصة</h4>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-md-4 mb-md-0 mb-4 text-center">
                                    <img src="../../assets/img/icons/unicons/laptop.png" class="mb-2" height="50"
                                         alt="Help center blog">
                                    <h5 class="my-3">قم بالتسجيل في المنصة</h5>
                                    <p class="mb-1"> قم بأنشاء حساب على المنصة وتعبئة البيانات المطلوبة. </p>
                                    <a href="pages-help-center-categories.html"
                                       class="d-flex align-items-center justify-content-center mt-2">
                                        <span class="align-middle me-1">وصول</span>
                                        <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i>
                                    </a>
                                </div>
                                <div class="col-md-4 mb-md-0 mb-4 text-center">
                                    <img src="../../assets/img/icons/unicons/bulb.png" class="mb-2" height="50"
                                         alt="Help center inspiration">
                                    <h5 class="my-3">ابحث عن الخدمة المناسبة لك</h5>
                                    <p class="mb-1"> قم بالبحث في المنصة عن الخدمة المناسبة لك وفي المكان المناسب
                                        والوقت المناسب </p>
                                    <a href="pages-help-center-categories.html"
                                       class="d-flex align-items-center justify-content-center mt-2">
                                        <span class="align-middle me-1">وصول</span>
                                        <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i></a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="../../assets/img/icons/unicons/community.png" class="mb-2" height="50"
                                         alt="Help center inspiration">
                                    <h5 class="my-3">قم بطلب الخدمة</h5>
                                    <p class="mb-1"> قم بطلب الخدمة من موفر الخدمة الذي يقوم بتوفير هذه الخدمة. </p>
                                    <a href="pages-help-center-categories.html"
                                       class="d-flex align-items-center justify-content-center mt-2">
                                        <span class="align-middle me-1">وصول</span>
                                        <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Keep Learning -->

            <!-- Help Area -->
            <div class="help-center-contact-us help-center-bg-alt">
                <div class="container-xl">
                    <div class="row justify-content-center py-5 my-3">
                        <div class="col-md-8 col-lg-6 text-center">
                            <h4>هل تحتاج المساعدة</h4>
                            <p class="mb-4"> يمكنك التواصل معنا للاستفسارات وحل الصعوبات التي تواجهكم في منصتنا
                                <br> وسيتم الرد في اسرع وقت
                            </p>
                            <div class="d-flex justify-content-center flex-wrap gap-4">
                                <a href="javascript:void(0);" class="btn btn-label-primary">زيارة المجتمع الخاص
                                    بنا</a>
                                <a href="javascript:void(0);" class="btn btn-label-primary">التواصل معنا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Help Area -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/js/ui-carousel.js"></script>
    <script>
        //Books Scroll Slider
        const booksize = document.querySelector('.slider .book').clientWidth;
        const buttonRight = document.querySelectorAll('.slideRight');
        const buttonLeft = document.querySelectorAll('.slideLeft');

        buttonRight.forEach(element => {
            element.addEventListener('click', (e) => {
                e.preventDefault();
                element.parentElement.querySelector('.slider').scrollLeft += (booksize);
            });
        });

        buttonLeft.forEach(element => {
            element.addEventListener('click', (e) => {
                e.preventDefault();
                element.parentElement.querySelector('.slider').scrollLeft -= (booksize);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ele = document.getElementById('drager');
            ele.style.cursor = 'grab';

            let pos = { top: 0, left: 0, x: 0, y: 0 };

            const mouseDownHandler = function (e) {
                ele.style.cursor = 'grabbing';
                ele.style.userSelect = 'none';

                pos = {
                    left: ele.scrollLeft,
                    top: ele.scrollTop,
                    // Get the current mouse position
                    x: e.clientX,
                    y: e.clientY,
                };

                document.addEventListener('mousemove', mouseMoveHandler);
                document.addEventListener('mouseup', mouseUpHandler);
            };

            const mouseMoveHandler = function (e) {
                // How far the mouse has been moved
                const dx = e.clientX - pos.x;
                const dy = e.clientY - pos.y;

                // Scroll the element
                ele.scrollTop = pos.top - dy;
                ele.scrollLeft = pos.left - dx;
            };

            const mouseUpHandler = function () {
                ele.style.cursor = 'grab';
                ele.style.removeProperty('user-select');

                document.removeEventListener('mousemove', mouseMoveHandler);
                document.removeEventListener('mouseup', mouseUpHandler);
            };

            // Attach the handler
            ele.addEventListener('mousedown', mouseDownHandler);
        });
    </script>
@endsection
