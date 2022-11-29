@extends('layouts.app')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ $page_name }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li>{{ $page_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    @include('includes.video')
@endsection
