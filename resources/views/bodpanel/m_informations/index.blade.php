@extends('bodpanel.m_informations.master')

@section('title', 'Manage Informations')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">All Information</a></li>
        <li><a data-toggle="tab" href="#menu1">Board of Directors</a></li>
        <li><a data-toggle="tab" href="#menu2">Committee</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>

    <div class="card">

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6"><b>All Information in Homepage</b></div>
                        <div class="col col-md-6">
                            <a href="{{ route('m_information.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category</th>
                            <th>Heading 1</th>
                            <th>Heading 2</th>
                            <th>Heading 3</th>
                            <th>Action</th>
                        </tr>
                        @if (count($data) > 0)
                            @foreach ($data as $row)
                                <tr>
                                    <td>
                                        @foreach ($categories as $category => $val)
                                            @if ($val['id'] === $row->i_catergory_id)
                                                <?php echo $categories[$category]['title']; ?>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $row->heading1 }}</td>
                                    <td>{{ $row->heading2 }}</td>
                                    <td>{{ $row->heading3 }}</td>
                                    <td>
                                        <form method="post" action="{{ route('m_information.destroy', $row->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('m_information.show', $row->id) }}"
                                                class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('m_information.edit', $row->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>


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

            <div id="menu1" class="tab-pane fade in">
                <h3>Board of Directors</h3>
                <div class="card-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                        @if (count($data) > 0)
                            @foreach ($data as $row => $val)
                                @if ($val['i_catergory_id'] === 1)
                                    <?php
                                    $category_bodmebers = $row;
                                    // dd($data[$category_bodmebers]);
                                    ?>
                                    <tr>
                                        <td>{{ $data[$category_bodmebers]['heading1'] }}</td>
                                        <td>{{ $data[$category_bodmebers]['heading2'] }}</td>
                                        {{-- <td>{{ $info->heading3 }}</td> --}}

                                        <td>
                                            <form method="post" action="{{ route('m_information.destroy', $row) }}">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <a href="{{ route('m_information.show', $info->id) }}"
                                                     class="btn btn-primary btn-sm">View</a> --}}
                                                {{-- <a href="{{ route('m_information.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                                {{-- <a href="{{ route('bodmember.edit_role', $info->id) }}" class="btn btn-warning btn-sm">Edit Roles</a> --}}

                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                            </form>

                                        </td>
                                    </tr>
                                @endif
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

        </div>

    </div>
@endsection
