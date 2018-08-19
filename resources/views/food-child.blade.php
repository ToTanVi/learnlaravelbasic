@extends('layouts.app')
@section('title',$name)
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
			<div class="col-md-9 col-12">
				<div class="row">
					<div class="col-12 text-center mt-3 food-title">
						<h2><?php echo $name ?></h2>
					</div>
				</div>
				<div class="row mt-4">
					@foreach ($Cate as $item)
					<div class="col-md-4">
						<div class="food-list text-center pb-2 mb-2">
							<img src='{{ asset("images/product/$item->images_food") }}' alt="" class="img-fluid rounded">
							<h5>{{$item->name_food}}</h5>
							<p>{{$item->price_food}}</p>
							<button type="button" class="btn btn-mv"><a href="/laravel/public/food/{{$item->id_food}}">Mua hàng</a></button>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>
@endsection