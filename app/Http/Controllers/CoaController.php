<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Coa;
use Session;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    public function index(){
        $coa=Coa::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.coa', compact('coa', 'user' , 'setting'));      
    }

    public function store(Request $request)
    {
        $num_approximate = $request->num_approximate;
        $parent_id = $request->parent_id;
        $title = $request->title;
        $code = $request->code;
        $headdet = $request->headdet;
        $dk = $request->dk;

        $coa = new Coa();
        $coa->num_approximate = $num_approximate;
        $coa->parent_id = $parent_id;
        $coa->title = $title;
        $coa->code = $code;
        $coa->headdet = $headdet;
        $coa->dk = $dk;
        $coa->save();

        return redirect()->action('CoaController@index');
    }
}
