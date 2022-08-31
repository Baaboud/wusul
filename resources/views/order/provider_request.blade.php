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

        <div class="row fv-plugins-icon-container">
            <div class="col-md-12">
<div class="card invoice-preview-card">
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
                            <span class="app-brand-text demo text-body fw-bolder">بيانات الطلب</span>

                            <h6 class="pb-2"></h6>
                            <table>
                                <tbody>
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

                    <hr class="mx-n4">




                    <div class="row py-sm-3">
                        <div class="col-md-6 mb-md-0 mb-3">
                            <div class="d-flex align-items-center mb-3">

                                <input type="text" class="form-control" id="salesperson" placeholder="أدخل السعر">
                            </div>
                             </div>
                    </div>

                    <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">قبــول</span>
                    </button>

                    <button type="button" class="btn btn-label-secondary d-grid w-100">رفض</button>

                </div>

            </div>
        </div>








</div>
    </div>


</div>
@endsection



