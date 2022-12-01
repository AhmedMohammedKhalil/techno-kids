@extends('kids.layout')
@section('section')
    @include('includes.quizzes', [
        'flag' => true,
        'quizzes' => auth('kid')->user()->quizzes,
        'kid_control' => true,
    ])
@endsection
