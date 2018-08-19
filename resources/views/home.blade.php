@extends('layouts.app')
@section('title','Ẩm thực Việt')
@section('content')
<main class="home">
	<div class="owl-carousel owl-theme slideshow">
		<div class="item">
			<img src="{{ asset('images/slideshow/slide2.jpg') }}" alt="Slide Show" class="img-fluid">
		</div>
		<div class="item">
			<img src="{{ asset('images/slideshow/slide3.jpg') }}" alt="Slide Show" class="img-fluid">
		</div>
		<div class="item">
			<img src="{{ asset('images/slideshow/slide6.jpg') }}" alt="Slide Show" class="img-fluid">
		</div>
	</div>
	<div class="container mt-3">
		<div class="bamien my-4">
			<h2 class="mb-4 text-center"><a href="#">Miền Bắc</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 1)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
		<div class="bamien my-4">
			<h2 class="mb-4 text-center"><a href="#">Miền Trung</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 2)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
		<div class="bamien my-4">
			<h2 class="mb-4 text-center"><a href="#">Miền Nam</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 3)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
	</div>
	<div class="container-fluid block-mid mt-5">
		<div class="row">
			<div class="col-md-6 col-12 order-md-1 order-2">
				<div class="row align-items-center no-gutters">
					<div class="col-md-6 col-12">
						<img src="{{ asset('/images/food1.jpg') }}" alt="food" class="img-fluid">
					</div>
					<div class="col-md-6 col-12 triangle-1">
						<div class="mid-content">
							<p>Khi đến với nhà hàng Món Việt bạn sẽ tìm thấy những món ăn yêu thích và những món ăn truyền thống đậm chất việt nam.
								Tại đây bạn sẽ được thưởng thức những món ăn mình yêu thích một cách dễ dàng với sự chuyên nghiệp từ chuyên gia ẩm
								thực của chúng tôi.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center no-gutters">
					<div class="col-md-6 col-12 triangle-2 order-md-1 order-2">
						<div class="mid-content">
							<p>Chúng tôi cam kết sẽ phục vụ bạn những món ăn tuyệt vời với nguồn nguyên liệu tươi ngon và đảm bảo vệ sinh an toàn
								thực phẩm. Nhà hàng luôn đặt lợi ích của bạn lên hàng đầu và mong muốn được phục vụ bạn tốt nhất.</p>
						</div>
					</div>
					<div class="col-md-6 col-12 order-md-2 order-1">
						<img src="{{ asset('/images/food3.jpg') }}" alt="food" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-12 bg-monviet order-md-2 order-1 mb-5 mb-md-0"></div>
		</div>
	</div>
	<div class="container mt-3">
		<div class="douong my-4">
			<h2 class="mb-4 text-center"><a href="#">Nước giải khát</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 5)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
		<div class="douong my-4">
			<h2 class="mb-4 text-center"><a href="#">Nước ép</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 6)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
		<div class="douong my-4">
			<h2 class="mb-4 text-center"><a href="#">Đồ uống chứa cồn</a></h2>
			<div class="owl-carousel owl-theme slideshow-btn owl-loaded owl-drag">
				@foreach ($food as $item) @if ($item->category_food == 7)
				<div class="item wow swing">
					<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="rounded">
					<div class="caption mt-3 text-center">
						<h5>{{$item->name_food}}</h5>
						<p>{{number_format($item->price_food)}} VNĐ</p>
						<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
					</div>
				</div>
				@endif @endforeach
			</div>
		</div>
	</div>
</main>
@endsection