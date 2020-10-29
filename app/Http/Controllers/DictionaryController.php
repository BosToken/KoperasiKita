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

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $formula = $request->formula;
        $type = $request->type;

        $dictionary = new Dictionary();
        $dictionary->title = $title;
        $dictionary->body = $body;
        $dictionary->formula = $formula;
        $dictionary->type = $type;
        $dictionary->save();

        return redirect()->action('DictionaryController@index');
    }

}
