<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') - Trang quản trị Món Việt</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<main class="admin-page">
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/laravel/public/home">Món Việt</a>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="{{ route('Home')}}">Trở về trang chủ</a>
			</li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 admin-bar">
				<nav class="nav flex-column">
					<a class="nav-link" href="/laravel/public/admin/index"><i class="fa fa-home"></i>Dashboard</a>
					<a class="nav-link" href="/laravel/public/admin/food"><i class="fa fa-product-hunt"></i>Sản phẩm</a>
					<a class="nav-link" href="#"><i class="fa fa-file"></i>Đơn hàng</a>
					<a class="nav-link" href="#"><i class="fa fa-user"></i>Khách hàng</a>
					<a class="nav-link" href="#"><i class="fa fa-info-circle"></i>Thông tin</a>
				</nav>
			</div>
			<div class="col-md-10">
				@section('content')
				@show
			</div>
		</div>
	</div>
</main>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>