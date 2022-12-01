@extends('admins.layout')
@section('section')
    <section class="pricing-area">
        <div class="container">
            <a href="{{ route('admin.video.create') }}" class="default-btn d-flex mx-auto mb-4"
                style="width: fit-content;">إضافة فيديو جديد</a>
            <div class="pricing-table">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>
                                صورة الفيديو
                            </th>
                            <th>
                                اسم الفيديو
                            </th>
                            <th>
                                الإعدادات
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <th><img src="{{ asset('img/blog/blog-' . rand(1, 6) . '.jpg') }}" alt="image-video"
                                        style="width: 50px;height:50px"></th>
                                <th>{{ $video->title }}</th>
                                <td>
                                    <a href="{{ route('admin.video.show', ['id' => $video->id]) }}"
                                        class="default-btn">عرض</a>
                                    <a href="{{ route('admin.video.edit', ['id' => $video->id]) }}"
                                        class="default-btn">تعديل</a>
                                    <a href="{{ route('admin.video.delete', ['id' => $video->id]) }}"
                                        class="default-btn">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                        @if (count($videos) == 0)
                            <tr>
                                <td colspan="3" class="text-center">
                                    لا يوجد فيديوهات
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection
