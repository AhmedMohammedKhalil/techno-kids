@extends('admins.layout')
@section('section')
    <section class="login-area">
        <div class="container">
            <div class="login-form">
                <h2>تعديل السؤال</h2>
                <livewire:admin.question.edit :id='$id' />
            </div>
        </div>
    </section>
@endsection
