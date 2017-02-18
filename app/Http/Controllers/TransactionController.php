<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function transaction()
    {
        $bank=Transaction::all();
        return view('Transaction.transactiondetail',compact('bank'));
    }
    Public function insert(Request $apply)
    {
        $array=array('name'=>$apply->name,'account_no'=>$apply->account_no,'current_balance'=>$apply->current_balance,'transaction_date'=>$apply->transaction_date);
        $submit=Transaction::create($array);
        return redirect('/transactiondetail');

    }
    Public function remove($id)
    {
        $action=Transaction::find($id);
        $action->delete();
        return redirect('/transactiondetail');
    }
    Public function rewrite($id)
    {
        $action_edit=Transaction::findorFail($id);
        $action=Transaction::all();
        return view('Transaction.transactiondetail',compact('action','action_edit'));
    }
    Public function load($id,Request $apply)
    {
        $array=array('name'=>$apply->name,'account_no'=>$apply->account_no,'current_balance'=>$apply->current_balance,'transaction_date'=>$apply->transaction_date);
        $submit=Transaction::where('id',$id)->update($array);
        return redirect('/transactiondetail');
    }

}
