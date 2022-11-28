@extends('bodpanel/layout_bodpanel')

@section('title', 'BOD Dashboard')

@section('bodpanel_content')

    <!-- Topbar -->
    @include('bodpanel/layout_topbar')
    <!-- End of Topbar -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Announcements</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate List (Soon)</a>
        </div>

        <div>
            @yield('content')
        </div>

    </div>


@endsection
