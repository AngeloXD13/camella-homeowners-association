@extends('adminpanel.bodmembers.master')

@section('title', 'View BOD Details')

@section('content')

<div class="card">

	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Board of Member Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('bodmember.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>

	<div class="card-body">

		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>HOA ID</b></label>
			<div class="col-sm-10">
				{{ $bodmember->hoa_id }}
			</div>
		</div>

		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Username</b></label>
			<div class="col-sm-10">
				{{ $bodmember->username }}
			</div>
		</div>

        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>First Name</b></label>
			<div class="col-sm-10">
				{{ $bodmember->firstname }}
			</div>
		</div>

        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Middle Initials</b></label>
			<div class="col-sm-10">
				{{ $bodmember->middleinitial }}
			</div>
		</div>

        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Last Name</b></label>
			<div class="col-sm-10">
				{{ $bodmember->lastname }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Email</b></label>
			<div class="col-sm-10">
				{{ $bodmember->email }}
			</div>
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Phone Number</b></label>
			<div class="col-sm-10">
				{{ $bodmember->phonenumber }}
			</div>
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Password</b></label>
			<div class="col-sm-10">
				•••••••••
			</div>
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Position</b></label>
			<div class="col-sm-10">
				{{ $bodmember->position }}
			</div>
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Tag</b></label>
			<div class="col-sm-10">
				{{ $bodmember->tag }}
			</div>
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Remarks</b></label>
			<div class="col-sm-10">
				{{ $bodmember->remarks }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>BOD Picture</b></label>
			<div class="col-sm-10">
				<img src="{{ asset($bodmember->bod_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')