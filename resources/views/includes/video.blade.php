<section class="teacher-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="teacher-details-desc">
                    <div class="teacher-desc-image">
                        <video id="video" poster="{{ asset('img/blog-details.jpg') }}" style="width: 100%;height:auto"
                            preload="metadata" controls controlsList="nodownload">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="teacher-details-information">
                    <h3>بيانات عن الفيديو</h3>

                    <ul>
                        <li>
                            <span>الاسم :</span> {{ $video->title }}
                        </li>
                        <li>
                            <span>الموضوع :</span> {{ $video->topic->title }}
                        </li>
                        <li>
                            <span>التاريخ :</span> {{ $video->created_at }}
                        </li>
                        <li>
                            <span>الوصف :</span> {{ $video->description }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@push('js')
    <script>
        let track = document.getElementById("video");

        function loading() {
            var request = new XMLHttpRequest();
            var videoPath = '{!! asset('videos/' . $video->id . '/' . $video->video_url) !!}';
            console.log(videoPath);
            request.open("GET", videoPath, true);
            request.responseType = "blob";
            request.onload = function() {
                if (this.status == 200) {
                    track.src = URL.createObjectURL(this.response);
                    track.load();
                }
            }
            request.send();

        }
        loading();
    </script>
@endpush
