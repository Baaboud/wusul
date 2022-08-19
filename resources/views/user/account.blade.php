@extends('layouts.dashboard')

@section('extra-style')


    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">أعدادات الحساب /</span> عام
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('account') }}"><i
                                class="bx bx-user me-1"></i> بيانات عامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('security') }}"><i
                                class="bx bx-lock-alt me-1"></i> الأمن</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('security') }}l"><i
                                class="bx bx-detail me-1"></i> الخدمات</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-account-settings-notifications.html"><i
                                class="bx bx-bell me-1"></i> الأشعارات</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-account-settings-connections.html"><i
                                class="bx bx-link-alt me-1"></i> التواصل</a></li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">بيانات الملف الشخصي</h5>
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
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">البريد الألكتروني</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                           value="john.doe@example.com" placeholder="john.doe@example.com"/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">الجهة</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                           value="ThemeSelection"/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">رقم الهاتف</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">US (+1)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                               placeholder="202 555 0111"/>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">العنوان</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                           placeholder="Address"/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">المحافظة</label>
                                    <input class="form-control" type="text" id="state" name="state"
                                           placeholder="California"/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">الرمز البريدي</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                           placeholder="231465" maxlength="6"/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">الدولة</label>
                                    <select id="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">اللغة</label>
                                    <select id="language" class="select2 form-select">
                                        <option value="">Select Language</option>
                                        <option value="en">English</option>
                                        <option value="fr">French</option>
                                        <option value="de">German</option>
                                        <option value="pt">Portuguese</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">المنطقة الزمنية</label>
                                    <select id="timeZones" class="select2 form-select">
                                        <option value="">Select Timezone</option>
                                        <option value="-12">(GMT-12:00) International Date Line West</option>
                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                        <option value="-9">(GMT-09:00) Alaska</option>
                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                        <option value="-7">(GMT-07:00) Arizona</option>
                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Central America</option>
                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="currency" class="form-label">العملة</label>
                                    <select id="currency" class="select2 form-select">
                                        <option value="">Select Currency</option>
                                        <option value="usd">USD</option>
                                        <option value="euro">Euro</option>
                                        <option value="pound">Pound</option>
                                        <option value="bitcoin">Bitcoin</option>
                                    </select>
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