@props(['style'])



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ $style }}">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('styles/resume.css') }}">
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/resume.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/fonts.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <title>Cv</title>
</head>
<body>
<button id="downloadPdf">Télécharger en PDF</button>

<div class="container" id="partie">
    @yield('main')  
</div>
</body>
</html>