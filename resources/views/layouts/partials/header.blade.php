<!DOCTYPE html>
<html>
<head>

    <meta name="description" content="Conect-e  es una pagina de variedad y diversión.">
    <meta charset="utf-8">
    <meta name="language" content="spanish">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page') @yield('title','Conect-e')</title>
    <link rel="stylesheet"  href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
@include('layouts.partials.menu')