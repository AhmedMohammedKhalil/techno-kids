@extends('layouts.app')
@section('content')
    <!-- Start Main Banner Area -->
    <div class="main-banner">
        <div class="main-banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    <span>اختبر نفسك وتعلم وتقدم الى الامام</span>
                                    <h1>Techno Kids Website</h1>
                                    <p>موقعنا يهدف لتعلم الاطفال الحاسوب ورفع مستواهم ايضا</p>

                                    <div class="banner-btn">
                                        @if (count($topics) > 0)
                                            <a href="#topics" class="default-btn">المواضيع</a>
                                        @endif
                                        @if (count($videos) > 0)
                                            <a href="#Videos" class="optional-btn">الفيديوهات</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="{{ asset('img/main-banner/education-girl.png') }}" alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-banner-shape">
            <div class="banner-bg-shape">
                <img src="{{ asset('img/main-banner/banner-bg-shape-1.png') }}" class="white-image" alt="image" />
            </div>

            <div class="shape-1">
                <img src="{{ asset('img/main-banner/banner-shape-1.png') }}" alt="image" />
            </div>

            <div class="shape-2">
                <img src="{{ asset('img/main-banner/banner-shape-2.png') }}" alt="image" />
            </div>

            <div class="shape-3">
                <img src="{{ asset('img/main-banner/banner-shape-3.png') }}" alt="image" />
            </div>

            <div class="shape-4">
                <img src="{{ asset('img/main-banner/banner-shape-4.png') }}" alt="image" />
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->
    @if (count($topics) > 0)
        <section class="tour-area pb-70 pt-100" id="topics">
            <div class="container">
                <div class="section-title">
                    <span>مواضيع الحاسب الالى</span>
                    <h2>المواضيع</h2>
                </div>
                <div class="row">
                    @foreach ($topics as $topic)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-tour" style="height: 400px">
                                <a href="{{ route('topic_details', ['id' => $topic->id]) }}">
                                    <h3>{{ $topic->title }}</h3>
                                </a>
                                <div class="image">
                                    <img src="{{ asset('img/tour/tour-' . rand(1, 4) . '.png') }}" alt="image" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('includes.videos', ['flag' => false])

@endsection
