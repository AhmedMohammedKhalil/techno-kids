@extends('layouts.app')
@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area item-bg5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>تسجيل الدخول</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li>تسجيل الدخول</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>تسجيل الدخول</h2>
            <livewire:kid.login />
            <div class="important-text">
                <p> ليس لديك حساب ؟<a href="{{ route('kid.register') }}" class=" me-2">إنشئ الأن</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
