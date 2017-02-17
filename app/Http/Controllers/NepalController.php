<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NepalController extends Controller
{
    public function nepal($id)
    {
        $sum=$id*100;

       $array_name=array($id,$sum);
        return view('Country.nepal',compact('array_name'));

    }
}

