@extends('admins.layout')
@section('section')
<section class="pricing-area">
    <div class="container">
        <a href="{{ route('admin.topic.create') }}" class="default-btn d-flex mx-auto mb-4"
            style="width: fit-content;">إضافة موضوع جديد</a>
        <div class="pricing-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            المواضيع
                        </th>
                        <th>
                            الإعدادات
                        </th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($topics as $topic)
                    <tr>
                        <th>{{ $topic->title }}</th>
                        <td>
                            <a href="{{ route('admin.topic.edit',['id' => $topic->id]) }}" class="default-btn">تعديل</a>
                            @if(count($topic->quizzes) == 0 && count($topic->videos) == 0)
                            <a href="{{ route('admin.topic.delete',['id' => $topic->id]) }}" class="default-btn">حذف</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @if(count($topics) == 0)
                    <tr>
                        <td colspan="2" class="text-center">
                            لا يوجد اى موضوع
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</section>
@endsection
