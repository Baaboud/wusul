<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="rtl" data-theme="theme-semi-dark"
      data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">


<!-- layouts-without-menu.html , Sat, 26 Mar 2022 16:50:53 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title','منصة وصول')</title>

    <meta name="description"
          content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!"/>
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-semi-dark.css') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}"/>


    <!-- Page CSS -->

        <livewire:styles />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{--    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>--}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

    @yield('extra-style')

</head>

<body style="font-family: 'Poppins', sans-serif;">

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <!-- Aside -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

            <div class="app-brand demo h-px-75">
                <a href="index-2.html" class="app-brand-link w-100 d-flex justify-content-center flex-wrap">
                    <img src="http://127.0.0.1:8000/img/logo.png" class="w-px-40 h-auto p-1" alt="" srcset="">
                    <span class="ms-1 fs-4 fw-bold text-white">وصول</span>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1 mt-4 mb-3">
                <!-- Dashboards -->
                <li class="menu-item active">
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div>لوحة التحكم</div>
                    </a>
                </li>
                @if(Auth::user()->admin())
                 <!-- Misc -->
                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أدارة العمليات</span></li>
                <li class="menu-item">
                    <a href="{{route('admin.users')}}" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div>المستخدمين</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('admin.services')}}"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                        <div>الخدمات</div>
                    </a>
                </li>

                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أدارة العمليات</span></li>
                <li class="menu-item">
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div>أدارة الفواتير</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-report"></i>
                        <div>أدارة البلاغات</div>
                    </a>
                </li>

                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أعدادات المنصة</span></li>
                <li class="menu-item">
                    <a href="{{route('categories')}}"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div>أدارة المجالات</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('states')}}" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-city"></i>
                        <div>أدارة المحافظات</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('cities')}}"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-current-location"></i>
                        <div>أدارة المدن</div>
                    </a>
                </li>
                @endif

                @if(Auth::user()->userServiceProvider())

                <!-- Service Provider -->
                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text text-danger">مزود الخدمة</span></li>
                <!-- Orders -->
                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أدارة العمليات</span></li>
                <li class="menu-item {{Request::url() === route('category.store') ? 'active' : ''}}">
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                        <div>الطلبات</div>
                    </a>
                </li>
                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أدارة الخدمات</span></li>

                <li class="menu-item {{Request::url() === route('test') ? 'active' : ''}}">
                    <a href="{{route('service')}}" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div>الخدمات</div>
                    </a>
                </li>
                <li class="menu-item {{Request::url() === route('test') ? 'active' : ''}}">
                    <a href="{{route('service.create')}}" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div>اضافة خدمة</div>
                    </a>
                </li>
                <!-- Money -->
                <li class="menu-header text-uppercase text-white fs-6"><span class="menu-header-text">أدارة العمليات</span></li>
                <li class="menu-item">
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div>المحفظة</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                       target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-report"></i>
                        <div>البلاغات</div>
                    </a>
                </li>
                @endif
            </ul>
        </aside>
        <!-- / Aside -->

        <div class="layout-page">
            <!-- Navbar -->
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                 id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">


                        @auth()
                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                                <!-- Quick links  -->
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-grid-alt bx-sm"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0">
                                        <div class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">اختصارات</h5>
                                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add shortcuts" aria-label="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-shortcuts-list scrollable-container ps ps__rtl ps--active-y">
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-calendar fs-4"></i>
                                      </span>
                                                    <a href="app-calendar.html" class="stretched-link">التقويم</a>
                                                    <small class="text-muted mb-0">المواعيد</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-food-menu fs-4"></i>
                                      </span>
                                                    <a href="app-invoice-list.html" class="stretched-link">الحساب</a>
                                                    <small class="text-muted mb-0">ادارة الحسابات</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-user fs-4"></i>
                                      </span>
                                                    <a href="app-user-list.html" class="stretched-link">المستخدمين</a>
                                                    <small class="text-muted mb-0">ادارة المستخدمين</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-check-shield fs-4"></i>
                                      </span>
                                                    <a href="app-access-roles.html" class="stretched-link">ادارة الادوار</a>
                                                    <small class="text-muted mb-0">الصلاحيات</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                      </span>
                                                    <a href="index-2.html" class="stretched-link">لوحة التحكم</a>
                                                    <small class="text-muted mb-0">الملف الشخصي</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-cog fs-4"></i>
                                      </span>
                                                    <a href="{{ route('account') }}" class="stretched-link">الاعدادات</a>
                                                    <small class="text-muted mb-0">اعدادات الحساب</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-help-circle fs-4"></i>
                                      </span>
                                                    <a href="pages-help-center-landing.html" class="stretched-link">مركز الدعم</a>
                                                    <small class="text-muted mb-0">الاسئلة الشائعة</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-window-open fs-4"></i>
                                      </span>
                                                    <a href="modal-examples.html" class="stretched-link">قوائم</a>
                                                    <small class="text-muted mb-0">قوائم المستخدم</small>
                                                </div>
                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 337px; height: 480px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 378px;"></div></div></div>
                                    </div>
                                </li>
                                <!-- Quick links -->

                                <!-- Notification -->
                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-bell bx-sm"></i>
                                        <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end py-0">
                                        <li class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">الاشعارات</h5>
                                                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mark all as read" aria-label="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                            </div>
                                        </li>
                                        <li class="dropdown-notifications-list scrollable-container ps ps__rtl">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                            <p class="mb-0">Won the monthly best seller gold badge</p>
                                                            <small class="text-muted">1h ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Charles Franklin</h6>
                                                            <p class="mb-0">Accepted your connection</p>
                                                            <small class="text-muted">12hr ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="assets/img/avatars/2.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">New Message ✉️</h6>
                                                            <p class="mb-0">You have new message from Natalie</p>
                                                            <small class="text-muted">1h ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                            <small class="text-muted">1 day ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="assets/img/avatars/9.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                            <p class="mb-0">Your ABC project application has been approved.</p>
                                                            <small class="text-muted">2 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Monthly report is generated</h6>
                                                            <p class="mb-0">July monthly financial report is generated </p>
                                                            <small class="text-muted">3 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="assets/img/avatars/5.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Send connection request</h6>
                                                            <p class="mb-0">Peter sent you connection request</p>
                                                            <small class="text-muted">4 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="assets/img/avatars/6.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">New message from Jane</h6>
                                                            <p class="mb-0">Your have new message from Jane</p>
                                                            <small class="text-muted">5 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">CPU is running high</h6>
                                                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                            <small class="text-muted">5 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: -13px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                                        <li class="dropdown-menu-footer border-top">
                                            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                                عرض جميع الاشعارات
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Notification -->

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                            @if(isset(Auth::user()->profile->image))
                                                <img src="{{asset('assets/images/users/'.Auth::user()->profile->image)}}" 
                                                alt="Profile" class="w-px-40 h-auto rounded-circle" id="">
                                            @else
                                        <img src="{{ asset('img/user.png') }}" alt="" class="w-px-40 h-auto rounded-circle">

                                            @endif

                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                    @if(isset(Auth::user()->profile->image))
                                                            <img src="{{asset('assets/images/users/'.Auth::user()->profile->image)}}" 
                                                            alt="Profile" class="w-px-40 h-auto rounded-circle" id="">
                                                        @else
                                                    <img src="{{ asset('img/user.png') }}" alt="" class="w-px-40 h-auto rounded-circle">

                                                    @endif                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                                                        <small class="text-muted"> {{Auth::user()->type==1?'مديرالنظام':'صاحب خدمه'}}</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('profile') }}">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">ملفي الشخصي</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('account') }}">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">الاعدادت</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                    <span class="d-flex align-items-center align-middle">
                                      <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                      <span class="flex-grow-1 align-middle">الدفع</span>
                                      <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                                <i class="bx bx-support me-2"></i>
                                                <span class="align-middle">المساعدة</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-faq.html">
                                                <i class="bx bx-help-circle me-2"></i>
                                                <span class="align-middle">الاسئلة الشائعة</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-pricing.html">
                                                <i class="bx bx-dollar me-2"></i>
                                                <span class="align-middle">الاسعار</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">تسجيل الخروج</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->


                            </ul>
                        @endauth

                        @guest()
                            <div class="d-flex flex-row align-items-center ms-auto">
                                <a href="{{ route('login') }}" class="btn btn-label-primary mx-1">تسجيل الدخول</a>
                                <a href="{{ route('register') }}" class="btn btn-dark mx-1">انشاء حساب</a>
                            </div>
                        @endguest


                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input type="text" class="form-control search-input container-xxl border-0"
                           placeholder="Search..." aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>


            </nav>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="container-xxl flex-grow-1 container-p-y">

                <!-- Content -->
                    @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">

                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->


<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->

<livewire:scripts />

<!-- / Layout wrapper -->

@yield('scripts')

</body>


<!-- layouts-without-menu.html , Sat, 26 Mar 2022 16:50:54 GMT -->
</html>
