@extends('layouts.auth')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="app-brand justify-content-center mb-5">
                <a href="{{ route('index') }}" class="app-brand-link gap-2">
                    <img src="{{ asset('img/logo.png') }}" class="w-px-30" alt="">
                    <span class="app-brand-text demo text-body fw-bolder">منصة وصول</span>
                </a>
            </div>
            <h3 class="mb-5 text-center">حساب غير نشط ✉️</h3>
            <p class="text-start">
                تم ايقاف تفعيل حسابك<br> يرجى التواصل مع ادارة المنصة لتفعيل حسابك
            </p>
        </div>
    </div>

@endsection
