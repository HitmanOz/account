<?php

namespace App\Http\Controllers;

use App\Account;
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


    public function store(Request $request)
    {
        $attribute=['account_name'=>$request->account_name,'account_type'=>$request->account_type,'account_no'=>$request->account_no];
        $result=Account::create($attribute);
        return redirect('/account');
    }
    public function delete($id)
    {
        $account=Account::find($id);
        $account->delete();
        return redirect('/account');
    }
     public function edit($id)
     {
         $account_edit=Account::findorFail($id);
         $accounts=Account::all();
         return view('Account.display',compact('accounts','account_edit'));

     }
     public function update($id,Request $request)
     {
         $attribute=['account_name'=>$request->account_name,'account_type'=>$request->account_type,'account_no'=>$request->account_no];
         $result=Account::where('id',$id)->update($attribute);
         return redirect('/account');
     }
}

?>