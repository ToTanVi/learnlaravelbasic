<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
			<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
			<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		 <!-- Styles -->

	</head>
	<body>
		{{--  <div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@if (Auth::check())
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ url('/login') }}">Login</a>
						<a href="{{ url('/register') }}">Register</a>
					@endif
				</div>
			@endif

			<div class="content">
				<div class="title m-b-md">
					Laravel
				</div>

				<div class="links">
					<a href="https://laravel.com/docs">Documentation</a>
					<a href="https://laracasts.com">Laracasts</a>
					<a href="https://laravel-news.com">News</a>
					<a href="https://forge.laravel.com">Forge</a>
					<a href="https://github.com/laravel/laravel">GitHubs</a>
				</div>
			</div>
		</div>  --}}
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
			</nav>
			<main role="main" class="container mt-5">
			<span class="fa fa-star"></span>
			</main><!-- /.container -->
		{{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
		<script src="{{ asset('js/jquery.slim.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>





