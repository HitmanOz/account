<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToiletController extends Controller
{
    public function id()
    {
        return view('id');

    }

    public function login()
    {
        return view('login');
    }
}
?>