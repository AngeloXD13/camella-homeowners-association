@extends('adminpanel.adminusers.master')

@section('title', 'Manage Admins')

@section('content')
@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Admininistrator Account</b></div>
			<div class="col col-md-6">
				<a href="{{ route('adminuser.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->username }}</td>
						{{-- <td>{{ $row->password }}</td> --}}
						<td>•••••••••</td>
						<td>
							<form method="post" action="{{ route('adminuser.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('adminuser.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
