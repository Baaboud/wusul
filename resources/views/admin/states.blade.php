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
                            <form id="formAccountSettings" method="POST" action="{{route('states.add')}}"
                                  class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <hr class="my-0">
                                @csrf
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
                        @forelse($states as $state)
                        <tr>
                            <td>{{$loop->index+1 }}</td>
                            <td> {{$state->name}}</td>
                            <td>{{$state->created_at}}</td>
                            <td><span class="badge bg-label-success fs-6">
                                {{$state->is_active? 'مفعل' : 'غير مفعل'}}
                            </span></td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-label-primary mx-2"
                                onclick="edit({{ $state }})"
                                 data-bs-toggle="modal" data-bs-target="#editeCategory1">
                                    <span class="tf-icons bx bx-edit"></span>&nbsp; تعديل
                                </button>

                                <form method="get" action="{{ route('states.delete',$state->id) }}">
                                    <button type="submit" class="btn btn-label-danger confirm" id="confirm">
                                        <span class="tf-icons bx bx-trash"></span>&nbsp; خذف
                                    </button>
                                </form>

                                
                                <form method="get" action="{{ route('admin.state.active',$state->id) }}">
                                    <button type="submit" class="btn btn-label-danger mx-2">
                                                @if($state->is_active)
                                                        <span class="tf-icons bx bx-block">
                                                        ايقاف
                                                        </span>&nbsp;
                                                        @else
                                                        <span class="">
                                                        تفعيل
                                                        </span>
                                                        @endif                                      
                                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                           
                        @endforelse

                        </tbody>
                    </table>
                    <div class="modal fade" id="editeCategory1" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form id="formAccountSettings" method="POST"
                            action="{{route('states.update')}}"
                                  class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                @csrf
                                <input type="hidden"  name='id' value=''>

                                <hr class="my-0">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5 fw-bolder" id="modalToggleLabel">أضافة محافظة</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="name" class="form-label">أسم المحافظة</label>
                                            <input type="text" class="form-control" id="name" name="name" value=''
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

            function edit(state){
            const id =  document.querySelector('input[name=id]');
            const name =  document.querySelector('#editeCategory1 form input[name=name]');

            id.value=state.id;
            name.value=state.name;

        }

    </script>
@endsection
