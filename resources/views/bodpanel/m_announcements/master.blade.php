@extends('bodpanel/layout_bodpanel')
   
@section('title', 'BOD Dashboard')

@section('bodpanel_content')

   <h1>Board of Directors Dashboard</h1>
   <div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Manage Announcements</b></h1>
    
    @yield('content')
</div>


@endsection



