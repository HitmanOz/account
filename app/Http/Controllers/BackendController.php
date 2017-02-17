<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function password()
    {
        return view('password');

    }

    public function logout()
    {
        return view('logout');
    }
}
?>