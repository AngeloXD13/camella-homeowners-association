<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class BOD_LoginController extends Controller
{
    function index()
    {
        if (Auth::guard('bod')->check()) {
            return view('bodpanel.content_bodpanel_dashboard');
        }
        else{
            return view('bodpanel.login.login');
        }
       
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'username' =>  'required',
            'password'  =>  'required'
        ]);

        if (Auth::guard('bod')->attempt(['username' => $request->username, 'password' =>
        $request->password], $request->remember)) {
            return redirect(route('bodDashboard'));
        }

        return redirect(route('login_bod'))->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if (Auth::guard('bod')->check()) {
            return view('bodpanel.content_bodpanel_dashboard');
        }

        return redirect(route('login_bod'))->with('success', 'you are not allowed to access');
    }

    function logout(Request $request)
    {
        Session::flush();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect(route('login_bod'));
    }
}
