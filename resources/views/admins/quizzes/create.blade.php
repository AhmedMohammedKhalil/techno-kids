@extends('admins.layout')
@section('section')
    <section class="login-area">
        <div class="container">
            <div class="login-form">
                <h2>{{ $page_name }}</h2>
                <livewire:admin.quiz.create />
            </div>
        </div>
    </section>
@endsection
