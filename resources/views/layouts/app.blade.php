<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Application style sheets -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body class="pt-5">
@include('components.nav.navbar')

<div class="pt-5">
    @yield('content')
</div>

<!-- Application scripts -->
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>
