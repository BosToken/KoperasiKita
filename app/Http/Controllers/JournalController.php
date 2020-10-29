<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Journal;
use Illuminate\Http\Request;
use Session;

class JournalController extends Controller
{
    public function index(){
        $journal=Journal::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.journal', compact('journal', 'user', 'setting'));      
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $discharge = $request->discharge;
        $credit = $request->credit;

        $journal = new Journal();
        $journal->title = $title;
        $journal->body = $body;
        $journal->discharge = $discharge;
        $journal->credit = $credit;
        $journal->save();

        return redirect()->action('JournalController@index');
    }
}
