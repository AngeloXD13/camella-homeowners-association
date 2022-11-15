@extends('adminpanel.bodmembers.master')

@section('title', 'Add BODs')

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
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('bodmember.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">HOA ID</label>
				<div class="col-sm-10">
                    <input type="text" name="hoa_id"  class="form-control" value="{{old('hoa_id')}}"/>
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User Name</label>
				<div class="col-sm-10">
					<input type="text" name="username" class="form-control"  value="{{old('username')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">First Name</label>
				<div class="col-sm-10">
					<input type="text" name="firstname" class="form-control"  value="{{old('firstname')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Middle Initial</label>
				<div class="col-sm-10">
					<input type="text" name="middleinitial" class="form-control"  value="{{old('middleinitial')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Last name</label>
				<div class="col-sm-10">
					<input type="text" name="lastname" class="form-control"  value="{{old('lastname')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email Address</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control"  value="{{old('email')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Phone Number</label>
				<div class="col-sm-10">
					<input type="text" name="phonenumber" class="form-control" value="{{old('phonenumber')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Password</label>
				<div class="col-sm-10">
					<input type="text" name="password" class="form-control"  value="{{old('password')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Position</label>
				<div class="col-sm-10">
					<input type="text" name="position" class="form-control"  value="{{old('position')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Tag</label>
				<div class="col-sm-10">
					<input type="text" name="tag" class="form-control"  value="{{old('tag')}}"/>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Remarks</label>
				<div class="col-sm-10">
					<input type="text" name="remarks" class="form-control"  value="{{old('remarks')}}"/>
				</div>
			</div>
            {{-- for list  --}}
			{{-- <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Gender</label>
				<div class="col-sm-10">
					<select name="student_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div> --}}

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">BOD Member Image</label>
				<div class="col-sm-10">
					<input type="file" name="bod_image"  value="{{old('bod_image')}}"/>
				</div>
			</div>

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')