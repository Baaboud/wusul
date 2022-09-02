@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}"
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User / View /</span> Create Service
        </h4>
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                <div class="card invoice-preview-card">
                    <div class="card-body">
                        <div
                            class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                            <div class="mb-xl-0 mb-4">
                                <div class="d-flex svg-illustration mb-3 gap-2">
              <span class="app-brand-logo demo">
                  <img src="http://127.0.0.1:8000/img/logo.png" class="w-px-40 h-auto p-1" alt="" srcset="">
              </span>
                                    <span class="app-brand-text demo text-body fw-bolder">منصة وصول للخدمات</span>
                                </div>
                                <p class="mb-1">www.wusul.com</p>
                                <p class="mb-1">wusul@gmail.com</p>
                                <p class="mb-0">+967-770-552-517</p>
                            </div>
                            <div>
                                <h4>فاتورة #3492</h4>
                                <div class="mb-2">
                                    <span class="me-1">تاريخ الأصدار:</span>
                                    <span class="fw-semibold">25/08/2020</span>
                                </div>
                                <div>
                                    <span class="me-1">تاريخ الاستحقاق:</span>
                                    <span class="fw-semibold">29/08/2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row p-sm-3 p-0">
                            <div class="col-md-6 col-sm-7">
                                <span class="app-brand-text demo text-body fw-bolder">بيانات العميل</span>

                                <h6 class="pb-2"></h6>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="pe-3">الأسم:</td>
                                        <td>عبدالله محمد الجوهي</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">المحافظة:</td>
                                        <td>ذمار</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">المدينة:</td>
                                        <td>المنصورة</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <span class="app-brand-text demo text-body fw-bolder">بيانات الخدمة</span>

                                <h6 class="pb-2"></h6>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="pe-3">أسم مالك الخدمة:</td>
                                        <td>أسامة هادي</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">أسم الخدمة:</td>
                                        <td>تصميم مواقع</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">عنوان طلب:</td>
                                        <td>المكلا المساكن</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">الوصف:</td>
                                        <td>رؤبيقيبغااتهتتنةىىلاءيسصثس افبغفغى تىلغع</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive border-top">
                        <table class="table m-0 pt-3">
                            <span class="app-brand-text demo text-body fw-bolder px-5">بيانات الطلب</span>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-label-primary text-white p-3 fs-6">
                                        <span class="fw-semibold">الوصف:</span>
                                        <span>هل تحتاج شركتك إلى طريقة أسهل لتلقي الطلبات وتوزيعها وإدارتها؟ بفضل طلب النماذج من Jotform، ستتمكن من إدارة الطلبات بسهولة لا تصدق. لذلك سواء كنت تقوم بإنشاء نموذج طلب للموظفين أو طلب منتجات، فإن Jotform ستساعدك في ذلك.
نقدم لك مجموعة متنوعة من قوالب نماذج الطلبات المعدة مسبقًا أو يمكنك إنشاء نموذج طلب من البداية. ثم باستخدام منشئ النماذج من Jotform، يمكنك تخصيص نموذج الطلب وتنسيقه لتلبية احتياجاتك.
جرب أحد قوالب نماذج الطلبات المجانية عبر الإنترنت اليوم!</span>
                                    </div>
                                </div>
                            </div>
                            </tbody>
                        </table>
                        <div class="text-center px-4 py-5 d-flex justify-content-center border-top border-bottom">
                            <p class="mb-0 fs-4 me-3">اجمالي المبلغ:</p>
                            <p class="fw-semibold mb-0 fs-4 text-danger">$204.25</p>
                        </div>
                        <div class="container mb-3">
                            <div class="col-6 mb-3 mt-5">
                                <input type="text" class="form-control col-6" id="salesperson" placeholder="أدخل السعر">
                            </div>
                            <button type="button" class="btn btn-label-primary">قبول</button>
                            <button type="button" class="btn btn-label-danger">رفض</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice -->

            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions position-relative">
                <div class="card position-sticky" style="top: 90px">
                    <div class="card-body">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                data-bs-target="#addPaymentOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                    class="bx bx-printer bx-xs me-3"></i>طباعة</span>
                        </button>
                        <button class="btn btn-label-danger d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                data-bs-target="#addPaymentOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                    class="bx bx-block bx-xs me-3"></i>رفض</span>
                        </button>
                        <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas"
                                data-bs-target="#addPaymentOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                    class="bx bx-dollar bx-xs me-3"></i>دفع</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
    </div>


    </div>
@endsection



