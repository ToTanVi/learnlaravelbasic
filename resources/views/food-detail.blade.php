@extends('layouts.app')
@section('title',$getfood->name_food)
@section('content')
<main class="pb-5 category">
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
			<div class="col-md-9 col-12 mt-5 pb-4">
				<div class="row">
					<div class="col-md-6">
						<div class="food-img">
							<img src='{{ asset("images/product/$getfood->images_food") }}' alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6">
						<form action="" method="post" class="food-main">
							<h3>{{$getfood->name_food}}</h3>
							<p>{{number_format($getfood->price_food)}} VNĐ</p>
							<p>{{$getfood->description_food}}</p>
							<select class="custom-select" name="quantity">
										<option selected="" value="1">Số lượng</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="3">4</option>
										<option value="3">5</option>
							</select>
							<button type="submit" class="btn btn-outline-info mt-3">Cho vào giỏ hàng</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection