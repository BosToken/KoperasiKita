<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Session;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index(){
        $dictionary=Dictionary::get();
        $user = Session::get('user');
        return view('user.dictionary', compact('dictionary', 'user'));      
    }
}
