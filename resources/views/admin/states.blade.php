@extends('layouts.dashboard')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <style>
        .active {
            color: #696cff !important;
        }
        .nav-tabs .nav-item .nav-link {
            border: #ddd 1px solid !important;
            background-color: #eee !important;
            box-shadow: 1px 1px #ccc !important;
        }

        .nav-tabs .nav-item .active {
            border: 0px !important;
            background-color: #fff !important;
            box-shadow: none !important;
        }
    </style>
    <link rel="stylesheet" href="../../assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>المحافظات
            </h4>
            <div class="card position-relative">
                <h5 class="card-header fs-4 fw-bolder">المحافظات</h5>
                <button type="button" class="btn btn-lg btn-primary position-absolute top-0 end-0 m-3" data-bs-toggle="modal" data-bs-target="#addCategory">
                    أضافة محافظة&nbsp;<span class="tf-icons bx bx-book-add"></span>
                </button>

                <div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form id="formAccountSettings" method="POST" onsubmit="return false"
                                  class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <hr class="my-0">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5 fw-bolder" id="modalToggleLabel">أضافة محافظة</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="name" class="form-label">أسم المحافظة</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="أسم المحافظة">
                                        </div>


                                    </div>
                                    <div class="mt-2 text-center">
                                        <button type="submit" class="btn btn-primary me-2"> حفظ التعديل</button>
                                        <button type="button" class="btn btn-label-secondary"
                                                data-bs-dismiss="modal">إلغاء
                                        </button>
                                    </div>
                                    <div></div>
                                    <input type="hidden">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover mb-5">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>أسم المحافظة</th>
                            <th>تاريخ التسجيل</th>
                            <th>الحالة</th>
                            <th>عمليات</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td>1</td>
                            <td> حضرموت
                            <td>2022-05-12</td>
                            <td><span class="badge bg-label-success fs-6">مفعل</span></td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-label-primary mx-2" data-bs-toggle="modal" data-bs-target="#editeCategory1">
                                    <span class="tf-icons bx bx-edit"></span>&nbsp; تعديل
                                </button>

                                <form method="get" action="{{ route('index') }}">
                                    <button type="submit" class="btn btn-label-danger confirm" id="confirm">
                                        <span class="tf-icons bx bx-trash"></span>&nbsp; خذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
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
