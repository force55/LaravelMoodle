@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel Moodle Test
        </div>

        <div class="links">
            <a href="{{ route('users') }}">Users</a>
            <a href="{{ route('courses') }}">Courses</a>
            <a href="{{ route('enrolled_users') }}">Enrolled users</a>
{{--            <a href="{{ route('users_courses') }}">Users with courses</a>--}}
        </div>
    </div>
</div>
@endsection
