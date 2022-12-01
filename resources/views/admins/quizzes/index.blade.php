@extends('admins.layout')
@section('section')
    <section class="pricing-area">
        <div class="container">
            <a href="{{ route('admin.quiz.create') }}" class="default-btn d-flex mx-auto mb-4"
                style="width: fit-content;">إضافة اختبار جديد</a>
            <div class="pricing-table">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>
                                اسم الاختبار
                            </th>
                            <th>
                                نوع الاسئلة
                            </th>
                            <th>
                                موضوع الاختبار 
                            </th>
                            <th>
                                الإعدادات
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($quizzes as $quiz)
                            <tr>
                                <td>{{ $quiz->title }}</td>
                                @if ($quiz->type =="photo")
                                    <td>صورة</td>
                                @else
                                <td>نص</td>
                                @endif
                                <td>{{$quiz->topic->title}}</td>
                                <td>
                                @if ( count($quiz->kids) == 0)
                                    <a href="{{ route('admin.quiz.edit', ['id' => $quiz->id]) }}"
                                        class="default-btn">تعديل</a>
                                    @if (count($quiz->questions) == 0 && count($quiz->kids) == 0)
                                        <a href="{{ route('admin.quiz.delete', ['id' => $quiz->id]) }}"
                                            class="default-btn">حذف</a>
                                    @endif
                                    <a href="{{ route('admin.quiz.show', ['id' => $quiz->id]) }}"
                                        class="default-btn">عرض</a>
                                @endif
                                </td>
                                
                            </tr>
                        @endforeach
                        @if (count($quizzes) == 0)
                            <tr>
                                <td colspan="2" class="text-center">
                                    لا يوجد اى اختبار
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection
