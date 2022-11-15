
@extends('adminpanel/layout_adminpanel')
   
@section('title', 'Manage Admins')

@section('adminpanel_content')
   
<h1>Manage Administrators</h1>
<button>Add Admin User</button>

<div>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
      <br>

    @if (count($adminusers) > 0)
        @foreach ($adminusers as $adminuser)
        <tr>
          <td>{{$adminuser['username']}}</td>
          <td>{{$adminuser['password']}}</td>
          <td><button>Delete</button></td>
        </tr>
        <br>
      @endforeach

    @else
        <tr>
            <p>No Existing Admin User</p>
        </tr>
    
    @endif

    

    <div>
        User Input: {{$userInput}}
    </div>

</div>

   
@endsection


   
   
   