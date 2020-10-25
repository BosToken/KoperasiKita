<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Dictionary;
use Session;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index(){
        $dictionary=Dictionary::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.dictionary', compact('dictionary', 'user' , 'setting'));      
    }



    public function __construct(){
        $this->middleware('cek_login');
    }
}
