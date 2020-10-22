<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;
use Session;

class JournalController extends Controller
{
    public function index(){
        $journal=Journal::get();
        $user = Session::get('user');
        return view('user.journal', compact('journal', 'user'));      
    }
}
