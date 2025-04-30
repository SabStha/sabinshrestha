<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', __('meta_title'))</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Fira+Code&display=swap" rel="stylesheet">
    
    <!-- Bootstrap (for certain pages) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    
    <!-- Scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --> 

    @vite(['resources/css/style.css', 'resources/js/app.js'])


    @yield('head')
</head>
<body>
    <div class="grid-overlay">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- App JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('scripts')
</body>
</html>