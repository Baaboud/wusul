@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}"
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"> طلب خدمة</h4>

        <div class="row fv-plugins-icon-container">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">بيانات توضيحية للطلب</h5>
                    <hr class="my-0">

                    <div class="card-body">
                        <form>
                            <div class="">
                                <label for="work" class="form-label fs-6">أضف العنوان المراد وصول الخدمة إليه </label>
                                <input type="text" class="form-control mb-3" id="work" name="work" placeholder="العنوان">
                                <div class="">
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label fs-6">وصف توضيحي للطلب</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                              placeholder="وصف الطلب"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">إرســـال</button>
                                <button type="reset" class="btn btn-label-secondary">إلغاء</button>
                            </div>
                        </form>
                        <div class="col-12 mb-4">
                            <p class="fw-semibold mt-5">ملاحظات</p>
                            <ul class="ps-3 mb-0">
                                <li class="mb-1">قم بكتابة وصف متكامل للخدمة المطلوبة</li>
                                <li class="mb-1">يفضل وصف الخدمة في نقاط محدد</li>
                                <li>كتابة وصف واضح ومفهوم</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>


    </div>
@endsection
