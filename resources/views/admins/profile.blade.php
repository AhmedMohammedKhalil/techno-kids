@extends('admins.layout')
@section('section')
    <section class="teacher-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="teacher-details-desc">
                        <div class="teacher-desc-image">
                            @if (auth('admin')->user()->image_url == null)
                                <img src="{{ asset('img/admins/default.jpg') }}" alt="image">
                            @else
                                <img src="{{ asset('img/admins/' . auth('admin')->user()->id . '/' . auth('admin')->user()->image_url) }}"
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
                                <span>الاسم :</span> {{ auth('admin')->user()->name }}
                            </li>
                            <li>
                                <span>الايميل :</span> {{ auth('admin')->user()->email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
