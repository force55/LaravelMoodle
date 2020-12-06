@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Users
            </div>
            @foreach($users as $item)

                <div class="item">
                    <p data-parametr="id">User ID:{{ $item->user_id }}</p>
                    <p data-parametr="firstname">Name: {{ $item->name }}</p>
                    <p data-parametr="lastname">Course: {{ $item->course }}</p>
                    <p data-parametr="email">Grade: {{ $item->grade }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
