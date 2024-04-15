<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

abstract class Controller
{
    public function index()
    {
        if (!Session::has('user_id')) {
            return redirect('login');
        }

        return view('welcome');
    }
}
