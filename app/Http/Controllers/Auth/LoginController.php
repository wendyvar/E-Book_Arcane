<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Ensure that you have a view file at `resources/views/auth/login.blade.php`.
    }

    public function login(Request $request)
    {
        // Handle user login here
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
