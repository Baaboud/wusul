@extends('layouts.dashboard')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection

@section('content')

    <div class="container-xxl flex-grow-1">
        <div class="container-xxl flex-grow-1 pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>المحفظة
            </h4>
            <div class="card">
                <h5 class="card-header fs-4 fw-bolder">العمليات</h5>
                <div class="row d-sm-inline-flex mx-2">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">بحث</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" placeholder="بحث..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            <span class="input-group-text btn btn-primary" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">نوع الخدمة</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-list-check">الكل</option>
                            <option data-icon="bx bx-user">كهرباء</option>
                            <option data-icon="bx bx-user-pin">تقنية</option>
                            <option data-icon="bx bxs-user-account">صحة</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-rename">الاسم</option>
                            <option data-icon="bx bxs-watch">تاريخ التسجيل</option>
                            <option data-icon="bx bx-cart">عدد الطلبات</option>
                            <option data-icon="bx bx-star">اجمالي التقييمات</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الخدمة</label>
                        <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default">
                            <option data-icon="bx bx-list-check">الكل</option>
                            <option data-icon="bx bx-check">مفعلة</option>
                            <option data-icon="bx bx-block">متوقفة</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="nav-align-top">

                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover mb-5">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رقم الفاتورة</th>
                                        <th>أسم العميل</th>
                                        <th>أسم الخدمة</th>
                                        <th>التاريخ</th>
                                        <th>الوصف</th>
                                        <th>المبلغ</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>1</td>
                                        <td>23</td>
                                        <td>عبدالله الجابري</td>
                                        <td> تصميم مواقع ويب </td>
                                        <td>2022-05-12</td>
                                        <td><span class="badge bg-label-success pb-3 fs-6">ايداع</span></td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>61</td>
                                        <td>عبدالله الجابري</td>
                                        <td> تصميم مواقع ويب </td>
                                        <td>2022-05-12</td>
                                        <td><span class="badge bg-label-danger pb-3 fs-6">سحب</span></td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>93</td>
                                        <td>عبدالله الجابري</td>
                                        <td> تصميم مواقع ويب </td>
                                        <td>2022-05-12</td>
                                        <td><span class="badge bg-label-success pb-3 fs-6">ايداع</span></td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>114</td>
                                        <td>عبدالله الجابري</td>
                                        <td> تصميم مواقع ويب </td>
                                        <td>2022-05-12</td>
                                        <td><span class="badge bg-label-danger pb-3 fs-6">سحب</span></td>
                                        <td>3000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination my-5 justify-content-center">
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
    <!-- Page Title -->
    <div class="pagetitle px-5 pt-5">
        <h1>ادارة المحفظة</h1>
    </div>
    <!-- End Page Title -->

    <!-- Satistics -->
    <div class="row px-5">

        <div class="col-xxl-12 col-md-6">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bolder">الرصيد الحالي</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center mx-3"
                             style="font-size: 32px;width: 64px;height: 64px;color: #2eca6a;background: #e0f8e9;">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <div class="ps-3">
                            <span class="fs-3">$2500</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="row px-5">

        <div class="col-xxl-6 col-md-6">

            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bolder">الايداع</h5>
                    <div class="d-flex align-items-center">
                        <div
                            class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-info-light mx-3"
                            style="font-size: 32px;width: 64px;height: 64px;">
                            <i class="bi bi-plus-circle text-info"></i>
                        </div>
                        <div class="ps-3">
                            <p class="fs-3">$500</p>
                            <span class="text-success fw-bold">500</span>
                            <span class="text-muted">عملية ايداع</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-xxl-6 col-md-6">

            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bolder">السحب</h5>
                    <div class="d-flex align-items-center">
                        <div
                            class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-danger-light mx-3"
                            style="font-size: 32px;width: 64px;height: 64px;color: #ff771d;background: #ffecdf;">
                            <i class="bi bi-dash-circle text-danger"></i>
                        </div>
                        <div class="ps-3">
                            <p class="fs-3">$2000</p>
                            <span class="text-danger fw-bold">3000</span>
                            <span class="text-muted">عملية سحب</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <section class="section profile min-vh-100 overflow-hidden px-5">
        <div class="bg-white py-3 px-5 shadow rounded">

            <div class="mt-3">
                <div class="row fs-5 fw-bold p-2 rounded border-bottom mb-2">
                    <div class="col-1">
                        الرقم
                    </div>
                    <div class="col-7 ">
                        <div class="row">
                            <div class="col-9 ">
                                الوصف
                            </div>
                            <div class="col-3">
                                الفاتورة
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        التاريخ
                    </div>
                    <div class="col-1">
                        <div class="row fs-5">
                            <div class="col-6">
                                المبلغ
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row fs-5 shadow-sm p-2 rounded text-danger mb-2">
                    <div class="col-1">12</div>
                    <div class="col-7 ">
                        <div class="row">

                            <div class="col-9">
                                تم ايداع مبلغ في حسابك بفاتورة رقم
                            </div>
                            <div class="col-3">200</div>
                            <div class="col-9">
                                تم سحب مبلغ من حسابك بفاتورة رقم
                            </div>
                            <div class="col-3">
                                125
                            </div>

                        </div>
                    </div>
                    <div class="col-2">15-03-2022</div>
                    <div class="col-2">
                        <div class="row fs-5">
                            <div class="col-6">15000</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script>
        $('.confirm').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: "هل انت متأكد من المتابعة",
                text: "لن يمكنك التراجع عن هذا !",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "نعم, قم بالحذف",
                customClass: {confirmButton: "btn btn-primary me-3", cancelButton: "btn btn-label-secondary"},
                buttonsStyling: !1
            }).then(function (t) {
                t.value ? Swal.fire({
                        icon: "success",
                        title: "محذوف!",
                        text: "لقد تم الحذف بنجاخ.",
                        customClass: {confirmButton: "btn btn-success"}
                    }, setTimeout(function(){

                        form.submit()
                    }, 1000)
                ) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                    title: "تم الالغاء",
                    text: "تم الغاء العملية :)",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
            })
        });
    </script>
@endsection
