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
    <link href="{{ asset('styles/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ $style }}">
    <title>Cv</title>
</head>
<body>
    <nav>
        <div class="nav-content">
            <button type="button" id="downloadPdf" class="btn btn-light btn-sm">
                <i class="bi bi-download"></i>                Télécharger
              </button>
        </div>
    </nav>

<div class="container" id="partie">
    @yield('main')  
</div>
</body>
</html>