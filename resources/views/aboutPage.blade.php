@extends('layouts.main')

@section('myContent')
@php
        echo 'hello world';
    @endphp
    <hr>

    @if (true)
        <h1>This is true status</h1>
    @endif
    <hr>

    @if (false)
        <h1>This is true status</h1>
    @else
        <h1>This is false status</h1>
    @endif
    <hr>

    @if (false)
        <h1>This is true status</h1>
    @elseif (true)
        <h1>This is else if status</h1>
    @else
        <h1>This is else status</h1>
    @endif
    <hr>

    @for ($i = 0; $i <= 10; $i++)
        <h1>This is {{ $i }}</h1>
    @endfor
    <hr>

    @for ($i = 0; $i < count($fruits); $i++)
        <h1>This is {{ $fruits[$i] }}</h1>
    @endfor
    <hr>

    @foreach ($fruits as $f)
        <h3>{{ $f }}</h3>
    @endforeach
    <hr>

    @isset($name)
        <h1 style="color: red;">{{ $name }}</h1>
    @endisset
@endsection
