@extends('adminpanel.adminusers.master')

@section('title', 'Edit Admin Acc')

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
	<div class="card-header">Edit Admin Account</div>
	<div class="card-body">
		<form method="post" action="{{ route('adminuser.update', $adminuser->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Username (unchangeble)</label>
				<div class="col-sm-10">
                    <input type="text" name="username"  class="form-control" value="{{$adminuser->username}}" readonly/>
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">New Password</label>
				<div class="col-sm-10">
					<input type="text" name="password" class="form-control"  value=""/>
				</div>
			</div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{$adminuser->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>


@endsection('content')