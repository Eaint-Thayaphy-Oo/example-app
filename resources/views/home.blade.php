@extends('layouts.main')

@section('myContent')
    {{ url('home') }} |
    {{ url('about') }} |
    {{ url('contact') }}
    <br><br>
    <a href="{{ url('result/20/40') }}">URL</a> |
    <a href="{{ route('myCalculation', [50, 30]) }}">Route</a> |
    <a href="{{ url('paraPass/ayeaye') }}">Para Pass</a> |
    <a href="{{ route('passWithRoute', 'CODE LAB') }}">passWithRoute</a>

    <img src="{{ asset('image/profile.webp') }}" width="300px">
@endsection

@section('footer')
    <h1 style="color: red">This is footer testing</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque illum laborum sunt distinctio cum optio quod?
        Voluptates numquam vel autem error, perspiciatis deserunt, distinctio tenetur veritatis, consequatur corporis
        dolorum repudiandae.</p>
@endsection

@section('myJavaScript')
    <script>
        alert("hello world");
    </script>
@endsection
