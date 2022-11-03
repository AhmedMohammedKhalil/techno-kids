@extends('layouts.app')
@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area item-bg5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>إنشاء حساب جديد</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li>إنشاء حساب جديد</li>
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
            <h2>إنشاء حساب جديد</h2>
            <livewire:kid.register />
            <div class="important-text">
                <p> لديك حساب ؟<a href="{{ route('kid.login') }}" class=" me-2">سجل الأن</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
