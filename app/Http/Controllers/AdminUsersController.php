<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    private static function getData(){
        return [
            ['id' => 1, 'username' => 'admin123', 'password' => '12345'],
            ['id' => 2, 'username' => 'admin245', 'password' => '12345'],
            ['id' => 3, 'username' => 'admin678', 'password' => '12345']
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET
        // show all the particular resources
        $data = AdminUser::latest()->paginate(5);

        return view('adminpanel.adminusers.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        //create a new resource show ui
        return view('adminpanel.adminusers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST
        // create a new resource in to database

        $request->validate([
            'username'          =>  'required|unique:t1_adminusers',
            'password'         =>  'required',
        ]);

        $adminuser = new AdminUser;

        $adminuser->username = $request->username;

        $hashed = Hash::make($request->password);
        $adminuser->password = $hashed;

        $adminuser->save();

        return redirect()->route('adminuser.index')->with('success', 'Admin User Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //GET
        //show individually resource
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminUser $adminuser)
    {
        //GET
        //show the layout when edit
        return view('adminpanel.adminusers.edit', compact('adminuser'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminUser $adminuser)
    {
        //POST , when java script i
        //Actual update
        $request->validate([
            'username'          =>  'required|unique:t1_adminusers,username,'.$adminuser->id,
            'password'         =>  'required'
        ]);

        $adminuser = AdminUser::find($request->hidden_id);

        $adminuser->username = $request->username;

        $hashed = Hash::make($request->password);
        $adminuser->password = $hashed;

        $adminuser->save();

        return redirect()->route('adminuser.index')->with('success', 'Admin User Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminuser)
    {
        //DELETE

        $adminuser->delete();
        return redirect()->route('adminuser.index')->with('success', 'Admin User Deleted successfully.');

    }
}
