@if (count($quizzes) > 0)
    <section class="event-area event-item-two pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span>اختبر نفسك الان</span>
                <h2>الاختبارات</h2>
            </div>
            <div class="row">
                @foreach ($quizzes as $q)
                    <div class="col-lg-6">
                        <div class="event-box-item">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="event-image">
                                        <a href="#"><img
                                                src="{{ asset('img/event/event-' . rand(1, 6) . '.png') }}"
                                                alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="event-content">
                                        <h3>
                                            <a
                                                href="
                                            @if (auth('admin')->check() || auth('kid')->check()) {{ route('quiz_details', ['id' => $q->id]) }}
                                            @else
                                                # @endif
                                            ">{{ $q->title }}
                                                @auth('admin') >> عرض @endauth @auth('kid') >> ابدأ الان
                @endif
                </a>
                </h3>
                <p>{{ $q->description }}</p>
                <span>{{ $q->topic->title }}</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="event-date">
                <h4>{{ $q->created_at->format('d') }}</h4>
                <span>{{ $q->created_at->format('F') }}</span>
            </div>
        </div>
        </div>
        </div>
        </div>
@endforeach
</div>
</div>
</section>
@endif

@if ($flag == true)
    @if (count($quizzes) == 0)
        <section class="class-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>اختبر نفسك الان</span>
                    <h2>الاختبارات</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="min-height:300px">
                        <h3 class="text-center">لا يوجد اختبارات</h3>
                    </div>
                </div>
        </section>
    @endif
@endif
