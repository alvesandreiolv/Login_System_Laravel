<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--MEUS RECURSOS-->

    <link rel="stylesheet" href="{{ asset('public/bootstrapaero/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/personallogin.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font-awesome-4.7.0/css/font-awesome.css') }}">
    <script src="{{ asset('public/jquery/jquery-3.4.1.js') }}"></script>

</head>
<body class="text-center">

    <div class="card bg-aeroblack" style="width: 100%; max-width: 400px;">

     @yield('content')

 </div>

</body>
</html>
 