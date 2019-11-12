@extends('layout')

@section('title')
    My {{ $title }} Website!
@endsection

@section('content')
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
