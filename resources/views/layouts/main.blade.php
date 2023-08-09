<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 style="color: red;">This is home page</h1>

    <h3>{{ $name }}</h3>
    <h4>{{ $lecture }}</h4>

    <a href="{{ url('home') }}">Home</a> |
    <a href="{{ url('about') }}">About</a> |
    <a href="{{ url('contact') }}">Contact</a> |
    <a href="{{ route('ser') }}">Service</a>
    <hr>

    @yield('myContent')

    <h1>This is the end of my Content Yield </h1>

    @yield('footer')

    <h1 style="color: yellow">The end</h1>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@yield('myJavaScript')
</html>
