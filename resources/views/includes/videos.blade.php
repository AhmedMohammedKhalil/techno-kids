@if (count($videos) > 0)
    <!-- Start Class Area -->
    <section class="class-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>اتعلم الان</span>
                <h2>الفيديوهات</h2>
            </div>

            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="{{ route('video_details', ['id' => $video->id]) }}">
                                    <img src="{{ asset('img/blog/blog-' . rand(1, 6) . '.jpg') }}" alt="image" />
                                </a>
                            </div>

                            <div class="class-content">
                                <h3>
                                    <a href="{{ route('video_details', ['id' => $video->id]) }}">{{ $video->title }}</a>
                                </h3>
                                <p>
                                    {{ $video->description }}
                                </p>
                                <ul class="class-list">
                                    <li><span>الموضوع : </span>{{ $video->topic->title }}</li>
                                    <li><span>التاريخ : </span>{{ $video->created_at }}</li>
                                </ul>

                                <div class="class-btn">
                                    <a href="{{ route('video_details', ['id' => $video->id]) }}" class="default-btn">عرض
                                        الفيديو</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="class-shape">
            <div class="shape-1">
                <img src="{{ asset('img/class/class-shape-1.png') }}" alt="image" />
            </div>
            <div class="shape-2">
                <img src="{{ asset('img/class/class-shape-2.png') }}" alt="image" />
            </div>
        </div>
    </section>
    <!-- End Class Area -->
@endif

@if ($flag == true)
    @if (count($videos) == 0)
        <section class="class-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>اتعلم الان</span>
                    <h2>الفيديوهات</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="min-height:300px">
                        <h3 class="text-center">لا يوجد فيديوهات</h3>
                    </div>
                </div>
                <div class="class-shape">
                    <div class="shape-1">
                        <img src="{{ asset('img/class/class-shape-1.png') }}" alt="image" />
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('img/class/class-shape-2.png') }}" alt="image" />
                    </div>
                </div>
        </section>
    @endif
@endif
