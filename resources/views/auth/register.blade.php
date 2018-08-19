@extends('layouts.app')
@section('title','Đăng Ký')
@section('content')
<main class="register my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<div class="panel panel-default">
					<div class="panel-heading title-register">Đăng ký</div>

					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<div class="col-md-6 offset-md-3">
									<input id="name" type="text" class="form-control" placeholder="Họ Tên" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="col-md-6 offset-md-3">
									<input id="email" type="email" class="form-control" placeholder="Địa chỉ E-Mail" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="col-md-6 offset-md-3">
									<input id="password" type="password" placeholder="Mật khẩu" class="form-control" name="password" required>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 offset-md-3">
									<input id="password-confirm" type="password"  placeholder="Xác minh lại mật khẩu" class="form-control" name="password_confirmation" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 offset-md-3">
									<button type="submit" class="btn btn-primary">
										Đăng ký
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
