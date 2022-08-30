@extends('layouts.dashboard')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <style>
        .active {
            color: #696cff !important;
        }
        .nav-tabs .active {
            border: #eee 1px solid !important;
        }
    </style>
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection

@section('content')

    <div class="container-xxl flex-grow-1">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>الخدمات
            </h4>
            <div class="card">
                <h5 class="card-header fs-4 fw-bolder">الطلبات</h5>
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
                                    <th>اسم العميل</th>
                                    <th>أسم الخدمة</th>
                                    <th>نوع الخدمة</th>
                                    <th>تاريخ التسجيل</th>
                                    <th>الحالة</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>1</td>
                                    <td>عبدالهادي ديان</td>
                                    <td> تصميم مواقع ويب </td>
                                    <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                    <td>2022-05-12</td>
                                    <td><span class="badge bg-success fs-6 me-1">مفعل</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>عبدالهادي ديان</td>
                                    <td> تصميم مواقع ويب </td>
                                    <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                    <td>2022-05-12</td>
                                    <td><span class="badge bg-success fs-6 me-1">مفعل</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>عبدالهادي ديان</td>
                                    <td> تصميم مواقع ويب </td>
                                    <td><span class="badge bg-label-primary fs-6 me-1">برمجة</span></td>
                                    <td>2022-05-12</td>
                                    <td><span class="badge bg-danger fs-6 me-1">متوقف</span></td>
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
