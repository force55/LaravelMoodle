@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Users
            </div>
            @foreach($users as $user)
                <div class="item">
                    <p data-parametr="id">ID:{{ $user->id }}</p>
                    <p data-parametr="firstname">Firstname: {{ $user->firstname }}</p>
                    <p data-parametr="lastname">Lastname: {{ $user->lastname }}</p>
                    <p data-parametr="email">Email: {{ $user->email }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
