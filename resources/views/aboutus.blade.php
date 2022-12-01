@extends('layouts.app')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ $page_name }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li>{{ $page_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Who We Are Area -->
    <section class="who-we-are ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>من نحن</span>
                        <h3>مرحباَ بك فى موقعنا</h3>
                        <p>
                            افضل موقع عربى لتعليم الأطفال الحاسوب ومحتوياتة حيث يضم جميع الفيديوهات الخاصة بالحاسوب وذلك
                            لنساعد على إرتقاء مستوى اطفالنا التعليمى
                        </p>
                        <h4 class=" font-size-24 mt-4" style="color:#ea512e ">خدماتنا</h4>
                        <ul class="who-we-are-list" style="display: block">
                            <li class="d-block" style="max-width: 100%"><span>1</span> تعليم الأطفال عن طريق دروس مسجلة
                                فيديو
                            </li>
                            <li class="d-block" style="max-width: 100%"><span>2</span> ممارسة الطفل أنشطة مرئية لسهولة
                                التعلم</li>
                            <li class="d-block" style="max-width: 100%"><span>3</span>الارتقاء بمستوى الطفل من خلال
                                المستويات التى يكتسبها من اجتياز الاختبارات</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-image-wrap">
                        <img src="{{ asset('img/who-we-are/who-we-are-2.png') }}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->
@endsection
