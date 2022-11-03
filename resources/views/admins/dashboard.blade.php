@extends('admins.layout')
@section('section')
<!-- Start Fun Facts Area -->
<section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="{{ $kids_count }}" dir="ltr">0</span>
                    </h3>
                    <p>الأطفال</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-1">
                    <h3>
                        <span class="odometer" data-count="{{ $topics_count }}" dir="ltr">0</span>
                    </h3>
                    <p>المواضيع</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-2">
                    <h3>
                        <span class="odometer" data-count="{{ $videos_count }}" dir="ltr">0</span>
                    </h3>
                    <p>الفيديوهات</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-3">
                    <h3>
                        <span class="odometer" data-count="{{ $quizzes_count }}" dir="ltr">0</span>
                    </h3>
                    <p>الإختبارات</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->
@endsection
