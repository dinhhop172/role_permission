<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * show view Login
     *
     * @return void
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Using login user
     *
     * @return void
     */
    public function loginUser(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect('/admin/users');
        } else {
            return redirect('/admin/login')->with('error', 'Email or password is incorrect');
        }
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
