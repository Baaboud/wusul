@extends('layouts.auth')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="mb-5 text-center">انشاء حساب جديد</h4>
            <p class="mb-4">قم بادخال بياناتك الشخصية لأنشاء حساب</p>

            <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('register') }}" novalidate="novalidate">
                @csrf
                <div class="mb-3 fv-plugins-icon-container">
                    <label for="username" class="form-label">اسم المستخدم</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="أدخل اسم المستخدم" autofocus="" value="{{ old('name') }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 fv-plugins-icon-container">
                    <label for="email" class="form-label @error('email') is-invalid @enderror" value="{{ old('email') }}">البريد الالكتروني</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="ادخل بريدك الالكتروني">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle fv-plugins-icon-container">
                    <label class="form-label" for="password">كلمة المرور</label>
                    <div class="input-group input-group-merge has-validation">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="············" aria-describedby="password">
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle fv-plugins-icon-container">
                    <label class="form-label" for="password">تأكيد كلمة المرور</label>
                    <div class="input-group input-group-merge has-validation">
                        <input type="password" id="confirm-password" class="form-control" name="password_confirmation" placeholder="············" aria-describedby="password">
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="mb-3 fv-plugins-icon-container">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                        <label class="form-check-label" for="terms-conditions">
                            اوافق على
                            <a href="javascript:void(0);">سياسات الخصوصية &amp; الشروط</a>
                        </label>
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                </div>
                <button class="btn btn-primary d-grid w-100">انشاء حساب</button>
                <div></div><input type="hidden"></form>

            <p class="text-center">
                <span>لديك حساب بالفعل؟</span>
                <a href="{{ route('login') }}">
                    <span>قم بتسجيل الدخول</span>
                </a>
            </p>

            <div class="divider my-4">
                <div class="divider-text">أو</div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                    <i class="tf-icons bx bxl-facebook"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                    <i class="tf-icons bx bxl-google-plus"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                    <i class="tf-icons bx bxl-twitter"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
