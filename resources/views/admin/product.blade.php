@extends('layouts.admin')
@section('title',$name)
@section('content')
<div class="row mt-3">
	<div class="col-md-10">
		<h3>Sản phẩm</h3>
	</div>
	<div class="col-md-2"><a href="/laravel/public/admin/food/add" class="btn btn-success">Thêm sản phẩm</a></div>
</div>
<table class="table mt-5">
	<thead>
		<tr>
			<th scope="col">Tên Sản Phẩm</th>
			<th scope="col">Hình ảnh</th>
			<th scope="col">Giá</th>
			<th scope="col">Tùy chọn</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($GetFoodAll as $item)
			<tr>
				<th scope="row" style="vertical-align: middle;">{{$item->name_food}}</th>
				<td><img src='{{ asset("images/product/$item->images_food") }}' alt="" class="img-fluid" width="120" height="120"></td>
				<td style="vertical-align: middle;">{{number_format($item->price_food)}} VNĐ</td>
				<td style="vertical-align: middle;">
					<a href="/laravel/public/admin/food/edit/{{$item->id_food}}" class="btn btn-outline-primary">Sửa</a>
					<a href="/laravel/public/admin/food/delete/{{$item->id_food}}" class="btn btn-outline-danger">Xóa</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection