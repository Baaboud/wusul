@extends(Auth::user()->type==0?'layouts.app':'layouts.dashboard')

@section('extra-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
<link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection

@section('content')

<div class="container-xxl flex-grow-1 mt-5">
    <div class="container-xxl flex-grow-1 pt-0 px-sm-2 px-0">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">الملف الشخصي / </span>المحفظة
        </h4>

        <!-- Navbar pills -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item"><a class="nav-link" @if(Auth::id()==$user->id)
                            href="{{ route('profile') }}"
                            @else
                            href="{{ route('profile.show',$user->id) }}"
                            @endif
                            ><i class='bx bx-user'></i> البيانات الشخصية</a>
                    </li>

                    @if($user->type == 2)
                    <li class="nav-item"><a class="nav-link" @if(Auth::id()==$user->id)
                            href="{{ route('profile.service') }}"
                            @else
                            href="{{ route('profile.service.show', $user->id) }}"
                            @endif
                            ><i class='bx bx-group'></i> الخدمات</a></li>
                    @endif
                    @if($user->type == 0 && Auth::id() == $user->id)
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile.orders') }}"><i class='bx bx-grid-alt'></i> الطلبات</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('wallet') }}"><i class='bx bx-wallet'></i> المحفظة</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!--/ Navbar pills -->

        <div class="row">
            <div class="col-xxl-12 col-md-6 my-3">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title fs-5 fw-bolder">الرصيد الحالي</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center mx-3" style="font-size: 32px;width: 64px;height: 64px;color: #2eca6a;background: #e0f8e9;">
                                <i class="bx bx-money fs-3"></i>
                            </div>
                            <div class="ps-3">
                                <span class="fs-3">${{$wallet->balance}}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 col-md-6 mb-3">

                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title fs-5 fw-bolder">الايداع</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon bg-label-primary rounded-circle d-flex align-items-center justify-content-center bg-info-light mx-3" style="font-size: 32px;width: 64px;height: 64px;">
                                <i class="bx bx-plus-circle text-primary fs-2"></i>
                            </div>
                            <div class="ps-3">
                                <p class="fs-3">${{$deposition}}</p>
                                <span class="text-success fw-bold">{{count($wallet->transactions->where('type','deposit'))}}</span>
                                <span class="text-muted">عملية ايداع</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-xxl-6 col-md-6 mb-3">

                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title fs-5 fw-bolder">السحب</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-danger-light mx-3" style="font-size: 32px;width: 64px;height: 64px;color: #ff771d;background: #ffecdf;">
                                <i class="bx bx-minus-circle text-danger fs-2"></i>
                            </div>
                            <div class="ps-3">
                                <p class="fs-3">${{$pull}}</p>
                                <span class="text-danger fw-bold">{{count($wallet->transactions->where('type','withdraw'))}}</span>
                                <span class="text-muted">عملية سحب</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
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
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                        <option data-icon="bx bx-list-check">الكل</option>
                        <option data-icon="bx bx-user">كهرباء</option>
                        <option data-icon="bx bx-user-pin">تقنية</option>
                        <option data-icon="bx bxs-user-account">صحة</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                        <option data-icon="bx bx-rename">الاسم</option>
                        <option data-icon="bx bxs-watch">تاريخ التسجيل</option>
                        <option data-icon="bx bx-cart">عدد الطلبات</option>
                        <option data-icon="bx bx-star">اجمالي التقييمات</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الخدمة</label>
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
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
                                    <th>العملية</th>
                                    <th>الوصف</th>
                                    <th>التاريخ</th>
                                    <th>المبلغ</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse($wallet->transactions as $transaction)
                                <tr>

                                    <td>{{$loop->index+1 }}</td>
                                    <td>{{$transaction->meta['payment']??''}}</td>
                                    @if($transaction->type=='deposit')

                                    <td><span class="badge bg-label-success pb-3 fs-6">ايداع</span></td>
                                    <td class="text-success">{{$transaction->meta['deposit']??''}}</td>
                                    @else
                                    <td><span class="badge bg-label-danger pb-3 fs-6">سحب</span></td>
                                    <td class="text-danger">{{$transaction->meta['pull']??''}}</td>
                                    @endif


                                    <td>{{\Carbon\Carbon::parse($transaction->created_at)->diffForHumans()}}</td>
                                    <td>{{$transaction->amount}}</td>
                                </tr>
                                @empty

                                @endforelse
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
    $('.confirm').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: "هل انت متأكد من المتابعة"
            , text: "لن يمكنك التراجع عن هذا !"
            , icon: "warning"
            , showCancelButton: !0
            , confirmButtonText: "نعم, قم بالحذف"
            , customClass: {
                confirmButton: "btn btn-primary me-3"
                , cancelButton: "btn btn-label-secondary"
            }
            , buttonsStyling: !1
        }).then(function(t) {
            t.value ? Swal.fire({
                icon: "success"
                , title: "محذوف!"
                , text: "لقد تم الحذف بنجاخ."
                , customClass: {
                    confirmButton: "btn btn-success"
                }
            }, setTimeout(function() {

                form.submit()
            }, 1000)) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                title: "تم الالغاء"
                , text: "تم الغاء العملية :)"
                , icon: "error"
                , customClass: {
                    confirmButton: "btn btn-success"
                }
            })
        })
    });

</script>
@endsection
