@extends('layouts.admin')
@section('title', $name)
@section('content')
	<form action="{{ route('AddFood') }}" method="POST" class="py-3" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<h3 class="text-center my-3">Thêm sản phẩm</h3>
		<div class="form-group row">
			<label for="input1" class="col-sm-3 col-form-label">Tên sản phẩm:</label>
			<div class="col">
				<input type="text" class="form-control" id="input1" name="name">
				@if ($errors->has('name'))
					<p class="badge badge-danger">{!! $errors->first('name') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input3" class="col-sm-3 col-form-label">Hình ảnh sản phẩm:</label>
			<div class="col">
				<input name="img" type="file" class="form-control">
				@if ($errors->has('img'))
					<p class="badge badge-danger">{!! $errors->first('img') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input2" class="col-sm-3 col-form-label">Giá:</label>
			<div class="col">
				<input type="number" class="form-control" id="input2" name="price">
				@if ($errors->has('price'))
					<p class="badge badge-danger">{!! $errors->first('price') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input4" class="col-sm-3 col-form-label">Mô tả:</label>
			<div class="col">
				<textarea name="description" id="input4" cols="30" rows="10" class="form-control"></textarea>
				@if ($errors->has('desription_food'))
					<p class="badge badge-danger">{!! $errors->first('desription_food') !!}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="input5" class="col-sm-3 col-form-label">Loại:</label>
			<div class="col">
				<select class="custom-select" name="category">
					<option value="1">Đồ ăn</option>
					<option value="2">Đồ uống</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="input6" class="col-sm-3 col-form-label">Loại sản phẩm:</label>
			<div class="col">
				<select class="custom-select" name="categoryfood">
					<option value="1">Món Bắc</option>
					<option value="2">Món Trung</option>
					<option value="3">Món Nam</option>
					<option value="4">Món Tráng Miệng</option>
					<option value="5">Nước Giải Khát</option>
					<option value="6">Nước Ép</option>
					<option value="7">Đồ uống chứa cồn</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
@endsection