

@extends('adminpanel/layout_adminpanel')
   
@section('title', 'Admin Dashboard')

@section('adminpanel_content')

   <h1>Administrator Dashboard</h1>

   <div class="container mt-5">
        
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Manage Administrators</b></h1>
    
    @yield('content')
</div>


@endsection



