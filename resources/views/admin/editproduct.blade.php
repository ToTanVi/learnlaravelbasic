@extends('layouts.admin')
@section('title', $name)
@section('content')
	<form action="{{ route('UpdateFood') }}" method="POST" class="py-3" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="hidden" value="{{$GetFoodID->id_food}}" name="id">
		<h3 class="text-center my-3">Thêm sản phẩm</h3>
		<div class="form-group row">
			<label for="input1" class="col-sm-3 col-form-label">Tên sản phẩm:</label>
			<div class="col">
				<input type="text" class="form-control" id="input1" name="name" value="{{$GetFoodID->name_food}}">
				@if ($errors->has('name'))
					<p class="badge badge-danger">{!! $errors->first('name') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input3" class="col-sm-3 col-form-label">Hình ảnh sản phẩm:</label>
			<div class="col">
				<img src='{{ asset("images/product/$GetFoodID->images_food") }}' alt="" class="img-responsive" width="200" height="200">
				<input name="img" type="file" class="form-control">
				<input name="img2" type="text" class="form-control" value="{{$GetFoodID->images_food}}">
				@if ($errors->has('img'))
					<p class="badge badge-danger">{!! $errors->first('img') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input2" class="col-sm-3 col-form-label">Giá:</label>
			<div class="col">
				<input type="number" class="form-control" id="input2" name="price" value="{{$GetFoodID->price_food}}">
				@if ($errors->has('price'))
					<p class="badge badge-danger">{!! $errors->first('price') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input4" class="col-sm-3 col-form-label">Mô tả:</label>
			<div class="col">
				<textarea name="description" id="input4" cols="30" rows="10" class="form-control">{{$GetFoodID->description_food}}</textarea>
				@if ($errors->has('desription_food'))
					<p class="badge badge-danger">{!! $errors->first('desription_food') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input5" class="col-sm-3 col-form-label">Loại:</label>
			<div class="col">
				<select class="custom-select" name="category">
					@if ($GetFoodID->category==1)
					<option value="1" selected="selected">Đồ ăn</option>
					<option value="2">Đồ uống</option>
					@else
					<option value="1">Đồ ăn</option>
					<option value="2" selected="selected">Đồ uống</option>
					@endif
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="input6" class="col-sm-3 col-form-label">Loại sản phẩm:</label>
			<div class="col">
				<select class="custom-select" name="categoryfood">
					@if ($GetFoodID->category_food==1)
						<option value="1" selected="selected">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==2)
						<option value="1">Món Bắc</option>
						<option value="2" selected="selected">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==3)
						<option value="1">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3" selected="selected">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==4)
						<option value="1">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4" selected="selected">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==5)
						<option value="1">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5" selected="selected">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==6)
						<option value="1">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6" selected="selected">Nước Ép</option>
						<option value="7">Đồ uống chứa cồn</option>
					@endif
					@if ($GetFoodID->category_food==7)
						<option value="1">Món Bắc</option>
						<option value="2">Món Trung</option>
						<option value="3">Món Nam</option>
						<option value="4">Món Tráng Miệng</option>
						<option value="5">Nước Giải Khát</option>
						<option value="6">Nước Ép</option>
						<option value="7" selected="selected">Đồ uống chứa cồn</option>
					@endif
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Sửa</button>
	</form>
@endsection