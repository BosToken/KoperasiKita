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




    public function __construct(){
        $this->middleware('cek_login');
    }
}
