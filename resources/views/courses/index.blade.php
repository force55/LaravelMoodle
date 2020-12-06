@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Courses
            </div>
            @foreach($courses as $course)
                <div class="item">
                    <p data-parametr="id">ID:{{ $course->id }}</p>
                    <p data-parametr="firstname">Name: {{ $course->fullname }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
