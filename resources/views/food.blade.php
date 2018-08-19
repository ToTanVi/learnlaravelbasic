@extends('layouts.app')
@section('title',$food)
@section('content')
<main class="category pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-12 mt-4">
				<div class="category">
					<h3><a href="/laravel/public/doan/">đồ ăn</a></h3>
					<ul>
						<li><a href="/laravel/public/doan/mienbac">Món Bắc</a></li>
						<li><a href="/laravel/public/doan/mientrung">Món Trung</a></li>
						<li><a href="/laravel/public/doan/miennam">Món Nam</a></li>
						<li><a href="/laravel/public/doan/montrangmieng">Món Tráng Miệng</a></li>
					</ul>
				</div>
				<div class="category">
					<h3><a href="/laravel/public/douong/">đồ uống</a></h3>
					<ul>
						<li><a href="/laravel/public/douong/nuocep">Nước Ép</a></li>
						<li><a href="/laravel/public/douong/nuocgiaikhat">Nước Giải Khát</a></li>
						<li><a href="/laravel/public/douong/nuoccocon">Nước Có Cồn</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-12">
				<div class="row">
					<div class="col-12 text-center mt-3 food-title">
						<h2>{{$food}}</h2>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 category-title">
						<h3>
							<div class="row">
								<div class="col-lg-10 col-md-9 col-8">{{$name1}}</div>
								<div class="col-lg-2 col-md-3 col-4">
									<p><a href="?action=mienbac">Xem Thêm</a></p>
								</div>
							</div>
						</h3>
					</div>
					@foreach ($Cate as $item) @if ($item->category_food == $number1)
					<div class="col-md-4">
						<div class="food-list text-center pb-2 ">
							<img src='{{ asset("images/product/$item->images_food") }}' alt="Mì Quảng" class="img-fluid rounded">
							<h5>{{$item->name_food}}</h5>
							<p>{{number_format($item->price_food)}} VNĐ</p>
							<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
						</div>
					</div>
					@endif @endforeach
				</div>
				<div class="row mt-4">
					<div class="col-12 category-title">
						<h3>
							<div class="row">
								<div class="col-lg-10 col-md-9 col-8">{{$name2}}</div>
								<div class="col-lg-2 col-md-3 col-4">
									<p><a href="?action=mientrung">Xem Thêm</a></p>
								</div>
							</div>
						</h3>
					</div>
					@foreach ($Cate as $item) @if ($item->category_food == $number2)
					<div class="col-md-4">
						<div class="food-list text-center pb-2 ">
							<img src='{{ asset("images/product/$item->images_food") }}' alt="Mì Quảng" class="img-fluid rounded">
							<h5>{{$item->name_food}}</h5>
							<p>{{number_format($item->price_food)}} VNĐ</p>
							<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
						</div>
					</div>
					@endif @endforeach
				</div>
				<div class="row mt-4">
					<div class="col-12 category-title">
						<h3>
							<div class="row">
								<div class="col-lg-10 col-md-9 col-8">{{$name3}}</div>
								<div class="col-lg-2 col-md-3 col-4">
									<p><a href="?action=miennam">Xem Thêm</a></p>
								</div>
							</div>
						</h3>
					</div>
					@foreach ($Cate as $item) @if ($item->category_food == $number3)
					<div class="col-md-4">
						<div class="food-list text-center pb-2 ">
							<img src='{{ asset("images/product/$item->images_food") }}' alt="Mì Quảng" class="img-fluid rounded">
							<h5>{{$item->name_food}}</h5>
							<p>{{number_format($item->price_food)}} VNĐ</p>
							<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
						</div>
					</div>
					@endif @endforeach
				</div>
				@if (isset($name4) && isset($number4))
				<div class="row mt-4">
					<div class="col-12 category-title">
						<h3>
							<div class="row">
								<div class="col-lg-10 col-md-9 col-8">{{$name4}}</div>
								<div class="col-lg-2 col-md-3 col-4">
									<p><a href="?action=trangmieng">Xem Thêm</a></p>
								</div>
							</div>
						</h3>
					</div>
					@foreach ($Cate as $item) @if ($item->category_food == $number4)
					<div class="col-md-4">
						<div class="food-list text-center pb-2 ">
							<img src='{{ asset("images/product/$item->images_food") }}' alt="Mì Quảng" class="img-fluid rounded">
							<h5>{{$item->name_food}}</h5>
							<p>{{number_format($item->price_food)}} VNĐ</p>
							<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
						</div>
					</div>
					@endif @endforeach
				</div>
				@endif
			</div>
		</div>
	</div>
</main>
@endsection