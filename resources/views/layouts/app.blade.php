<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
    <link href="{{ asset('scss/app.scss') }}" rel="stylesheet">

</head>
<body>
    <!-- HEADER -->
    <header class="container-flex text-center py-3 bg-primary">
        <nav>
            <h1 class="fw-bold">
                Movies Cards
            </h1>
        </nav>
    </header>

    <!-- Area per il contenuto specifico della pagina -->
    
    @yield('content') 
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>