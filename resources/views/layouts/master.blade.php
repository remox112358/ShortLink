<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon ICO -->
    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS / 4.5.0 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Main CSS / 1.0 -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('document-title')</title>
</head>
<body class="bg-light">
    <div id="wrapper">
        @include('layouts.partials.header')

        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>