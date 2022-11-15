<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Auth;

class Admin_LoginController extends Controller
{
    function index()
    {
        if (Auth::guard('admin')->check()) {

            return view('adminpanel.content_adminpanel_dashboard');
        }
        else{
            return view('adminpanel.login.login');
        }
       
    }

    // function registration()
    // {
    //     return view('registration');
    // }

    // function validate_registration(Request $request)
    // {
    //     $request->validate([
    //         'name'         =>   'required',
    //         'email'        =>   'required|email|unique:users',
    //         'password'     =>   'required|min:6'
    //     ]);

    //     $data = $request->all();

    //     AdminUser::create([
    //         'name'  =>  $data['name'],
    //         'email' =>  $data['email'],
    //         'password' => Hash::make($data['password'])
    //     ]);

    //     return redirect('login')->with('success', 'Registration Completed, now you can login');
    // }

    function validate_login(Request $request)
    {
        $request->validate([
            'username' =>  'required',
            'password'  =>  'required'
        ]);

        // $credentials = $request->only('username', 'password');

        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect('adminpanel.content_adminpanel_dashboard');
        // }

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' =>
        $request->password], $request->remember)) {
            return redirect(route('adminDashboard'));
        }

        return redirect(route('login'))->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            //dd('haha');
            return view('adminpanel.content_adminpanel_dashboard');
            //redirect(route('adminDashboard'));
        }

        return redirect(route('login'))->with('success', 'you are not allowed to access');
    }

    function logout(Request $request)
    {
        Session::flush();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect(route('login'));
    }
}
