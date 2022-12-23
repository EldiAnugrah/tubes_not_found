<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/login.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <body class="font-sans text-gray-900 antialiased">
        <img class="wave2" src="../../img/wave2.svg">
        <img class="wave" src="../../img/wave.svg">
        <div class="container">
            <div class="img">
                <img src="../../img/LogoNotFound.png" alt="">
            </div>
            <div class="login-content">
                {{ $slot }}
            </div>
        </div>
    </body>

</html>
