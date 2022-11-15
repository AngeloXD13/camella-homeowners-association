@extends('bodpanel.m_announcements.master')

@section('title', 'Manage Announcements')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Manage Annoucements</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('m_announcement.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @if (count($data) > 0)
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->subject }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <form method="post" action="{{ route('m_announcement.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('m_announcement.show', $row->id) }}"
                                        class="btn btn-primary btn-sm">View</a>
                                   <a href="{{ route('m_announcement.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    {{-- <a href="{{ route('bodmember.edit_role', $row->id) }}" class="btn btn-warning btn-sm">Edit Roles</a> --}}

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
