@props(['style','title'])



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ $style }}">
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/fonts.css') }}">
    <link href="{{ asset('styles/bootstrap.css') }}" rel="stylesheet">
    <title>CV Creator | {{ $title }}</title>
</head>
<body>
    @auth
        @include('partials.nav')
    @endauth
    <main>  
        @yield('main')  
    </main>
    @auth
        @include('partials.footer')
    @endauth
</body>
</html>