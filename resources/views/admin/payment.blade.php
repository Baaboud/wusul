@extends('layouts.dashboard')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="../../assets/vendor/libs/animate-css/animate.css"/>
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css"/>
@endsection

@section('content')

    <div class="container-xxl flex-grow-1">
        <div class="container-xxl flex-grow-1 pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>الدفع
            </h4>
            <div class="card position-relative">
                <h5 class="card-header fs-4 fw-bolder">التحويلات المالية</h5>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover mb-5">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>أسم العميل</th>
                            <th>رقم الفاتورة</th>
                            <th>تاريخ الدفع</th>
                            <th>المبلغ المستحق</th>
                            <th>السند</th>
                            <th>الحالة</th>
                            <th>عمليات</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td>عبدالهادي ديان</td>
                                <td>208</td>
                                <td>2022-12-20</td>
                                <td class="text-danger fs-5">30000</td>
                                <td>
                                    <button type="submit" class="btn btn-label-primary mx-2">
                                        <span class="tf-icons bx bx-image me-2"></span>عرض سند الدفع
                                    </button>
                                </td>
                                <td>
                                    <span class="badge bg-label-warning pb-3 fs-6">انتظار التأكيد</span>
                                </td>
                                <td class="d-flex">
                                    <button type="button" class="btn btn-label-primary mx-2"
                                            onclick=""
                                            data-bs-toggle="modal" data-bs-target="#editeCategory1">
                                        <span class="tf-icons bx bx-edit"></span>&nbsp; قبول
                                    </button>

                                    <form method="get" action="">
                                        <button type="submit" class="btn btn-label-danger confirm" id="confirm">
                                            <span class="tf-icons bx bx-trash"></span>&nbsp; رفض
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal fade" id="editeCategory1" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form id="formAccountSettings" method="POST" action="{{route('cities.update')}}"
                                      class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                    @csrf
                                    <input type="hidden" name='id' value=''>
                                    <hr class="my-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-5 fw-bolder" id="modalToggleLabel">اضافة ملبغ</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label for="name" class="form-label fs-5 fw-bolder">المبلغ</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                       placeholder="قم بأدخال المبلغ الموجود في الحوالة">
                                            </div>

                                        </div>
                                        <div class="mt-2 text-center">
                                            <button type="submit" class="btn btn-primary me-2">تأكيد الدفع</button>
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
                </div>
            </div>
        </div>
        @endsection

        @section('scripts')
            <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
            <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
            <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
            <script>
                $('.confirm').on('click', function (e) {
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
                            }, setTimeout(function () {

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

                function edit(city) {
                    const id = document.querySelector('input[name=id]');
                    const name = document.querySelector('#editeCategory1 form input[name=name]');
                    const states = document.querySelectorAll('#editeCategory1 form select option');

                    console.log(city);
                    id.value = city.id;
                    states.forEach((state) => {
                        if (state.value == city.state_id) {
                            state.setAttribute('selected');
                            console.log(state);
                        }
                    });
                    states.foea = city.state_id;
                    name.value = city.name;
                }
            </script>
@endsection
