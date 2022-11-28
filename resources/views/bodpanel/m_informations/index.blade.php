@extends('bodpanel.m_informations.master')

@section('title', 'Manage Informations')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>



    {{-- <ul class="nav nav-pills">
        <li class="active"><a data-toggle="tab" href="#home">All Information</a></li>
        <li><a data-toggle="tab" href="#menu1">Board of Directors</a></li>
        <li><a data-toggle="tab" href="#menu2">Committee</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul> --}}

    <ul class="nav nav-pills mb-3" id="ex1" role="tablist">

        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Information</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="false">Board of Directors</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="bod-tab" data-bs-toggle="tab" data-bs-target="#bod-tab-pane" type="button" role="tab" aria-controls="bod-tab-pane" aria-selected="false" disabled>Committee(Soon)</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Hoa Management Personel(Soon)</a>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Service and Amenities(Soon)</a>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Projects(Soon)</a>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Vicinity_Map(Soon)</a>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Gallery(Soon)</a>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Forms(Soon)</a>
        </li>

        

    </ul>


    <div class="card">

        <div class="tab-content" id="ex1-content">

            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6"><b>All Information in Homepage</b></div>
                        <div class="col col-md-6">
                            <a href="{{ route('m_information.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <th>Category</th>
                                <th>Heading 1</th>
                                <th>Heading 2</th>

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
                    </div>
                </div>
            </div>

            
            <div class="tab-pane fade" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6"><b>Board of Directors</b></div>
                        <div class="col col-md-6">
                            <a href="{{ route('m_information.createbod') }}" class="btn btn-success btn-sm float-end">Add
                                BOD Member</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Phone Number</th>
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
                                        <td>{{ $data[$category_bodmebers]['heading3'] }}</td>
                                        <td>{{ $data[$category_bodmebers]['heading4'] }}</td>

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




                </div>
            </div>

            <div class="tab-pane fade" id="bod-tab-pane" role="tabpanel" aria-labelledby="bod-tab" tabindex="0">...</div>

            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>

        </div>

    </div>
@endsection
