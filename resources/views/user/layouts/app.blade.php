<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>@yield('page_title','Library Management')</title>

    <!-- Favicon -->
    <link href="{{ asset('user/images/favicon.ico') }}" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />

    @yield('css')

</head>

<body>
    @include('user.includes.header')

    @yield('content')

    @include('user.includes.footer')
    @include('user.includes.js')

</body>

</html>
