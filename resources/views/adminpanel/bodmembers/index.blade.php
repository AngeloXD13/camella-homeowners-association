@extends('adminpanel.bodmembers.master')

@section('title', 'Manage BODs')

@section('content')
@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Board of Directors Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('bodmember.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>First Name</th>
				<th>Last Name</th>
                <th>Position</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset($row->bod_image) }}" width="75" /></td>
						<td>{{ $row->firstname }}</td>
						<td>{{ $row->lastname }}</td>
                        <td>{{ $row->position }}</td>
						<td>
							<form method="post" action="{{ route('bodmember.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('bodmember.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('bodmember.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<a href="{{ route('bodmember.edit_role', $row->id) }}" class="btn btn-warning btn-sm">Edit Roles</a>

								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>
@endsection
