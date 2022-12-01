@extends('admins.layout')
@section('section')
    <section class="pricing-area">
        <div class="container">
            <a href="{{ route('admin.question.create', ['id' => $quiz->id]) }}" class="default-btn d-flex mx-auto mb-4"
                style="width: fit-content;">إضافة سؤال جديد</a>
            <div class="pricing-table">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>
                                السؤال
                            </th>
                            
                            <th>
                                الاعدادات 
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($quiz->questions as $question)
                        <tr>
                            <td style="width: 50%;overflow-x:unset">
                                @if ($quiz->type == 'photo')
                                    <img src="{{ asset('img/questions/' . $question->id . '/' . $question->image_url) }}"
                                        alt="image-question" style="width: 100px;height:100px">
                                @else
                                    {{ $question->question }}
                                @endif
                            </td>
                        
                            <td>
                                    <a href="{{ route('admin.question.edit', ['id' => $question->id]) }}"
                                        class="default-btn">تعديل</a>
                                  
                                        <a href="{{ route('admin.question.delete', ['id' => $question->id]) }}"
                                            class="default-btn">حذف</a>
                            </td>

                        </tr>
                        @endforeach
                        @if (count($quiz->questions) == 0)
                            <tr>
                                <td colspan="2" class="text-center">
                                    لا يوجد اى اسألة
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>

            
        </div>
    </section>
@endsection
