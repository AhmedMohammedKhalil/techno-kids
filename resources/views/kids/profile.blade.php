@extends('kids.layout')
@section('section')
    <section class="teacher-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="teacher-details-desc">
                        <div class="teacher-desc-image">
                            @if (auth('kid')->user()->image_url == null)
                                @if (auth('kid')->user()->gender == 'ذكر')
                                    <img src="{{ asset('img/kids/male.jpg') }}" alt="image">
                                @else
                                    <img src="{{ asset('img/kids/female.jpg') }}" alt="image">
                                @endif
                            @else
                                <img src="{{ asset('img/kids/' . auth('kid')->user()->id . '/' . auth('kid')->user()->image_url) }}"
                                    alt="image">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="teacher-details-information">
                        <h3>البيانات الشخصية</h3>

                        <ul>
                            <li>
                                <span>الاسم :</span> {{ auth('kid')->user()->name }}
                            </li>
                            <li>
                                <span>الايميل :</span> {{ auth('kid')->user()->email }}
                            </li>
                            <li>
                                <span>العمر :</span> {{ auth('kid')->user()->age . ' سنين' }}
                            </li>
                            <li>
                                <span>النوع :</span> {{ auth('kid')->user()->gender }}
                            </li>
                            <li>
                                <span>مجموع النقاط :</span> {{ auth('kid')->user()->points }}
                            </li>
                            <li>
                                <span>المستوى :</span> {{ auth('kid')->user()->level->name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
