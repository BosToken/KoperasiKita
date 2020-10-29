<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\SystemLog;
use Session;
use Illuminate\Http\Request;

class SystemLogController extends Controller
{
    public function index(){
        $systemlog=SystemLog::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.systemlog', compact('systemlog', 'user' , 'setting'));      
    }
    public function store(Request $request)
    {
        $event = $request->event;
        $num_evidence = $request->num_evidence;
        $num_transaction = $request->num_transaction;
        $body = $request->body;
        $operator = $request->operator;

        $systemlog = new SystemLog();
        $systemlog->event = $event;
        $systemlog->num_evidence = $num_evidence;
        $systemlog->num_transaction = $num_transaction;
        $systemlog->body = $body;
        $systemlog->operator = $operator;
        $systemlog->save();

        return redirect()->action('SystemLogController@index');
    }
}
