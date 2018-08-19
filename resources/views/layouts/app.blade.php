<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') - Món Việt</title>
	<!-- Styles -->
	{{--
	<link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<header class="header-common">
		<div class="fixed-top">
			<div class="top-header">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-xl-4 col-md-6 th-content my-2">
							<a href="#"><span class="fa fa-phone"></span>(+84) 1655205223</a>
							<a href="#"><span class="fa fa-envelope-o"></span>MONVIET@GMAIL.COM</a>
						</div>
						<div class="col-xl-4 offset-xl-4 col-md-6 th-content text-right my-2">
							<a href="#"><span class="fa fa-shopping-cart"></span></a>
							@if (Route::has('login'))
								@if (Auth::check())
									<a href="/laravel/public/admin/index"><span></span>Vào trang quản trị</a>
									<a href="/laravel/public/logout"><span></span>Đăng xuất</a>
								@else
									<a href="/laravel/public/register"><span></span>Đăng ký</a>
									<a href="/laravel/public/login" class="login"><span></span>Đăng nhập</a>
								@endif
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand" href="/laravel/public/">
								<img src="{{ asset('/images/logo.png') }}" alt="MonViet">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							 aria-expanded="false" aria-label="Toggle navigation">
								<span class="fa fa-bars"></span>
							</button>
							<div class="collapse navbar-collapse menu" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="/laravel/public/">Trang chủ <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/laravel/public/promotion">Khuyến mãi</a>
									</li>
									<li class="nav-item do-an">
										<a class="nav-link" href="/laravel/public/doan">Đồ ăn</a>
										<div class="menu-sub">
											<ul>
												<li><a href="/laravel/public/doan/mienbac">Miền Bắc</a></li>
												<li><a href="/laravel/public/doan/mientrung">Miền Trung</a></li>
												<li><a href="/laravel/public/doan/miennam">Miền Nam</a></li>
												<li><a href="/laravel/public/doan/montrangmieng">Món Tráng Miệng</a></li>
											</ul>
										</div>
									</li>
									<li class="nav-item do-uong">
										<a class="nav-link" href="/laravel/public/douong">Đồ uống</a>
										<div class="menu-sub">
											<ul>
												<li><a href="/laravel/public/douong/nuocgiaikhat">Nước giải khát</a></li>
												<li><a href="/laravel/public/douong/nuocep">Nước ép</a></li>
												<li><a href="/laravel/public/douong/nuoccocon">Nước có cồn</a></li>
											</ul>
										</div>
									</li>
									<li class="nav-item join">
										<a class="nav-link" href="#">Đăng ký</a>
									</li>
									<li class="nav-item join">
										<a class="nav-link login" href="/laravel/public/login">Đăng nhập</a>
										<form action="?loginaction" method="post" class="login-form">
											<div class="form-group">
												<label><h3>Món Việt</h3></label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Tên Đăng Nhập" name="username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Mật Khẩu" name="password">
											</div>
											<button type="submit" class="btn btn-login">Đăng nhập</button>
										</form>
									</li>
								</ul>
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2 d-md-none d-lg-block" type="search" placeholder="..." aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">TÌM KIẾM</button>
								</form>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

@section('content')

@show
	<footer class="footer-common">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 mt-3">
					<div class="footer-logo">
						<a href="#">
							<img src="{{ asset('images/logo.png') }}" alt="MonViet">
						</a>
						<p>
							Món Việt cam kết chất lượng phục vụ tốt nhất, chuyên nghiệp nhất cho mọi khách hàng bằng chính sách hoàn tiền và tặng quà
							nếu nhân viên phục vụ quí khách không chu đáo
						</p>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="policy">
						<h3>FAQ</h3>
						<p><span class="fa fa-truck"></span>Vận chuyển</p>
						<p><span class="fa fa-file-text-o"></span>Chính sách chung</p>
						<p><span class="fa fa-file-text-o"></span>Chính sách đổi trả</p>
						<p><span class="fa fa-vine"></span>Khách hàng VIP</p>
						<p><span class="fa fa-users"></span>Đối tác cung cấp</p>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="contact">
						<h3>Liên hệ</h3>
						<p><span class="fa fa-map-marker"></span>319A Nam Kỳ Khởi Nghĩa, Quận 3, TP.HCM</p>
						<p><span class="fa fa-map-marker"></span>319A Nam Kỳ Khởi Nghĩa, Quận 3, TP.HCM</p>
						<p><span class="fa fa-map-marker"></span>319A Nam Kỳ Khởi Nghĩa, Quận 3, TP.HCM</p>
						<p><span class="fa fa-phone"></span>(+84) 1655205223</p>
						<p><span class="fa fa-envelope-o"></span>monviet@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-bottom">
			<div class="container">
				<div class="row">
					<div class="col p-1 text-center">
						<span>Site by To Tan Vi | Copyright © 2017 Mon Viet. All right reserved</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Scripts -->
	{{--
	<script src="{{ asset('js/app.js') }}"></script> --}}
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/myscript.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script>
		new WOW().init();
	</script>
</body>
</html>