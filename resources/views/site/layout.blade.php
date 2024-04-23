<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Link para o CSS do BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    {{-- NAV --}}
    @include('partials.navbar') 

    <!-- Conteudo Principal -->
    @yield('content')

    <!-- JQUERY -->
    <!-- este tem de ser adionado antes do javascript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>

    <!-- javascript do bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>