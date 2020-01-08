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
	<script src="{{ asset('public/bootstrapaero/js/bootstrap.js') }}"></script>

</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-aeroblack mb-4 ">
		<div class="container">

			<a class="navbar-brand" href="{{ route('home') }}">
				<img src="{{ asset('public/images/layers.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
				{{ config('app.name', 'Laravel') }}
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item <?php if (Route::current()->uri() === '/') { echo 'active'; } ?>">
						<a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>

					@if (Route::has('login'))

					@auth

					<li class="nav-item">
						<a class="nav-link <?php if (Route::current()->uri() === 'dashboard') { echo 'active'; } ?>" href="{{ route('dashboard') }}"><i class="fa fa-bars" aria-hidden="true"></i> Dashboard</a>
					</li>

					@else
					<li class="nav-item">
						<a class="nav-link <?php if (Route::current()->uri() === 'login') { echo 'active'; } ?>" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
					</li>

					@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link <?php if (Route::current()->uri() === 'register') { echo 'active'; } ?>" href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar</a>
					</li>
					@endif

					@endauth

					@endif

					@auth
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
					</li>
					@endauth

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