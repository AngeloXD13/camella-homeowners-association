@extends('bodpanel.login.main')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>


@endif

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form action="{{ route('bodpanel.validate_login') }}" method="post">
					@csrf
					<div class="form-group mb-3">
						<input type="text" name="username" class="form-control" placeholder="Email" />
						@if($errors->has('username'))
							<span class="text-danger">{{ $errors->first('username') }}</span>
						@endif
					</div>
					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password" />
						@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
					</div>
					<div class="d-grid mx-auto">
						<button type="subit" class="btn btn-dark btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection('content')