@extends('layouts.app')
@section('title','Khuyến Mãi')
@section('content')
<main class=" khuyenmai">
	<div class="container mx-auto">
		<div class="row my-3 my-sm-5 my-md-5 my-lg-3">
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh1.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 1">
			</div>
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh2.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 2">
			</div>
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh3.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 3">
			</div>
		</div>
		<div class="row my-3 my-sm-5 my-md-5 my-lg-3 mt-5">
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh3.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 3">
			</div>
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh2.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 2">
			</div>
			<div class="col-md-4 col-sm-12 my-2 my-sm-3 my-md-0">
				<img src=" {{ asset('/images/anh1.jpg') }}" class="img-fluid img-thumbnail" alt="Hinh 1">
			</div>
		</div>
	</div>
</main>
@endsection