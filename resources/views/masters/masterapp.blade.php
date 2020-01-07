<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>

    <!--MEUS RECURSOS-->

    <link rel="stylesheet" href="{{ asset('public/bootstrapaero/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/personal.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font-awesome-4.7.0/css/font-awesome.css') }}">
    <script src="{{ asset('public/jquery/jquery-3.4.1.js') }}"></script>

</head>
<body>

 <nav class="navbar navbar-expand-md navbar-dark bg-aeroblack mb-4 ">
  <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
        </li>

        @if (Route::has('login'))

            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Logar</a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
            </li>
            @endif
            @endauth

        @endif

    </ul>
</div>

</div>
</nav>

<main role="main" class="container">

            @yield('content')

</main>

</body>
</body>
</html>