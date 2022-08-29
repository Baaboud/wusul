@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="../../assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />

@section('extra-style')

@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y mt-3">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">أعدادات الحساب /</span> عام
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('account_personal') }}"><i
                                class="bx bx-user me-1"></i> بيانات عامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account_security') }}"><i
                                class="bx bx-lock-alt me-1"></i> الأمن</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account_services') }}"><i
                                class="bx bx-detail me-1"></i> الخدمات</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account_social') }}"><i
                                class="bx bx-link-alt me-1"></i> التواصل</a></li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">البيانات الشخصية</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded"
                                 height="100" width="100" id="uploadedImg"/>
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">قم برفع صورة جديدة</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                           accept="image/png, image/jpeg"/>
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4" id="reset">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">أعادة تعيين</span>
                                </button>

                                {{--                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>--}}
                                <p class="text-muted mb-0">االصيغ المتاحة JPG, GIF أو PNG. الحد الأقصى 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">الأسم الاول</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName" value="John"
                                           autofocus/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">الأسم الأخير</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="Doe"/>
                                </div>
                                <!-- Date Picker-->
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="flatpickr-date" class="form-label">تاريخ الميلاد</label>
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
                                </div>
                                <!-- /Date Picker -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">رقم الهاتف</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">Ye (+967)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                               placeholder="325 122 177"/>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">المحافظة</label>
                                    <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                        <option>حضرموت</option>
                                        <option>المهرة</option>
                                        <option>عدن</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">المدينة</label>
                                    <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                        <option>المكلا</option>
                                        <option>سيئون</option>
                                        <option>الشحر</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">العنوان</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                           placeholder="العنوان..."/>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">حفظ التغييرات</button>
                                <button type="reset" class="btn btn-label-secondary">الغاء</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/forms-pickers.js"></script>


    <script>
        imgInp = document.getElementById('upload');
        imgView = document.getElementById('uploadedImg');
        reset = document.getElementById('reset');
        const r = imgView.src;

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                imgView.src = URL.createObjectURL(file)
            }
        }

        reset.onclick = evt => {
            imgInp.value = "",
            imgView.src = r
        }
    </script>
@endsection
