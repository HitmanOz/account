<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function account()
    {
    return view('account');
}

        public function balance()
    {
        return view('balance');

    }
}
    ?>