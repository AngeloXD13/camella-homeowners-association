@extends('adminpanel.bodmembers.master')

@section('title', 'Edit BOD Details')

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
	<div class="card-header">Edit Board of Director Details</div>
	<div class="card-body">
		<form method="post" action="{{ route('bodmember.update', $bodmember->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">HOA ID</label>
				<div class="col-sm-10">
                    <input type="text" name="hoa_id"  class="form-control" value="{{$bodmember->hoa_id}}"/>
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User Name</label>
				<div class="col-sm-10">
					<input type="text" name="username" class="form-control"  value="{{$bodmember->username}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">First Name</label>
				<div class="col-sm-10">
					<input type="text" name="firstname" class="form-control"  value="{{$bodmember->firstname}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Middle Initial</label>
				<div class="col-sm-10">
					<input type="text" name="middleinitial" class="form-control"  value="{{$bodmember->middleinitial}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Last name</label>
				<div class="col-sm-10">
					<input type="text" name="lastname" class="form-control"  value="{{$bodmember->lastname}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email Address</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control"  value="{{$bodmember->email}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Phone Number</label>
				<div class="col-sm-10">
					<input type="text" name="phonenumber" class="form-control" value="{{$bodmember->phonenumber}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">New Password</label>
				<div class="col-sm-10">
					<input type="text" name="password" class="form-control"  value=""/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Position</label>
				<div class="col-sm-10">
					<input type="text" name="position" class="form-control"  value="{{$bodmember->position}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Tag</label>
				<div class="col-sm-10">
					<input type="text" name="tag" class="form-control"  value="{{$bodmember->tag}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Remarks</label>
				<div class="col-sm-10">
					<input type="text" name="remarks" class="form-control"  value="{{$bodmember->remarks}}"/>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="bod_image" />
					<br />
					<img src="{{ asset($bodmember->bod_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_bod_image" value="{{ $bodmember->bod_image }}" />
				</div>
			</div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{$bodmember->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>


@endsection('content')