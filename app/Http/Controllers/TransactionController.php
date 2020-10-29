<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Transaction;
use Session;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transaction=Transaction::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.transaction', compact('transaction', 'user' , 'setting'));      
    }

    public function store(Request $request)
    {
        $num_evidence = $request->num_evidence;
        $type_transaction = $request->type_transaction;
        $dictionary_id = $request->dictionary_id;
        $body = $request->body;
        $amount = $request->amount;
        $operator = $request->operator;
        $status = $request->status;

        $transaction = new Transaction();
        $transaction->num_evidence = $num_evidence;
        $transaction->type_transaction = $type_transaction;
        $transaction->dictionary_id = $dictionary_id;
        $transaction->body = $body;
        $transaction->amount = $amount;
        $transaction->operator = $operator;
        $transaction->status = $status;
        $transaction->save();

        return redirect()->action('TransactionController@index');
    }
}
