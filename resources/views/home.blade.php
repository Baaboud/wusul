@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="card overflow-hidden">
                <!-- Help Center Header -->
                <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
                    <h3 class="text-center"> ابحث عن الخدمة التي تحتاجها </h3>
                    <div class="input-wrapper my-3 input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon1"><i class="bx bx-search-alt bx-xs text-muted"></i></span>
                        <input type="text" class="form-control form-control-lg" placeholder="ادخل اسم الخدمة او اسم موفر الخدمة" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
                    <p class="text-center px-3 mb-0">كما يمكنك البحث عن اقرب خدمة متوفرة</p>
                </div>
                <!-- /Help Center Header -->

                <!-- general services -->
                <div class="help-center-popular-articles py-5">
                    <div class="container-xl">
                        <h4 class="text-center mt-2 mb-4">الخدمات العامة</h4>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/img/icons/unicons/rocket.png" height="60" alt="Help center articles">
                                                <h5>التصميم</h5>
                                                <p> يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب تصميمك </p>
                                                <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض الخدمات</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/img/icons/unicons/cube-secondary.png" height="60" alt="Help center articles">
                                                <h5>خدمات كهربائية</h5>
                                                <p> يمكنك الوصول الى ابرع المهندسين في الكهربائيات للحصول على خدمات متخصصة وعالية الجودة
                                                </p>
                                                <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض الخدمات</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/img/icons/unicons/desktop.png" height="60" alt="Help center articles">
                                                <h5>الخدمات البرمجية</h5>
                                                <p> يمكنك الحصول على خدمات برمجية احترافية من ابرع المبرمجين وبأفضل الاسعار </p>
                                                <a class="btn btn-label-primary" href="pages-help-center-article.html">عرض الخدمات</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /general services -->

                <!-- detailed services -->
                <div class="help-center-knowledge-base help-center-bg-alt pt-5 pb-4">
                    <div class="container-xl">
                        <h4 class="text-center mb-4">خدمات متخصصة</h4>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-archive fs-3"></i></span>
                                                <h5 class="mt-3">eCommerce</h5>
                                                <p><a href="pages-help-center-categories.html">Pricing
                                                        Wizard</a></p>
                                                <p class="mb-4"><a href="pages-help-center-categories.html">Square
                                                        Sync</a></p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">56 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-layout fs-3"></i></span>
                                                <h5 class="mt-3">Building Your Website</h5>
                                                <p><a href="pages-help-center-categories.html">First
                                                        Steps</a></p>
                                                <p class="mb-4"><a href="pages-help-center-categories.html">Add
                                                        Images</a></p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">111 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-user fs-3"></i></span>
                                                <h5 class="mt-3">Your Account</h5>
                                                <p><a href="pages-help-center-categories.html">Insights</a>
                                                </p>
                                                <p class="mb-4">
                                                    <a href="pages-help-center-categories.html">Manage
                                                        Your Orders</a>
                                                </p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">29 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-link-alt fs-3"></i></span>
                                                <h5 class="mt-3">Domains and Email</h5>
                                                <p>
                                                    <a href="pages-help-center-categories.html">Access
                                                        to Admin Account</a>
                                                </p>
                                                <p class="mb-4">
                                                    <a href="pages-help-center-categories.html">Send
                                                        Email From an Alias</a>
                                                </p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">22 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-mobile-alt fs-3"></i></span>
                                                <h5 class="mt-3">Mobile Apps</h5>
                                                <p>
                                                    <a href="pages-help-center-categories.html">Getting
                                                        Started with the App</a>
                                                </p>
                                                <p class="mb-4">
                                                    <a href="pages-help-center-categories.html">Getting
                                                        Started with Android</a>
                                                </p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">24 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="badge bg-label-secondary p-2 rounded"><i class="bx bx-envelope fs-3"></i></span>
                                                <h5 class="mt-3">Email Marketing</h5>
                                                <p><a href="pages-help-center-categories.html">Getting
                                                        Started</a></p>
                                                <p class="mb-4">
                                                    <a href="pages-help-center-categories.html">How does
                                                        this work?</a>
                                                </p>
                                                <p class="mb-0 fw-semibold">
                                                    <a href="javascript:void(0);">27 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /detailed services -->

                <!-- Keep Learning -->
                <div class="help-center-keep-learning py-5">
                    <div class="container-xl">
                        <h4 class="text-center mb-5">كيفية استخدام المنصة</h4>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4 text-center">
                                        <img src="../../assets/img/icons/unicons/laptop.png" class="mb-2" height="50" alt="Help center blog">
                                        <h5 class="my-3">قم بالتسجيل في المنصة</h5>
                                        <p class="mb-1"> قم بأنشاء حساب على المنصة وتعبئة البيانات المطلوبة. </p>
                                        <a href="pages-help-center-categories.html" class="d-flex align-items-center justify-content-center mt-2">
                                            <span class="align-middle me-1">وصول</span>
                                            <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4 text-center">
                                        <img src="../../assets/img/icons/unicons/bulb.png" class="mb-2" height="50" alt="Help center inspiration">
                                        <h5 class="my-3">ابحث عن الخدمة المناسبة لك</h5>
                                        <p class="mb-1"> قم بالبحث في المنصة عن الخدمة المناسبة لك وفي المكان المناسب والوقت المناسب </p>
                                        <a href="pages-help-center-categories.html" class="d-flex align-items-center justify-content-center mt-2">
                                            <span class="align-middle me-1">وصول</span>
                                            <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i></a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <img src="../../assets/img/icons/unicons/community.png" class="mb-2" height="50" alt="Help center inspiration">
                                        <h5 class="my-3">قم بطلب الخدمة</h5>
                                        <p class="mb-1"> قم بطلب الخدمة من موفر الخدمة الذي يقوم بتوفير هذه الخدمة. </p>
                                        <a href="pages-help-center-categories.html" class="d-flex align-items-center justify-content-center mt-2">
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
                                    <a href="javascript:void(0);" class="btn btn-label-primary">زيارة المجتمع الخاص بنا</a>
                                    <a href="javascript:void(0);" class="btn btn-label-primary">التواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Help Area -->
            </div>
        </div>
    </div>
@endsection
