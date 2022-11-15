@extends('adminpanel.adminusers.master')

@section('title', 'Add AdminUser')

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

<div class="card">
	<div class="card-header">Add Admin Account</div>
	<div class="card-body">
		<form method="post" action="{{ route('adminuser.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Username</label>
				<div class="col-sm-10">
                    <input type="text" name="username"  class="form-control" value="{{old('username')}}"/>
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Password</label>
				<div class="col-sm-10">
					<input type="text" name="password" class="form-control"  value="{{old('password')}}"/>
				</div>
			</div>

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')