@extends('adminpanel.bodmembers.master')

@section('title', 'Edit BOD Role')

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
	<div class="card-header">Edit Board of Director Role</div>
	<div class="card-body">
		<form method="post" action="{{ route('bodmember.update_role', $bodrole->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage Announcements</label>
				<div class="col-sm-10">
					<select name="m_announcements" class="form-control">
						<option value="0"<?php if(($bodrole->m_announcements)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_announcements)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_announcements)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage HOA Members</label>
				<div class="col-sm-10">
					<select name="m_hoaMembers" class="form-control">
						<option value="0"<?php if(($bodrole->m_hoaMembers)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_hoaMembers)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_hoaMembers)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage Information</label>
				<div class="col-sm-10">
					<select name="m_infos" class="form-control">
						<option value="0"<?php if(($bodrole->m_infos)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_infos)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_infos)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage Complaints</label>
				<div class="col-sm-10">
					<select name="m_complaints" class="form-control">
						<option value="0"<?php if(($bodrole->m_complaints)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_complaints)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_complaints)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage Requests</label>
				<div class="col-sm-10">
					<select name="m_requests" class="form-control">
						<option value="0"<?php if(($bodrole->m_requests)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_requests)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_requests)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Manage Gallery</label>
				<div class="col-sm-10">
					<select name="m_gallery" class="form-control">
						<option value="0"<?php if(($bodrole->m_gallery)==0)echo('selected')?>>No access </option>
						<option value="1"<?php if(($bodrole->m_gallery)==1)echo('selected')?>>Read Only </option>
						<option value="2"<?php if(($bodrole->m_gallery)==2)echo('selected')?>>Read/Write</option>
					</select>
				</div>
			</div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{$bodrole->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>


@endsection('content')