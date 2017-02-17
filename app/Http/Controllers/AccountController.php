<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function incorrectpassword()
    {
        return view('incorrect_password');

    }

    public function home()
    {
        $fruits =array("Fa"=>"apple","Fp"=>"pineapple","Fb"=>"banana","Fg"=>"grapes","Fm"=>"mango");
        $x=5+3;
        return view('home',compact('fruits','x'));
        var_dump($fruits);
    }
    public function index()
    {
        $accounts=Account::all();
        return view('Account.display',compact('accounts'));
    }
    public function transaction()
    {
        $bank=Transaction::all();
        return view('Transaction.transaction',compact('bank'));
    }
}

?>