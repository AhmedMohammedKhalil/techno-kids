@extends('admins.layout')
@section('section')
    <section class="login-area">
        <div class="container">
            <div class="login-form">
                <h2>{{ $page_name }}</h2>
                <livewire:admin.video.edit :video_id='$video_id' />
            </div>
        </div>
    </section>
@endsection
