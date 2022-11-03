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

<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                @include('includes.menu')
            </div>
            <div class="col-lg-9 col-md-12">
                @yield('section')
            </div>
        </div>
    </div>
</section>
@endsection
