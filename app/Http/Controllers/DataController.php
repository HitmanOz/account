<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
?>